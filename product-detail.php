<?php

require_once("config/config.php");
if (!isset($_GET["MaSP"])) die("Loi !!!");

$sql = "SELECT * FROM product WHERE MaSP=".$_GET['MaSP'];;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Gear Nation | Homepage</title>
    <link rel="icon" href="images/core-img/1x/1x/logo_title.png">
    <link href="css/style-product-detail.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/fotorama.css">
    
    <!-- Custrom boostrap script  ... -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="js/all.js"></script>
    <script src="js/fotorama.js"></script>
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>

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

    <?php
        while ($product = $result->fetch_assoc()){
            $imagelinks = explode(" , ",$product["CacHinhAnh"]);
            
    ?>
    <div class="container" id="content">
        
        <div id="left">
            <div class="fotorama"data-nav="thumbs" data-autoplay="3000">
            <?php
                foreach ($imagelinks as $link){
            ?>
                <a href="<?php echo $link; ?>"><img src="<?php echo $link; ?>" id="test"></a>
            <?php
                }
            ?>
            </div>
        </div>
            
        <div id="right">
                <h3 id="product-title"><?php echo $product["TenSP"]; ?></h3>
                <h6 id="nsx">Corsair</h6>
                <h6 id="Waranty"> Waranty: 24 months</h6>
                <h6>Price: </span><?php echo $product["GiaDonVi"]; ?></h6>
                <a href="" class="btn btn-secondary btn-sm btn-add" id="<?php echo $product['MaSP']?>">Add to cart
                    <input type="hidden" name="TenSP" id="TenSP<?php echo $product['MaSP']; ?>" value="<?php echo $product["TenSP"]; ?>">
                    <input type="hidden" name="GiaDonVi" id="GiaDonVi<?php echo $product['MaSP']; ?>" value="<?php echo $product["GiaDonVi"]; ?>">
                    <input type="hidden" name="HinhDaiDien" id="HinhDaiDien<?php echo $product['MaSP']; ?>" value="<?php echo $imagelinks[0]; ?>">
                </a>
        </div>
    </div>
    <?php
        }
    ?>
    <!--
    <div class="container">
        <div class="product">
            <div class="col-sm-6 col-xs-12 product_thumbnail">
                <div class="fotorama"data-nav="thumbs" data-autoplay="3000">
                    <a href="test.png"><img src="test.png" id="test"></a>
                    <a href="images/product-slider/keyboard/corsair_k70mk2se.png"><img src="images/product-slider/keyboard/corsair_k70mk2se.png"></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12 product_thumbnail">
            <div class="container-right" >
                <h1 id="product-title">Title here</h1>
            </div>
        </div>
    </div>
-->


    <br><br><br>
    <!-- Footer -->
    <footer>
        <div class="footer-top">
            <div class="container-fluid">
                <div class="product" id="footer-product">
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
                        <div class="product">
                            <div class="col">
                                <h3>Links</h3>
                            </div>
                        </div>
                        <div class="product">
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
                <div class="product">
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
<?php
}
$conn->close();
?>
</html>