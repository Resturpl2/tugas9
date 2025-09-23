<?php
include "koneksi.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID tidak ditemukan di URL!");
}
$id = (int) $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM akun_ff WHERE id=$id") or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($result);

if (!$data) {
    die("Data tidak ada!");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $spek = $_POST['spek'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kode_otp = $_POST['kode_otp'];
    $status = $_POST['status'];

    $query = "UPDATE akun_ff 
              SET spek='$spek', nickname='$nickname', tier='$tier', harga='$harga', stok='$stok' 
              WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal update: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data</title>
</head>
<body style="background:black;color:white;text-align:center;">
    <h1>Ubah Akun Free Fire</h1>
    <form method="POST">
        <p>Spek: <input type="text" name="spek" value="<?= $data['spek']; ?>" required></p>
        <p>Harga: <input type="number" name="harga" value="<?= $data['harga']; ?>" required></p>
        <p>Stok: <input type="number" name="stok" value="<?= $data['stok']; ?>" required></p>
        <p>Kode_otp: <input type="text" name="kode_otp" value="<?= $data['kode_otp']; ?>" required></p>
        <p>Status: <input type="text" name="status" value="<?= $data['status']; ?>" required></p>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
