<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "website_penjualan";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Koneksi gagal terhubung.')</script>");
}

?>
