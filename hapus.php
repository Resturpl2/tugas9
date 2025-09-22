<?php
include "koneksi.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID tidak ditemukan di URL!");
}
$id = (int) $_GET['id'];

$query = "DELETE FROM akun_ff WHERE id=$id";
if (mysqli_query($conn, $query)) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal hapus: " . mysqli_error($conn);
}
?>
