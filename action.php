<?php
	session_start();
    $product_ids = array();

    if(isset($_POST["action"])) {
        if($_POST["action"] == "add") {
            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
                $product_ids = array_column($_SESSION['cart'], 'MaSP');
                    if (!in_array($_POST['MaSP'], $product_ids)) {
                        $_SESSION['cart'][$count] = array
                        (
                            'MaSP' => $_POST['MaSP'],
                            'TenSP' => $_POST['TenSP'],
                            'GiaDonVi' => $_POST['GiaDonVi'],
                            'SoLuong' => $_POST['SoLuong'],
                            'HinhDaiDien' => $_POST['HinhDaiDien']
                        );
                    } else {
                        for ($i = 0; $i < count($product_ids); $i++){
                            if ($product_ids[$i] == $_POST['MaSP']) {
                                $_SESSION['cart'][$i]['SoLuong'] += $_POST['SoLuong'];
                            }
                        }
                    }
                } else {
                    $_SESSION['cart'][0] = array
                    (
                        'MaSP' => $_POST['MaSP'],
                        'TenSP' => $_POST['TenSP'],
                        'GiaDonVi' => $_POST['GiaDonVi'],
                        'SoLuong' => $_POST['SoLuong'],
                        'HinhDaiDien' => $_POST['HinhDaiDien'],
                    );
                }
        }          
        
        if($_POST["action"] == 'remove') {
            foreach($_SESSION["cart"] as $keys => $values) {
                if($values["MaSP"] == $_POST["MaSP"]) {
                    unset($_SESSION["cart"][$keys]);
                }
            }
        }

        if($_POST["action"] == 'quantity') {
            foreach($_SESSION["cart"] as $keys => $values) {
                if($values["MaSP"] == $_POST["MaSP"]) {
                    $_SESSION["cart"][$keys]['SoLuong'] = $_POST["SoLuong"];
                    
                }
            }
        }
    }

?>