<?php
$host = "localhost";
$user = "xirpl2-3";
$pass = "3091100981";
$db   = "db_xirpl2-3_1"; // database dari guru

$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Pilih database (karena ada tanda minus -)
if (!mysqli_query($conn, "USE `$db`")) {
    die("Tidak bisa memilih database: " . mysqli_error($conn));
}
?>
