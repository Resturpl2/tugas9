<?php
include "koneksi.php";

if (!isset($_GET['no']) || empty($_GET['no'])) {
    die("ID tidak ditemukan di URL!");
}
$no = (int) $_GET['no'];

$query = "DELETE FROM akun_ff WHERE no=$no";
if (mysqli_query($conn, $query)) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal hapus: " . mysqli_error($conn);
}
?>
