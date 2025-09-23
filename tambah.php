<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $spek = $_POST['spek'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kode_otp = $_POST['kode_otp'];
    $status = $_POST['status'];

    $query = "INSERT INTO akun_ff (spek, harga, stok, kode_otp, status) 
              VALUES ('$spek', '$harga', '$stok', '$kode_otp', '$status')";
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
        <p>Harga: <input type="number" name="harga" required></p>
        <p>Stok: <input type="number" name="stok" required></p>
        <p>Kode OTP: <input type="text" name="kode_otp" required></p>
        <p>Status: 
            <select name="status" required>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </p>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
k
