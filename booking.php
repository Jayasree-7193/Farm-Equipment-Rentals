<!DOCTYPE html>
<html>
<?php 
 include('session_customer.php');
if(!isset($_SESSION['login_customer'])){
    session_destroy();
    header("location: customerlogin.php");
}
?> 
<title>Book Tool </title>
<head>
    <script type="text/javascript" src="assets/ajs/angular.min.js"> </script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="assets/js/custom.js"></script> 
 <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body ng-app=""> 


      <!-- Navigation -->
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
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Control Panel<span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="prereturntool.php">Return Now</a></li>
              <li> <a href="mybookings.php"> My Bookings</a></li>
            </ul>
            </li>
          </ul>
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
                        <a href="faq/indexx.php"> FAQ </a>
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
        <form role="farm" name=f1 action="bookingconfirm.php" method="POST">
        <br style="clear: both">
          <br>

        <?php
        $tool_id = $_GET["id"];
        $sql1 = "SELECT * FROM tools WHERE tool_id = '$tool_id'";
        $result1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                $tool_name = $row1["tool_name"];
                $tool_type = $row1["tool_type"];
                $userguide_price_per_hr = $row1["userguide_price_per_hr"];
                $non_userguide_price_per_hr = $row1["non_userguide_price_per_hr"];
                $userguide_price_per_day = $row1["userguide_price_per_day"];
                $non_userguide_price_per_day = $row1["non_userguide_price_per_day"];
            }
        }

        ?>

          <!-- <div class="form-group"> -->
              <h5> Selected Tool:&nbsp;  <b><?php echo($tool_name);?></b></h5>
         <!-- </div> -->
         
          <!-- <div class="form-group"> -->
            <h5> Tool Type:&nbsp;<b> <?php echo($tool_type);?></b></h5>
          <!-- </div>      -->
        <!-- <div class="form-group"> -->
        <?php $today = date("Y-m-d") ?>
          <label><h5>Start Date:</h5></label>
            <input type="date" name="rent_start_date" min="<?php echo($today);?>" required="">
            &nbsp; 
          <label><h5>End Date:</h5></label>
          <input type="date" name="rent_end_date" min="<?php echo($today);?>" required="">
        <!-- </div>      -->
        
        <h5> Choose your Tool type:  &nbsp;
            <input onclick="reveal()" type="radio" name="radio" value="userguide" ng-model="myVar"> <b>With Guide </b>&nbsp;
            <input onclick="reveal()" type="radio" name="radio" value="non_userguide" ng-model="myVar"><b>With-Out Guide </b>
                
        
        <div ng-switch="myVar"> 
        <div ng-switch-default>
                    <!-- <div class="form-group"> -->
                <h5>Fare: <h5>    
                <!-- </div>    -->
                     </div>
                    <div ng-switch-when="userguide">
                    <!-- <div class="form-group"> -->
                <h5>Fare: <b><?php echo("Rs. " . $userguide_price_per_hr . "/hr and Rs. " . $userguide_price_per_day . "/day");?></b><h5>    
                <!-- </div>    -->
                     </div>
                     <div ng-switch-when="non_userguide">
                     <!-- <div class="form-group"> -->
                <h5>Fare: <b><?php echo("Rs. " . $non_userguide_price_per_hr . "/hr and Rs. " . $non_userguide_price_per_day . "/day");?></b><h5>    
                <!-- </div>   -->
                     </div>
        </div>
        
         <!-- <form class="form-group"> -->
        <div ng-switch="myVar">
	  <div ng-switch-default>
                </div>
                <div ng-switch-when="userguide">
                Select a Service Agent: &nbsp;
                <select name="agent_id_from_dropdown" ng-model="myVar1">
                        <?php
                        $sql2 = "SELECT * FROM agent a WHERE a.agent_availability = 'yes' AND a.client_username IN (SELECT ct.client_username FROM clienttools ct WHERE ct.tool_id = '$tool_id')";
                        $result2 = mysqli_query($conn, $sql2);

                        if(mysqli_num_rows($result2) > 0){
                            while($row2 = mysqli_fetch_assoc($result2)){
                                $agent_id = $row2["agent_id"];
                                $agent_name = $row2["agent_name"];
                                $agent_gender = $row2["agent_gender"];
                                $agent_phone = $row2["agent_phone"];
                    ?>
  

                    <option value="<?php echo($agent_id); ?>"><?php echo($agent_name); ?>
                   

                    <?php }} 
                    else{
                        ?>
                    Sorry! No Service Agents are currently available, try again later...
                        <?php
                    }
                    ?>
                </select>
		<!-- </form> -->
                <div ng-switch="myVar1">
                

                <?php
                        $sql3 = "SELECT * FROM agent a WHERE a.agent_availability = 'yes' AND a.client_username IN (SELECT ct.client_username FROM clienttools ct WHERE ct.tool_id = '$tool_id')";
                        $result3 = mysqli_query($conn, $sql3);

                        if(mysqli_num_rows($result3) > 0){
                            while($row3 = mysqli_fetch_assoc($result3)){
                                $agent_id = $row3["agent_id"];
                                $agent_name = $row3["agent_name"];
                                $agent_gender = $row3["agent_gender"];
                                $agent_phone = $row3["agent_phone"];

                ?>

                <div ng-switch-when="<?php echo($agent_id); ?>">
                    <h5>Service Agent Name:&nbsp; <b><?php echo($agent_name); ?></b></h5>
                    <p>Gender:&nbsp; <b><?php echo($agent_gender); ?></b> </p>
                    <p>Contact:&nbsp; <b><?php echo($agent_phone); ?></b> </p>
                </div>
                <?php }} ?>
                </div>
                <input type="hidden" name="hidden_toolid" value="<?php echo $tool_id; ?>">
                <!-- </form> -->
          </div>
	</div>
         <h5> Charge type:  &nbsp;
            <input onclick="reveal()" type="radio" name="radio1" value="hr"><b> per hr</b> &nbsp;
            <input onclick="reveal()" type="radio" name="radio1" value="days"><b> per day</b>
	  
		<h5> Payment type:  &nbsp;
            <input onclick="reveal()" type="radio" name="radio2" value="debit"><b> Debit</b> &nbsp;
            <input onclick="reveal()" type="radio" name="radio2" value="netbanking"><b> Net Banking</b>
            <input onclick="reveal()" type="radio" name="radio2" value="upi"><b> UPI</b> &nbsp;
            <input onclick="reveal()" type="radio" name="radio2" value="other"><b> Other</b>

<br><br>
           <input type="submit"name="submit" value="Rent Now" class="btn btn-warning pull-right">   
           <input type="submit" value="Add to cart" onClick="f1.action='cartconfirm.php'" class="btn btn-warning pull-left">   
 
        <br><br><br>
      </div>
      <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6><strong>Note:</strong> You will be charged with extra <span class="text-danger">Rs. 200</span> for each day after the due date ends.</h6>
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