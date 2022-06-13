<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm  Equipment Rentals</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
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
		  <li> <a href="enteragent.php">Add Agent</a></li>
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
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Control Panel <span class="caret"></span> </a>
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
    <div class="jumbotron">
        <h1>Farm Equipment Rentals</h1>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
            <hr>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="assets/img/abt.jpg" class="img-fluid" alt="aboutus img">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">We are Farm Equipment Rentals</h2>

                    <p class="py-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti expedita minus Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi placeat architecto quaerat quia, labore hic nobis facilis aliquam sequi, earum provident. Sequi, iusto voluptatem voluptatibus Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore ex minima ipsum fuga deserunt doloremque, saepe quo repellendus possimus voluptatum.nulla deserunt reiciendis nesciunt id.inventore accusamus eius ullam neque omnis ad sequi fuga aut totam impedit ab numquam distinctio ut amet harum illum, Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sit, necessitatibus laboriosam repellendus aliquid repudiandae optio quisquam in quis sed nostrum accusamus harum doloribus ea iste, quo quam. Esse cum impedit dolorem tempore adipisci ex officia voluptatum a quos accusantium.sapiente fugit? Similique et ullam adipisci optio non dolore ex.</p>
                    <a href="about.php" class="btn btn-success"> know more</a>
                </div>

            </div>

        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Testimonials</h2>
        </div>
        <div class="media border p-3 m-3">
            <img src="assets/img/farm2.jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:20%;">
            <div class="media-body">
                <h3>Rama Rao</h3>
                <h6><i>Posted on March 26, 2020</i></h6>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est beatae dolorem molestias, accusantium debitis praesentium adipisci? Consequuntur quasi porro iusto nam quae obcaecati impedit error, mollitia eligendi corrupti, nemo commodi dignissimos nisi. Eveniet iste corporis rem quam voluptatum laboriosam nisi quia cupiditate minus, consequuntur, ipsa fugit repudiandae mollitia quae quo sunt illum omnis consequatur sint inventore modi tempore molestias at?<br>
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore itaque, quo cupiditate repellendus magnam autem ipsum, eligendi nam delectus facere consequuntur et laboriosam laudantium, voluptatum amet. Ex doloribus facilis laboriosam numquam! Hic sunt neque molestiae odio quibusdam reiciendis ea illo earum, ut tenetur voluptatem inventore voluptate! Quibusdam exercitationem at facere, minus quo eos sequi fugiat saepe nisi tempore provident omnis?
                </p>
            </div>
        </div>
        <div class="media border p-3 m-3">
            <img src="assets/img/farm1.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:20%;">
            <div class="media-body">
                <h3>Naveen Kumar</h3>
                <h6><i>Posted on May 10, 2020</i></h6>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est beatae dolorem molestias, accusantium debitis praesentium adipisci? Consequuntur quasi porro iusto nam quae obcaecati impedit error, mollitia eligendi corrupti, nemo commodi dignissimos nisi. Eveniet iste corporis rem quam voluptatum laboriosam nisi quia cupiditate minus, consequuntur, ipsa fugit repudiandae mollitia quae quo sunt illum omnis consequatur sint inventore modi tempore molestias at?<br></p>
                <p>

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore itaque, quo cupiditate repellendus magnam autem ipsum, eligendi nam delectus facere consequuntur et laboriosam laudantium, voluptatum amet. Ex doloribus facilis laboriosam numquam! Hic sunt neque molestiae odio quibusdam reiciendis ea illo earum, ut tenetur voluptatem inventore voluptate! Quibusdam exercitationem at facere, minus quo eos sequi fugiat saepe nisi tempore provident omnis?<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat error voluptatibus hic commodi soluta aspernatur? Consequatur deserunt vel quidem, deleniti quo saepe corporis ratione sit reprehenderit. Magni expedita dolore doloribus.
                </p>
            </div>
        </div>
        <div class="media border p-3 m-3">
            <img src="assets/img/farm3.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:20%;">
            <div class="media-body">
                <h3>Venkateswarulu</h3>
                <h6><i>Posted on November 2, 2020</i></h6>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est beatae dolorem molestias, accusantium debitis praesentium adipisci? Consequuntur quasi porro iusto nam quae obcaecati impedit error, mollitia eligendi corrupti, nemo commodi dignissimos nisi. Eveniet iste corporis rem quam voluptatum laboriosam nisi quia cupiditate minus, consequuntur, ipsa fugit repudiandae mollitia quae quo sunt illum omnis consequatur sint inventore modi tempore molestias at?<br>
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore itaque, quo cupiditate repellendus magnam autem ipsum, eligendi nam delectus facere consequuntur et laboriosam laudantium, voluptatum amet. Ex doloribus facilis laboriosam numquam! Hic sunt neque Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eum ex possimus molestias iste alias fugiat nemo. Pariatur reprehenderit odio blanditiis, repellat saepe et iure voluptatibus repudiandae, dolor nobis quas aliquam magni aspernatur impedit reiciendis incidunt optio cupiditate possimus fugit?molestiae odio quibusdam reiciendis ea illo earum, ut tenetur voluptatem inventore voluptate! Quibusdam exercitationem at facere, minus quo eos sequi fugiat saepe nisi tempore provident omnis?
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime expedita, obcaecati quae illum repellat cupiditate, excepturi, vitae reiciendis nemo officiis nisi! Alias dolore, saepe aperiam eos error ipsa rem esse unde a rerum? Itaque repellendus sit aut voluptatibus earum cumque? Eligendi iusto, est corrupti deleniti natus magni sequi beatae illum architecto inventore ut libero unde vel. Provident ad unde ducimus architecto culpa modi veritatis accusantium at neque! Est quae tempora praesentium, excepturi consequuntur odit pariatur tempore, vel hic minus error aliquam optio eius deleniti facere eligendi ipsum doloribus provident, perspiciatis quisquam corporis nemo libero itaque! Obcaecati, dicta fugit.</p>
            </div>
        </div>
    </section>
    <footer>
        <p class="p-3 bg-secondary text-white text-center m-0"> @Developed by Batch 12</p>
    </footer>
</body>

</html>