<<?php
include "koneksi.php";
$no = $_GET['no'];
mysqli_query($conn, "DELETE FROM akun_ff WHERE no=$no");
echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
?>
