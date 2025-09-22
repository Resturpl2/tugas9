<?php
$host     = "localhost";
$user     = "xirpl2-3";
$pass     = "3091100981";
$db       = "db_xirpl2-3_1";
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}
?>