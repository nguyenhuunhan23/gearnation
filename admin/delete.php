<?php
require_once("config/config.php");

// sql to delete a record
$sql = "DELETE FROM product WHERE MaSP=".$_GET['MaSP'];

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
