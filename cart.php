<?php    
    session_start();
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
        $(document).on('click', '.btn-remove', function(){
            var product_id = $(this).attr("id");
            var action = 'remove';
            if(confirm("Are you sure you want to remove this product?"))
            {
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:{MaSP:product_id, action:action},
                    success:function()
                    {
                        alert("Item has been removed from Cart");
                    }
                })
            }
            else
            {
                return false;
            }
	    });
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

    <div class="container-fluid">
        <form action="cart.php" method="post">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!empty($_SESSION['cart'])): 
                        $total = 0;

                        foreach ($_SESSION['cart'] as $key => $product):

                ?>
                <tr>
                    <td data-th="Product">
                        <div class="row" id="cart-product">
                            <div class="col-sm-2 hidden-xs" ><img src="<?php echo $product['HinhDaiDien']; ?>" alt="..." class="img-responsive" style="width:200px;"/></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin"><?php echo $product['TenSP'] ?></h4>
                                <p></p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price"><p id="price<?php echo $product['MaSP'] ?>"><?php echo product_price(str_replace('.','',$product['GiaDonVi'])) ?></p></td>
                    <td data-th="Quantity">
                        <input type="number" id="quantity<?php echo $product['MaSP'] ?>" onchange="update(<?php echo $product['MaSP'] ?>)" class="form-control text-center" value="<?php echo $product['SoLuong'] ?>" name="" min="1" max="">
                    </td>
                    <td data-th="Subtotal" class="text-center"><p id="subtotal<?php echo $product['MaSP'] ?>"><?php echo product_price($product['SoLuong']*str_replace('.','',$product['GiaDonVi'])) ?></p></td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fas fa-sync-alt"></i></button>
                        <button class="btn btn-danger btn-sm btn-remove" id="<?php echo $product['MaSP'] ?>"><i class="fas fa-trash"></i></button>							
                    </td>
                </tr>
            </tbody>
            <?php
                            $total += ($product['SoLuong'] * (str_replace('.','',$product['GiaDonVi'])));
                        endforeach;
            ?>
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total</strong><?php echo $total ?></td>
                </tr>
                <tr>
                    <td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total</strong> <strong id="total"><?php echo product_price($total) ?></strong></td>
                    <?php 
                        if (isset($_SESSION['cart'])):
                            if (count($_SESSION['cart']) > 0):
                    ?>
                    <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                    <?php
                            endif;
                        endif; 
                    else:
                        echo "<p>Your Cart is empty. Please add some products.</p>"; 
                    endif;
                    ?>                  
                </tr>
                <?php
                    
                ?>
            </tfoot>
        </table></form>
        
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
    <script>
        function update(MaSP){
            var preTotal = parseInt(document.getElementById("total").innerText.replace(/[^a-zA-Z0-9]/g, ''));
            var preSubtotal = parseInt(document.getElementById("subtotal".concat(MaSP)).innerText.replace(/[^a-zA-Z0-9]/g, ''));
            var quantity = document.getElementById("quantity".concat(MaSP)).value;
            var price = parseInt(document.getElementById("price".concat(MaSP)).innerText.replace(/[^a-zA-Z0-9]/g, ''));
            var curSubtotal = quantity*price;
            var curTotal = preTotal - preSubtotal + curSubtotal;
            document.getElementById("subtotal".concat(MaSP)).innerHTML = vnd_convert(curSubtotal);
            document.getElementById("total").innerHTML = vnd_convert(curTotal);
        }
        function vnd_convert(x){
            x = x.toLocaleString('vi', {style : 'currency', currency : 'VND'});
            return x;
        }
    </script>
    <?php
        function product_price($priceFloat) {
            $symbol = ' đ';
            $symbol_thousand = '.';
            $decimal_place = 0;
            $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
            return $price.$symbol;
        }
    ?>
</body>
</html>