<html>

  <head>
    <title> customer Signup | Farm Equipment Rentals </title>
  </head>
  <?php session_start(); ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">

    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

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
                        <a href="about.php"> About</a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php

require 'connection.php';
$conn = Connect();

function GetImageExtension($imagetype) {
    if(empty($imagetype)) return false;
    
    switch($imagetype) {
        case 'assets/img/tools/bmp': return '.bmp';
        case 'assets/img/tools/gif': return '.gif';
        case 'assets/img/tools/jpeg': return '.jpg';
        case 'assets/img/tools/png': return '.png';
        default: return false;
    }
}

$tool_id = $conn->real_escape_string($_POST['tool_id']);
$tool_name = $conn->real_escape_string($_POST['tool_name']);
$tool_type = $conn->real_escape_string($_POST['tool_type']);
$userguide_price_per_hr = $conn->real_escape_string($_POST['userguide_price_per_hr']);
$non_userguide_price_per_hr = $conn->real_escape_string($_POST['non_userguide_price_per_hr']);
$userguide_price_per_day = $conn->real_escape_string($_POST['userguide_price_per_day']);
$non_userguide_price_per_day = $conn->real_escape_string($_POST['non_userguide_price_per_day']);
$tool_text = $conn->real_escape_string($_POST['tool_text']);
$tool_availability = "yes";

//$query = "INSERT into tools(tool_id,tool_name,tool_type,userguide_price_per_hr,non_userguide_price_per_hr,tool_availability) VALUES('" . $tool_id . "','" . $tool_name . "','" . $tool_type . "','" . $userguide_price_per_hr . "','" . $non_userguide_price_per_hr . "','" . $tool_availability ."')";
//$success = $conn->query($query);


if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=$_FILES["uploadedimage"]["name"];
    $target_path = "assets/img/tools/".$imagename;

    if(move_uploaded_file($temp_name, $target_path)) {
        //$query0="INSERT into tools (tool_img) VALUES ('".$target_path."')";
      //  $query0 = "UPDATE tools SET tool_img = '$target_path' WHERE ";
        //$success0 = $conn->query($query0);

        $query = "INSERT into tools(tool_id,tool_name,tool_type,tool_img,userguide_price_per_hr,non_userguide_price_per_hr,userguide_price_per_day,non_userguide_price_per_day,tool_text,tool_availability) VALUES('" . $tool_id . "','" . $tool_name . "','" . $tool_type . "','".$target_path."','" . $userguide_price_per_hr . "','" . $non_userguide_price_per_hr . "','" . $userguide_price_per_day . "','" . $non_userguide_price_per_day . "','" . $tool_text . "','" . $tool_availability ."')";
        $success = $conn->query($query);

        
    } 

}


// Taking tool_id from tools

$query1 = "SELECT tool_id from tools where tool_name = '$tool_name'";

$result = mysqli_query($conn, $query1);
$rs = mysqli_fetch_array($result, MYSQLI_BOTH);
$tool_id = $rs['tool_id'];
 

$query2 = "INSERT into clienttools(tool_id,client_username) values('" . $tool_id ."','" . $_SESSION['login_client'] . "')";
$success2 = $conn->query($query2);

if (!$success){ ?>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
        Tool with the same ID number already exists!
        <?php echo $conn->error; ?>
        <br><br>
        <a href="entertool.php" class="btn btn-default"> Go Back </a>
</div>
<?php	
}
else {
    header("location: entertool.php"); //Redirecting 
}

$conn->close();

?>

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