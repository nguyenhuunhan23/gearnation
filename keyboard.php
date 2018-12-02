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
    
    <!-- Custrom boostrap script  ... -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="js/all.js"></script>
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>

    <style>
        
    </style>
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
            <h3 class="title-box-collection"> Keyboard</h3>
            <div class="row row-content">
                <div class="main-content">
                    <div id="breadcrumb">
                        <span class="showHere">You're at: </span>
                        <a href="index.php" class="pathway">Homepage</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <a href="keyboard.php" class="pathway">Keyboard</a>
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
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Leopold/fc660m-PD/fc660m.jpg">
                                <div class="card-body" id="card-body-600black">
                                    <h4 class="card-title-gear">Leopold FC600M-PD Black Case</h4>
                                    <p class="card-text"> </p>
                                    <h5>$199.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Corsair/k63/k63.png">
                                <div class="card-body" id="card-body-k63">
                                    <h4 class="card-title-gear">Corsair K63 Gaming Keyboard </h4>
                                    <p class="card-text"> </p>
                                    <h5>$199.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" id="card-img-top-huntman" src="images/product-img/keyboard/Razer/Huntmans/1.jpg">
                                <div class="card-body" id="card-body-huntsman">
                                    <h4 class="card-title-gear">RAZER HUNTSMAN ELITENEW OPTICAL SWITCHES</h4>
                                    <p class="card-text"> </p>
                                    <h5>$199.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Razer/BW-TE-X-Chroma-v2-Pink/1.jpg">
                                <div class="card-body" id="card-body-quartz">
                                    <h4 class="card-title-gear">RAZER X CHROMA V2 QUARTZ</h4>
                                    <p class="card-text"> </p>
                                    <h5>$149.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Leopold/fc750r-PD/fc750r-pd.jpg">
                                <div class="card-body" id="card-body-750blue">
                                    <h4 class="card-title-gear">Leopold FC750R-PD Blue Grey</h4>
                                    <p class="card-text"> </p>
                                    <h5>$199.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Razer/BW-Ultimate-2016/1.jpg">
                                <div class="card-body" id="card-body-ultimate">
                                    <h4 class="card-title-gear">RAZER BLACKWIDOW ULITMATE 2016</h4>
                                    <p class="card-text"> </p>
                                    <h5>$109.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Corsair/k63-wireless/k63wireless.png">
                                <div class="card-body" id="card-body-k63wl">
                                    <h4 class="card-title-gear">Corsair K63 Wireless Gaming Keyboard</h4>
                                    <p class="card-text"> </p>
                                    <h5>$169.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Razer/BW-TE-X-Chroma-v2/1.jpg">
                                <div class="card-body" id="card-body-tournamentX">
                                    <h4 class="card-title-gear">RAZER BLACKWIDOW TOURNAMENT X CHROMA V2</h4>
                                    <p class="card-text"> </p>
                                    <h5>$139.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Leopold/fc900r-PD/fc900r-pd.jpg">
                                <div class="card-body" id="card-body-900white">
                                    <h4 class="card-title-gear">Leopold FC900R-PD White Grey</h4>
                                    <p class="card-text"> </p>
                                    <h5>$199.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Corsair/k65-lux-rgb/k65.png">
                                <div class="card-body" id="card-body-k65">
                                    <h4 class="card-title-gear">Corsair K65 Lux RGB Gaming Keyboard</h4>
                                    <p class="card-text"> </p>
                                    <h5>$149.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Leopold/fc980M/fc980m.png">
                                <div class="card-body" id="card-body-980black">
                                    <h4 class="card-title-gear">Leopold FC980M-PD Black Case</h4>
                                    <p class="card-text"> </p>
                                    <h5>$199.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Razer/Ornata Chroma/1.jpg">
                                <div class="card-body" id="card-body-ultimate">
                                    <h4 class="card-title-gear">RAZER BLACKWIDOW ULTIMATE 2013</h4>
                                    <p class="card-text"> </p>
                                    <h5>$89.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Corsair/k68-rgb/k68.png">
                                <div class="card-body" id="card-body-k68rgb">
                                    <h4 class="card-title-gear">Corsair K68 RGB Gaming Keyboard</h4>
                                    <p class="card-text"> </p>
                                    <h5>$149.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Leopold/fc980m-PD/fc980m-pd.jpg">
                                <div class="card-body" id="card-body-980blue">
                                    <h4 class="card-title-gear">Leopold FC980M-PD Blue Grey</h4>
                                    <p class="card-text"> </p>
                                    <h5>$199.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" id="card-img-top-chromaV2" src="images/product-img/keyboard/Razer/BW-Chroma-v2/1.png">
                                <div class="card-body" id="card-body-chromaV2 btn-add">
                                    <h4 class="card-title-gear">RAZER BLACKWIDOW CHROMA VER 2</h4>
                                    <p class="card-text"> </p>
                                    <h5>$169.99</h5>
                                    <a href="#" class="btn btn-outline-secondary">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Corsair/k70-lux/k70-lux.png">
                                <div class="card-body" id="card-body-70lux">
                                    <h4 class="card-title-gear">Corsair K70 Lux Gaming Keyboard</h4>
                                    <p class="card-text"> </p>
                                    <h5>$139.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Leopold/fc660c/fc660c.jpg">
                                <div class="card-body" id="card-body-660black">
                                    <h4 class="card-title-gear">Leopold FC660c Black Case</h4>
                                    <p class="card-text"> </p>
                                    <h5>$199.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Corsair/k95-rgb/k95-rgb.png">
                                <div class="card-body" id="card-body-k95">
                                    <h4 class="card-title-gear">Corsair K95 RGB Gaming Keyboard</h4>
                                    <p class="card-text"> </p>
                                    <h5>$109.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Corsair/strafe-rgb/strafe-rgb.png">
                                <div class="card-body" id="card-body-strafe">
                                    <h4 class="card-title-gear">Corsair Strafe RGB Gaming Keyboard</h4>
                                    <p class="card-text"> </p>
                                    <h5>$149.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 padding-none col-fix20 card-index">
                                <img class="card-img-top" src="images/product-img/keyboard/Corsair/k95-rgb-Gunmetal/k95-gunmetal.png">
                                <div class="card-body" id="card-body-k95Gun">
                                    <h4 class="card-title-gear">Corsair K95 RGB Platinum Gunmetal</h4>
                                    <p class="card-text"> </p>
                                    <h5>$89.99</h5>
                                    <a href="#" class="btn btn-outline-secondary btn-add">Add to cart </a>
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
                                <p><a class="scroll-link" href="index.php">Home</a></p>
                                <p><a href="keyboard.php">Keyboard</a></p>
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
    <!--Shopping cart-->
    <script>
        $(document).on('click','.btn-add',function(e) {
            e.preventDefault();
            if($(this).hasClass('disable')) {
                return false;
            }
            $(document).find('.btn-add').addClass('disable');
            var thisT = $(this);
            

            var parent = $(this).parents('.card-index');
            var cart = $(document).find('#cart-icon');
            var src = parent.find('img').attr('src');

            var parTop = parent.offset().top;
            var parLeft = parent.offset().left;

            $('<img />', { 
                class: 'img-product-fly',
                src: src
            }).appendTo('body').css({
                'top':parTop,
                'left': parseInt(parLeft) + parseInt(parent.width()) - 50,
            });

            setTimeout(function() {
                $(document).find('.img-product-fly').css({
                    'top':cart.offset().top,
                    'left': cart.offset().left,
                });
                setTimeout(function() {
                    $(document).find('.img-product-fly').remove();
                    var countItem = parseInt(cart.find('#itemCount').data('count')) + 1;
                    cart.find('#itemCount').text(countItem ).data('count', countItem);
                    $(document).find('.btn-add').removeClass('disable');
                },1000);
            },500)
        });
    </script>
</body>
</html>
