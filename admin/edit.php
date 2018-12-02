<?php
require_once("config/config.php");
if (!isset($_GET["MaSP"])) $MaSP = 0; else $MaSP = $_GET["MaSP"];

$sql = "SELECT * FROM product WHERE MaSP= ".$MaSP;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <body>
        <div class="table-responsive">
            <form action="update.php">
                <div class="add-">
                    <input type="hidden" name="maloaisp" value=3>
                    <input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo $row["TenSP"]; ?>">
                    <br>
                    <input type="text" name="brand" placeholder="Brand" class="form-control" value="<?php $sql2 = "SELECT TenNPP FROM vendors WHERE MaNPP = ".$row["MaNPP"];
                          $result2 = $conn->query($sql2);
                          $row2 = $result2->fetch_assoc();
                          echo $row2["TenNPP"];
                        ?>">
                    <br>
                    <input type="text" name="amount" placeholder="Amount" class="form-control" value="<?php echo $row["SoLuong"]; ?>">
                    <br>
                    <input type="text" name="price" placeholder="Price" class="form-control" value="<?php echo $row["GiaDonVi"]; ?>">
                    <br>
                    <input type="text" name="date_added" placeholder="Date Added" class="form-control" value="<?php echo $row["NgayNhap"]; ?>">
                    <br>
                    <input type="text" name="image_links" placeholder="Image Link" class="form-control" value="<?php echo $row["CacHinhAnh"]; ?>">
                    <input type="hidden" name="MaSP" value="<?php echo $row["MaSP"]; ?>">
                </div>
                <div class="btn-group" style="float: right;">
                <input type="submit" class="btn btn-danger" id="btn-save" value="Save">
            </div>
            </form>
            
    </body>

    </html>