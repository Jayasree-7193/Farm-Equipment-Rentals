<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Equipment Rentals</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

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
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Contol Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="prereturntool.php">Return Now</a></li>
              <li> <a href="mybookings.php"> My Bookings</a></li>
              <li><a href="mycart.php"> My Cart</a></li>
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
    <div class="bgimg-1">
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading" style="color: black">Farm Equipment Rentals</h1>
                            <p class="intro-text">
                                Online Farm Rental Service
                            </p>
                            <a href="#sec2" class="btn btn-circle page-scroll blink">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2><hr>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="assets/img/abt.jpg" class="img-fluid" alt="aboutus img">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">We are Farm Equipment Tenants</h2>

                    <p class="py-3">  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est beatae dolorem molestias, accusantium debitis praesentium adipisci? Consequuntur quasi porro iusto nam quae obcaecati impedit error, mollitia eligendi corrupti, nemo commodi dignissimos nisi. Eveniet iste corporis rem quam voluptatum laboriosam nisi quia cupiditate minus, consequuntur, ipsa fugit repudiandae mollitia quae quo sunt illum omnis consequatur sint inventore modi tempore molestias at? </p>
                    <a href="about.php" class="btn btn-success"> know more</a>
                </div>

            </div>

        </div>
    </section>
    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Mechanical Tools</h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = "SELECT * FROM tools WHERE tool_availability='yes' and tool_type='Mechanical'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $tool_id = $row1["tool_id"];
                    $tool_name = $row1["tool_name"];
                    $userguide_price_per_hr = $row1["userguide_price_per_hr"];
                    $userguide_price_per_day = $row1["userguide_price_per_day"];
                    $non_userguide_price_per_hr = $row1["non_userguide_price_per_hr"];
                    $non_userguide_price_per_day = $row1["non_userguide_price_per_day"];
                    $tool_img = $row1["tool_img"];
                     $tool_text = $row1["tool_text"];
                    ?>
            <a href="booking.php?id=<?php echo($tool_id) ?>">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $tool_img; ?>" alt="Card image cap">
            <h5><b> <?php echo $tool_name; ?> </b></h5>
             <h6> <?php echo ( $tool_text ); ?></h6>
            

            
            </div> 
            </a>
            <?php }}
            else {
                ?>
<h1> No  Mechanical Tools available :( </h1>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>
 <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Machinery Tools</h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = "SELECT * FROM tools WHERE tool_availability='yes' and tool_type='Machinery'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $tool_id = $row1["tool_id"];
                    $tool_name = $row1["tool_name"];
                    $userguide_price_per_hr = $row1["userguide_price_per_hr"];
                    $userguide_price_per_day = $row1["userguide_price_per_day"];
                    $non_userguide_price_per_hr = $row1["non_userguide_price_per_hr"];
                    $non_userguide_price_per_day = $row1["non_userguide_price_per_day"];
                    $tool_img = $row1["tool_img"];
                     $tool_text = $row1["tool_text"];
                    ?>
            <a href="booking.php?id=<?php echo($tool_id) ?>">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $tool_img; ?>" alt="Card image cap">
            <h5><b> <?php echo $tool_name; ?> </b></h5>
             <h6> <?php echo ( $tool_text ); ?></h6>
            

            
            </div> 
            </a>
            <?php }}
            else {
                ?>
<h1> No Machinery Tools available :( </h1>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>

 <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Irrigation Tools</h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = "SELECT * FROM tools WHERE tool_availability='yes' and tool_type='Irrigation'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $tool_id = $row1["tool_id"];
                    $tool_name = $row1["tool_name"];
                    $userguide_price_per_hr = $row1["userguide_price_per_hr"];
                    $userguide_price_per_day = $row1["userguide_price_per_day"];
                    $non_userguide_price_per_hr = $row1["non_userguide_price_per_hr"];
                    $non_userguide_price_per_day = $row1["non_userguide_price_per_day"];
                    $tool_img = $row1["tool_img"];
                     $tool_text = $row1["tool_text"];
                    ?>
            <a href="booking.php?id=<?php echo($tool_id) ?>">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $tool_img; ?>" alt="Card image cap">
            <h5><b> <?php echo $tool_name; ?> </b></h5>
             <h6> <?php echo ( $tool_text ); ?></h6>
            

            
            </div> 
            </a>
            <?php }}
            else {
                ?>
<h1> No Irrigation Tools available :( </h1>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>
<div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Cutting Tools</h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = "SELECT * FROM tools WHERE tool_availability='yes' and tool_type='Cutting'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $tool_id = $row1["tool_id"];
                    $tool_name = $row1["tool_name"];
                    $userguide_price_per_hr = $row1["userguide_price_per_hr"];
                    $userguide_price_per_day = $row1["userguide_price_per_day"];
                    $non_userguide_price_per_hr = $row1["non_userguide_price_per_hr"];
                    $non_userguide_price_per_day = $row1["non_userguide_price_per_day"];
                    $tool_img = $row1["tool_img"];
                     $tool_text = $row1["tool_text"];
                    ?>
            <a href="booking.php?id=<?php echo($tool_id) ?>">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $tool_img; ?>" alt="Card image cap">
            <h5><b> <?php echo $tool_name; ?> </b></h5>
             <h6> <?php echo ( $tool_text ); ?></h6>
            

            
            </div> 
            </a>
            <?php }}
            else {
                ?>
<h1> No Cutting Tools available :( </h1>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>

<div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Drilling Tools</h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = "SELECT * FROM tools WHERE tool_availability='yes' and tool_type='Drilling'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $tool_id = $row1["tool_id"];
                    $tool_name = $row1["tool_name"];
                    $userguide_price_per_hr = $row1["userguide_price_per_hr"];
                    $userguide_price_per_day = $row1["userguide_price_per_day"];
                    $non_userguide_price_per_hr = $row1["non_userguide_price_per_hr"];
                    $non_userguide_price_per_day = $row1["non_userguide_price_per_day"];
                    $tool_img = $row1["tool_img"];
                     $tool_text = $row1["tool_text"];
                    ?>
            <a href="booking.php?id=<?php echo($tool_id) ?>">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $tool_img; ?>" alt="Card image cap">
            <h5><b> <?php echo $tool_name; ?> </b></h5>
             <h6> <?php echo ( $tool_text ); ?></h6>
            

            
            </div> 
            </a>
            <?php }}
            else {
                ?>
<h1> No Drilling Tools available :( </h1>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>


    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
    </div>

    
    <!-- Container (Contact Section) -->
    <!-- -->
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
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(25.614744, 85.128489);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <script>
        function sendGaEvent(category, action, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuoe93lQkgRaC7FB8fMOr_g1dmMRwKng&callback=myMap" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>