<?php
require_once("config/config.php");

$TenNPP = $_POST['brand'];
$sql = "SELECT MaNPP FROM vendors WHERE TenNPP='".$TenNPP."'";
$TenNPP = "$TenNPP";
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();

$MaNPP = $row["MaNPP"];
$TenSP = $_POST['name'];
$TenSP = "$TenSP";
$MaLoaiSP = $_POST['maloaisp'];
$GiaDonVi = $_POST['price'];
$GiaDonVi = "$GiaDonVi";
$NgayNhap = $_POST['date_added'];
$NgayNhap = "$NgayNhap";
$CacHinhAnh = $_POST['image_links'];
$CacHinhAnh = "$CacHinhAnh";
$SoLuong = $_POST['amount'];
$MaSP = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $sql = "INSERT INTO product (MaSP,TenSP,MaNPP,MaLoai,SoLuong,GiaDonVi,NgayNhap,CacHinhAnh)
                VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isiiisss",$MaSP,$TenSP,$MaNPP,$MaLoaiSP,$SoLuong,$GiaDonVi,$NgayNhap,$CacHinhAnh);
        $stmt->execute();
        header("Location: index.php");
        $stmt->close();
        $conn->close();
    ?>
</body>
</html>