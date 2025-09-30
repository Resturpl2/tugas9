<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $spek = $_POST['spek'];
    $pasien = $_POST['pasien'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO akun_ff (spek, pasien, harga, stok) 
              VALUES ('$spek', '$pasien', '$harga', '$stok')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal tambah: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body style="background:black;color:white;text-align:center;">
    <h1>Tambah Akun Free Fire</h1>
    <form method="POST">
        <p>Spek: <input type="text" name="spek" required></p>
        <p>Pasien: <input type="text" name="pasien" required></p>
        <p>Harga: <input type="number" name="harga" required></p>
        <p>Stok: <input type="number" name="stok" required></p>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
