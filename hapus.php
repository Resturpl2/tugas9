<?php
include "koneksi.php";

if (isset($_GET['no'])) {
    $no = $_GET['no'];
    $q = mysqli_query($conn, "DELETE FROM akun_ff WHERE no=$no");

    if ($q) {
        echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
    } else {
        echo "Gagal hapus: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
