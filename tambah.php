<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Akun</title>
</head>
<body>
    <h2>Tambah Akun Free Fire</h2>
    <form method="post">
        <label>Spesifikasi</label><br>
        <input type="text" name="spek" required><br><br>

        <label>Pasien</label><br>
        <input type="text" name="pasien" required><br><br>

        <label>Harga</label><br>
        <input type="number" name="harga" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $spek   = $_POST['spek'];
        $pasien = $_POST['pasien'];
        $harga  = $_POST['harga'];
        $stok   = $_POST['stok'];

        mysqli_query($conn, "INSERT INTO akun_ff (spek, pasien, harga, stok) VALUES ('$spek','$pasien','$harga','$stok')");
        echo "<script>alert('Data berhasil disimpan!'); window.location='index.php';</script>";
    }
    ?>
</body>
</html>


