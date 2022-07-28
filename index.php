<?php
    include "logCheck.php";
    $a = $_SESSION["status"];
?>

<!doctype html>
<html lang="en">
<head>
    <title>DIU Hostel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="MainResources/fonts/icomoon/style.css">

    <link rel="stylesheet" href="MainResources/css/bootstrap.min.css">
    <link rel="stylesheet" href="MainResources/css/jquery-ui.css">
    <link rel="stylesheet" href="MainResources/css/owl.carousel.min.css">
    <link rel="stylesheet" href="MainResources/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="MainResources/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="MainResources/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="MainResources/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="MainResources/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="MainResources/css/aos.css">

    <link rel="stylesheet" href="MainResources/css/style.css">
    <style>
        .button{
            padding-left: 22px;
            font-size: 20px;
            border: none;
            background: none;
        }
        .button:hover{
            color: #0d95e8;
        }
    </style>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h3 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">DIU<span class="text-primary">Hostel</span> </a></h3>
                </div>

                <!--      NavBar-->
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">

                            <li><a href="#home-section" class="nav-link">Home</a></li>

                            <li class="has-children">
                                <a href="#about-section" class="nav-link">About Us</a>
                                <ul class="dropdown">
                                    <li><a class="nav-link" href="#team-section">Management Team</a></li>
                                    <li><a class="nav-link" href="#portfolio-section">Facility</a></li>
                                    <li><a class="nav-link" href="#services-section">Branch</a></li>
                                    <li><a class="nav-link" href="#see-us">See Us</a></li>
                                    <li><a class="nav-link" href="#contact-section">Contact</a></li>
                                </ul>
                            </li>

                            <li>
                                <form action="profile.php">
                                    <button type="submit" class="button">Profile</button>
                                </form>
                            </li>
                            <li>
                                <form action="applyforSeat.php">
                                    <button type="submit" class="button">Apply For Seat</button>
                                </form>
                            </li>
                            <li>
                                <form action="orderMeal.php">
                                    <button type="submit" class="button">Order Meal</button>
                                </form>
                            </li>
                            <li>
                                <form action="notification.php">
                                    <button type="submit" class="button">Notification</button>
                                </form>
                            </li>
                            <li>
                                <form action="financialStatement.php">
                                    <button type="submit" class="button">Financial Statement</button>
                                </form>
                            </li>
                            <li>
                                <form action="logout.php">
                                    <button type="submit" class="button">Log Out</button>
                                </form>
                            </li>
                            <li>
                                <form action="check.php">

                                    <button type="submit" class="button">
                                        <?php if($a == 0):?>
                                            check out
                                        <?php elseif($a == 1): ?>
                                            check in
                                        <?php endif; ?>
                                        </button>
                                </form>
                            </li>

                        </ul>

                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>


    <!-- welcome-->
    <div class="site-blocks-cover overlay" style="background-image: url(MainResources/images/hero_2.jpg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-md-8 mt-lg-5 text-center">
                    <h1 class="text-uppercase" data-aos="fade-up">Welcome</h1>
                    <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Feel Like Your Second Home. Your Choice, Our Priority....</p>
                    <div data-aos="fade-up" data-aos-delay="100">
                        <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Get In Touch</a>
                    </div>
                </div>

            </div>
        </div>

        <a href="#about-section" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
        </a>
    </div>

    <!-- about us-->
    <div class="site-section cta-big-image" id="about-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">About Us</h2>
                </div>
            </div>
            <div class="row">
                <!--      about us section-->
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                    <!--        show details-->
                    <div class="mb-4">
                        <h3 class="h3 mb-4 text-black">Who we are...</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat.</p>
                    </div>

                    <!--        show us in list-->
                    <div class="mb-4">
                        <ul class="list-unstyled ul-check success">
                            <li>Officia quaerat eaque neque</li>
                            <li>Possimus aut consequuntur incidunt</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipisicing elit</li>
                        </ul>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- team-member-->
    <section class="site-section border-bottom" id="team-section">
        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Our Team</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">Some dedicated people works for ourselves to ensure the Quality...</p>
                </div>
            </div>

            <!--    team members-->
            <div class="row">

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
                    <div class="team-member">
                        <figure>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/toushif.ahmed.718"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                            <img src="Resources/toushif.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="p-3">
                            <h3>Toushif Ahmed</h3>
                            <span class="position">
                            ID: 171-15-**** <br>
                            Section: H <br>
                            Department of CSE <br>
                            Daffodil International University</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <figure>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/profile.php?id=100007366397494"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                            <img src="Resources/tamim.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="p-3">
                            <h3>Sanvir Ahmed Saidur</h3>
                            <span class="position">
                            ID: 171-15-**** <br>
                            Section: H <br>
                            Department of CSE <br>
                            Daffodil International University</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- facilities-->
    <section class="site-section" id="portfolio-section">

        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Facilities...</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">Some Special facilities we provide for our valuable customer to ensure the Quality...</p>
                </div>
            </div>

            <div class="row justify-content-center mb-5" data-aos="fade-up">
                <div id="filters" class="filters text-center button-group col-md-7">
                    <ul style="display: inline-flex; padding-left: 10%; list-style: none; width: 100%; height: auto; position: relative">
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/1-1.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Meal</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/18.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Washing   </p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/2.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Safety</p></li>
                    </ul>
                    <ul style="display: inline-flex;  padding-left: 10%; list-style: none; width: 100%; height: auto; position: relative">
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/3.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Security</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/4.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Lobby</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/5.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Gym</p></li>

                    </ul>
                    <ul style="display: inline-flex;  padding-left: 10%; list-style: none; width: 100%; height: auto; position: relative">
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/6.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Functional Bed</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/7.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Shoe Polish</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/8.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Wifi</p></li>

                    </ul>
                    <ul style="display: inline-flex;  padding-left: 10%; list-style: none; width: 100%; height: auto; position: relative">
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/9.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Playing Zone</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/10.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Hair Dryer</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/11.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Generator</p></li>

                    </ul>
                    <ul style="display: inline-flex;  padding-left: 10%; list-style: none; width: 100%; height: auto; position: relative">
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/12.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">House Keeping</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/13.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Smart TV</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/14.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Reading Room</p></li>

                    </ul>
                    <ul style="display: inline-flex;  padding-left: 10%; list-style: none; width: 100%; height: auto; position: relative">
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/15.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Finger Print Entrance</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/16.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Air Condition</p></li>
                        <li class="btn btn-primary" style="padding: 5%; margin: 2%; height: auto; width: 30%"><img src="Resources/facilities/17.png" style="width: 100%; height: auto"><br><p style="font-size: 10px ;color: green">Locker</p></li>
                    </ul>
                </div>
            </div>

        </div>

    </section>

    <!-- branch-->
    <section class="site-section border-bottom bg-light" id="services-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">Our Braches</h2>
                </div>
            </div>

            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">We provide our services at...</p>
                </div>
            </div>

            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="branch-content" style=" display: inline-flex; width: 100%; height: auto; position: relative">

                        <div style="float: left; margin: 2%; padding: 2%;border-top-left-radius: 15px; width: 30%; background-color: #cbffd8">
                            <h5 style="border-top-left-radius: 15px; text-align: right; padding-right: 2%; background: #7e82de; color: white">Uttara Branch</h5>
                            <p style="font-size: 8px; padding-top: 5%; text-align: left">
                                House No: 00, Road No: 00, Sector: 0, Uttara, Dhaka <br>
                                Contact No: 01440000000 <br>
                            </p>
                        </div>

                        <div style="float: left; margin: 2%; padding: 2%; width: 30%; background-color: #f4d9ff">
                            <h5 style="text-align: center; padding-right: 2%; background: #7e82de; color: white">Uttara Branch</h5>
                            <p style="font-size: 8px; padding-top: 5%; text-align: left">
                                House No: 00, Road No: 00, Sector: 0, Uttara, Dhaka <br>
                                Contact No: 01440000000 <br>
                            </p>
                        </div>

                        <div style="float: right; margin: 2%; padding: 2%; border-bottom-right-radius: 15px; width: 30%; background-color: #dae6f9">
                            <h5 style="border-bottom-right-radius: 15px; text-align: left; padding-left: 2%; background: #7e82de; color: white">Uttara Branch</h5>
                            <p  style="font-size: 8px; width: 100%; padding-top: 5%; text-align: right">
                                House No: 00, Road No: 00, Sector: 0, Uttara, Dhaka <br>
                                Contact No: 01440000000 <br>

                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- see us-->
    <section class="site-section" id="see-us">

        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">See Us...</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">curious to see us? You can find us here......</p>
                </div>
            </div>

            <div class="row justify-content-center mb-5" data-aos="fade-up">
                <div id="filters-us" class="filters text-center button-group col-md-7">
                    <div class="about-content" style="border-radius: 15px; background: #bdedea">
                        <img class="mySlides"  src="Resources/snapshot/d1.png" alt="" style="width: 100%; height: auto; display: none">
                        <img class="mySlides"  src="Resources/snapshot/d2.png" alt="" style="width: 100%; height: auto; display: none">
                        <img class="mySlides"  src="Resources/snapshot/d3.jpg" alt="" style="width: 100%; height: auto; display: none">
                        <img class="mySlides"  src="Resources/snapshot/d4.jpg" alt="" style="width: 100%; height: auto; display: none">
                    </div>
                    <script>
                        var myIndex = 0;
                        carousel();

                        function carousel() {
                            var i;
                            var x = document.getElementsByClassName("mySlides");
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            myIndex++;
                            if (myIndex > x.length) {myIndex = 1}
                            x[myIndex-1].style.display = "block";
                            setTimeout(carousel, 2000); // Change image every 2 seconds
                        }
                    </script>
                </div>
            </div>

        </div>

    </section>

    <!-- contact-section-->
    <section class="site-section" id="contact-section">

        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Contact with us</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">Feel free to contact us....</p>
                </div>
            </div>

            <div class="row justify-content-center mb-5" data-aos="fade-up">
                <div id="filters-contact" class="filters text-center button-group col-md-7">
                    <p style="font-size: 8px; font-weight: bold; color: orange">Head Office:</p>
                    <p style="font-size: 12px; color: #9dc7cb">
                        Daffodil Tower-5 <br>
                        Dhanmondi 32, Dhaka <br>
                        Mobile: 01*********, 01********* <br>
                        Mail: toushif15-****@diu.edu.bd, tamim 15-****@diu.edu.bd <br>
                        fb: facebook/****.com
                    </p>
                </div>
            </div>

        </div>

    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Project for Final<i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Toushif & Tamim</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div> <!-- .site-wrap -->

<script src="MainResources/js/jquery-3.3.1.min.js"></script>
<script src="MainResources/js/jquery-ui.js"></script>
<script src="MainResources/js/popper.min.js"></script>
<script src="MainResources/js/bootstrap.min.js"></script>
<script src="MainResources/js/owl.carousel.min.js"></script>
<script src="MainResources/js/jquery.countdown.min.js"></script>
<script src="MainResources/js/jquery.easing.1.3.js"></script>
<script src="MainResources/js/aos.js"></script>
<script src="MainResources/js/jquery.fancybox.min.js"></script>
<script src="MainResources/js/jquery.sticky.js"></script>
<script src="MainResources/js/isotope.pkgd.min.js"></script>


<script src="MainResources/js/main.js"></script>

</body>
</html>