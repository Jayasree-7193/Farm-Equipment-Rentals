<!DOCTYPE html>
<html>

<?php 
include('session_client.php'); ?> 
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body>

      <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Farm Equipment Rentals </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="entertool.php">Add Tool</a></li>
              <li> <a href="enteragent.php"> Add Agent</a></li>
              <li> <a href="clientview.php">View</a></li>

            </ul>
            </li>
          </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <li>
                        <a href="#">History</a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">Admin</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>
                    <li>
                        <a href="faq/index.php"> FAQ </a>
                    </li>
			   <li>
                        <a href="about.php"> About </a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="entertool1.php" enctype="multipart/form-data" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Please Provide Your Tool Details. </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="tool_id" name="tool_id" placeholder="Tool ID " required autofocus="">
          </div>
	     <div class="form-group">
            <input type="text" class="form-control" id="tool_name" name="tool_name" placeholder="Tool Name " required autofocus="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="tool_type" name="tool_type" placeholder="Tool Type" required>
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="userguide_price_per_hr" name="userguide_price_per_hr" placeholder="UserGuide Fare per hr (Rs)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="non_userguide_price_per_hr" name="non_userguide_price_per_hr" placeholder="Non-UserGuide Fare per hr (Rs)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="userguide_price_per_day" name="userguide_price_per_day" placeholder="UserGuide Fare per day (Rs)" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="non_userguide_price_per_day" name="non_userguide_price_per_day" placeholder="Non-UserGuide Fare per day (Rs)" required>
          </div>
	     <div class="form-group">
            <input type="text" class="form-control" id="tool_text" name="tool_text" placeholder="Tool Text " required autofocus="">
          </div>
	     <div class="form-group">
            <input type="text" class="form-control" id="tool_availability" name="tool_availability" placeholder="Tool Availability " required autofocus="">
          </div>

          <div class="form-group">
            <input name="uploadedimage" type="file">
          </div>
	   

           <button type="submit" id="submit" name="submit" class="btn btn-success pull-right"> Submit for Rental</button>    
        </form>
      </div>
    </div>


        <div class="col-md-12" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Tools </h3>
<?php
// Storing Session
$user_check=$_SESSION['login_client'];
$sql = "SELECT * FROM tools WHERE tool_id IN (SELECT tool_id FROM clienttools WHERE client_username='$user_check');";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>
<div style="overflow-x:auto;">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th></th>
	  <th width="13%">ID</th>
        <th width="24%"> Name</th>
        <th width="15%"> Type </th>
        <th width="13%"> UserGuide Fare (/hr) </th>
        <th width="17%"> Non-UserGuide Fare (/hr)</th>
        <th width="13%"> UserGuide Fare (/day)</th>
        <th width="17%"> Non-UserGuide Fare (/day)</th>
        <th width="1%"> Availability </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
	<td><?php echo $row["tool_id"]; ?></td>
      <td><?php echo $row["tool_name"]; ?></td>
      <td><?php echo $row["tool_type"]; ?></td>
      <td><?php echo $row["userguide_price_per_hr"]; ?></td>
      <td><?php echo $row["non_userguide_price_per_hr"]; ?></td>
      <td><?php echo $row["userguide_price_per_day"]; ?></td>
      <td><?php echo $row["non_userguide_price_per_day"]; ?></td>
      <td><?php echo $row["tool_availability"]; ?></td>
      
    </tr>
  </tbody>
  <?php } ?>
  </table>
  </div>
    <br>
  <?php } else { ?>
  <h4><center>0 Tools available</center> </h4>
  <?php } ?>
        </form>
</div>        
        </div>
    </div>
</body>
<footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© <?php echo date("Y"); ?> Developed By Batch 12</h5>
                </div>
            </div>
        </div>
    </footer>
</html>