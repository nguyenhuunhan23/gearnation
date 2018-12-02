<?php
    require_once("config/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Gear Nation | Homepage</title>
    <link rel="icon" href="images/core-img/1x/1x/logo_title.png">
    <link href="css/style_keyboard.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    
    <!-- Custrom boostrap, ... -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="js/all.js"></script>
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: white;">
        <a class="navbar-brand" href="index.php"><img src="images/core-img/1x/logo_1.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- Drop down keyboard-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Keyboard
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="keyboard_razer.php">Razer</a>
                        <a class="dropdown-item" href="keyboard_corsair.php">Corsair</a>
                        <a class="dropdown-item" href="keyboard_leopold.php">Leopold</a>
                        <!-- <div class="dropdown-divider">Leopold</div>
                        <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>
                <!-- Drop down mouse-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mouse
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="mouse_asus.php">Asus</a>
                        <a class="dropdown-item" href="mouse_logitech.php">Logitech</a>
                        <a class="dropdown-item" href="mouse_zowie.php">Zowie</a>
                        <!--<div class="dropdown-divider">Logitech</div>
                        <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>
                <!-- Drop down headphone-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Headphone
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="headphone_asus.php">Asus</a>
                        <a class="dropdown-item" href="headphone_corsair.php">Corsair</a>
                        <a class="dropdown-item" href="headphone_hyperxhtml">HyperX</a>
                        <!-- <div class="dropdown-divider">Logitech</div>
                        <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cart.php" id="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span id="itemCount" data-count="0">0</span>
                    </a>
                    
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search-box">
                <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-btn">Search</button>-->
            </form>
        </div>
    </nav>

     <!-- Breadcrumb -->
     <div id="collection" class="container-fluid">
        <div class="col-sm-12">
            <h3 class="title-box-collection"> Razer Keyboard</h3>
            <div class="row">
                <div class="main-content">
                    <div id="breadcrumb">
                        <span class="showHere">You're at: </span>
                        <a href="index.php" class="pathway">Homepage</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <a href="keyboard.php" class="pathway">Keyboard</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <a href="keyboard_razer.php" class="pathway">Razer Keyboard</a>
                    </div>
                    <div class="col-md-12">
                        <div class="browse-tag spull-right">
                            <span>Sort</span>
                            <select class="sort-by custom-dropdown_select custom-dropdown_select--white">
                                <option value="manual">Featured products</option>
                                <option value="manual">Low to High</option>
                                <option value="manual">High to Low</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <!-- Product List -->
                    <div class="col-md-12 product-list">
                        <div class="row content-product-list">
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20">
                                <img class="card-img-top" src="images/product-img/keyboard/Razer/razer blackwidow elite/1.jpg">
                                <div class="card-body">
                                    <h4 class="card-title-gear">RAZER HUNTSMAN ELITE</h4>
                                    <p class="card-text"> </p>
                                    <h5>$199.99</h5>
                                    <a href="#" class="btn btn-outline-secondary">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20">
                                <img class="card-img-top" src="images/product-img/keyboard/Razer/razer blackwidow x chroma mercury edition/1.jpg">
                                <div class="card-body">
                                    <h4 class="card-title-gear">RAZER BLACKWIDOW CHROMA VER 2</h4>
                                    <p class="card-text"> </p>
                                    <h5>$169.99</h5>
                                    <a href="#" class="btn btn-outline-secondary">Add to cart </a>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12 padding-none col-fix20">
                                <img class="card-img-top" src="images/product-img/keyboard/Razer/razer blackwidow tournament edition quat pink/1.jpg">
                                <div class="card-body">
                                    <h4 class="card-title-gear">RAZER BWT X CHROMA V2 QUARTZ</h4>
                                    <p class="card-text"> </p>
                                    <h5>$149.99</h5>
                                    <a href="#" class="btn btn-outline-secondary">Add to cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <br><br><br>
    <!-- Footer -->
    <footer>
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row" id="footer-row">
                    <div class="col-md-3 footer-about wow fadeInUp">
                        <img class="logo-footer" src="images/core-img/1x/test13_1.png" alt="logo-footer" data-at2x="assets/img/logo.png">
                        <p>
                            We are Gear Nation always looking for the best and high-end Gaming Gear for ours customers.
                        </p>
                        <p><a href="#">Our Team</a></p>
                        <div class="col-md-3">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.0197720929655!2d106.69761331541538!3d10.732958262927854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fbd7d343a57%3A0xb5ca26918dff0578!2zMTkgTmd1eeG7hW4gSOG7r3UgVGjhu40sIFTDom4gSMawbmcsIFF14bqtbiA3LCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1540057585073" width="400" height="150" frameborder="0" style="border:0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
                        <h3>Contact</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 19 Nguyen Huu Tho, District 7</p>
                        <p><i class="fas fa-phone"></i> Phone: (+84) 903 828 216</p>
                        <p><i class="fas fa-envelope"></i> Email: <a href="#">gearnation@gmail.com</a></p>
                    </div>
                    <div class="col-md-4 footer-links wow fadeInUp">
                        <div class="row">
                            <div class="col">
                                <h3>Links</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p><a class="scroll-link" href="#top-content">Home</a></p>
                                <p><a href="#">Keyboard</a></p>
                                <p><a href="#">Mouse</a></p>
                                <p><a href="#">Headphone</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        &copy; CopyRight <a href="#">GEAR NATION</a>
                    </div>
                    <div class="col-md-6 footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a> 
                        <a href="#"><i class="fab fa-twitter"></i></a> 
                        <a href="#"><i class="fab fa-instagram"></i></a> 
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--Script OWL-->
    <script src="js/owl.carousel.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
</body>
</html>