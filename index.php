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
    <link href="css/style.css" rel="stylesheet">
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
    <script>
        $(document).ready(function(){
            $('.btn-add').click(function(){
                var product_id = $(this).attr("id");
                var product_name = $('#TenSP'+product_id+'').val();
                var product_price = $('#GiaDonVi'+product_id+'').val();
                var product_image = $('#HinhDaiDien'+product_id+'').val();
                var product_quantity = 1;
                var action = "add";
                if(product_quantity > 0)
                {
                    $.ajax({
                        url:"action.php",
                        method:"POST",
                        data:{MaSP:product_id, TenSP:product_name, GiaDonVi:product_price, SoLuong:product_quantity, action:action, HinhDaiDien:product_image},
                        success:function(data)
                        {
                            alert("Item has been Added into Cart");
                        }
                    });
                }	
	        });
        })
    
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

    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <!-- Inner -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/core-img/background_1.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Sale off Up to 40%</h1>
                    <!-- 
                    <button type="button" class="btn bt-outline-light btn-lg"><a href="#" style="color: black">Go Shopping</a></button>
                    <button type="button" class="btn bt-primary-light btn-lg"><a href="#" style="color: black">Check It Out</a></button>
                    -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/core-img/background_2.png">
            </div>
            <div class="carousel-item">
                <img src="images/core-img/background_3.jpg">
            </div>
        </div>
    </div>

    <!--Product Slider 1-->
    <?php
        $sql = "SELECT * FROM product WHERE MaLoai=1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
    ?>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12 text-center text-success">
                <h2>New Features</h2>
            </div>
            <h3><a href="keyboard.php">Keyboard</a></h3>
        </div>
    </div>
    <div class="container-fluid mt-4 ">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php
                    while ($product = $result->fetch_assoc()){
                        $imagelinks = explode(" , ",$product["CacHinhAnh"]);
                ?>
                <div class="item">
                    <div class="card">
                        <a href="product-detail.php?MaSP=<?php echo $product["MaSP"]; ?>"><img src="<?php echo $imagelinks[0]; ?>" alt="img" class="card-img-top"></a>
                        <div class="card-body">
                            
                            <span class="product-title"><?php echo $product["TenSP"]; ?></span><br>
                            <span class="text-center"><?php echo $product["GiaDonVi"]; ?></span></span><br>
                            <a href="" class="btn btn-secondary btn-sm btn-add" id="<?php echo $product['MaSP']?>">Add to cart
                                <input type="hidden" name="TenSP" id="TenSP<?php echo $product['MaSP']; ?>" value="<?php echo $product["TenSP"]; ?>">
                                <input type="hidden" name="GiaDonVi" id="GiaDonVi<?php echo $product['MaSP']; ?>" value="<?php echo $product["GiaDonVi"]; ?>">
                                <input type="hidden" name="HinhDaiDien" id="HinhDaiDien<?php echo $product['MaSP']; ?>" value="<?php echo $imagelinks[0]; ?>">
                            </a>
                        </div>  
                    </div>
                </div>
                <?php
                    }
        }
                ?>
            </div>
        </div>
    </div>
    <br><br><br>

    <!-- Suppliers-Title -->
    <div class="cotainer-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="brand-intro-title"> Learn more about our suppliers</h1>
            </div>
            <hr>
        </div>
    </div>

    <!-- Brands -->
    <div class="container-fluid padding" id="brand_intro">
        <br><br>
        <div class="row padding">
            <!-- Corsair -->
            <div class="col-lg-4">
                <h3 class="brandSlogan"> Right choice PC Part <br> With Corsair</h3>
                <p class="brandParagraph_1">
                    Launched in 1994 in the US but it took a long time for Corsair to surpass its own shadow, in the headset, keyboard, case, mouse, ... <br><br><a href="https://www.corsair.com/" target="_blank" class="btn btn-primary">Read More</a>
                </p>
                <img src="images/corsairProduct.jpg" class="img-fluid" id="img-brand-1">
                <br><br><br>
            </div>

            <!-- Razer -->
            <div class="col-lg-4">
                <h3 class="brandSlogan"> Razer!<br>For Gamer By Gamer</h3>
                <p class="brandParagraph_2">
                    Razer, a well-known gaming gears brand in the US, quickly captured the hearts of gaming enthusiasts with mouse, keyboard,... <br><br><a href="https://www.razer.com/" target="_blank" id="btn-razer" class="btn btn-primary">Read More</a>
                </p>
                <img src="images/razerProduct.jpg" class="img-fluid" id="img-brand-2">
                <br><br><br>
            </div>

            <!-- Logitech -->
            <div class="col-lg-4">
                <h3 class="brandSlogan"> Logitech <br>The Perfect Design</h3>
                <p class="brandParagraph_3">
                    With a focus on innovation and quality, Logitech providing a more intuitive way to interact with the PC. <br><br><a href="https://www.logitech.com/vi-vn" target="_blank" class="btn btn-primary">Read More</a>
                </p>
                <img src="images/logitechProduct.jpg" class="img-fluid" id="img-brand-3">
                <br><br><br>
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
            

            var parent = $(this).parents('.card');
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
    <?php 
        $conn->close();
    ?>
</body>
</html>