<?php
require_once("config/config.php");

$TenNPP = $_GET['brand'];
$sql = "SELECT MaNPP FROM vendors WHERE TenNPP='".$TenNPP."'";
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();

$MaNPP = $row["MaNPP"];
$TenSP = $_GET['name'];
$TenSP = "$TenSP";
$GiaDonVi = $_GET['price'];
$GiaDonVi = "$GiaDonVi";
$NgayNhap = $_GET['date_added'];
$NgayNhap = "$NgayNhap";
$CacHinhAnh = $_GET['image_links'];
$CacHinhAnh = "$CacHinhAnh";
$SoLuong = $_GET['amount'];
$MaSP = $_GET['MaSP'];

if ($MaSP == 0) {
    $sql = "INSERT INTO product (MaSP,TenSP,MaNPP,MaLoai,SoLuong,GiaDonVi,NgayNhap,CacHinhAnh)
                VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isiiisss",$MaSP,$TenSP,$MaNPP,$MaLoaiSP,$SoLuong,$GiaDonVi,$NgayNhap,$CacHinhAnh);
        $stmt->execute();
}

// sql to delete a record
else {
    $sql = "UPDATE product SET TenSP = ?,MaNPP = ?,SoLuong = ?,GiaDonVi = ?,NgayNhap = ?,CacHinhAnh = ? WHERE MaSP = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siisssi",$TenSP,$MaNPP,$SoLuong,$GiaDonVi,$NgayNhap,$CacHinhAnh,$MaSP);
        $stmt->execute();
        header("Location: index.php");
}

$conn->close();
$stmt->close();
?>
