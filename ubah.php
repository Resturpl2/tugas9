<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Akun</title>
</head>
<body>
    <h2>Ubah Akun Free Fire</h2>
    <?php
    $no = $_GET['no'];
    $result = mysqli_query($conn, "SELECT * FROM akun_ff WHERE no='$no'");
    $row = mysqli_fetch_assoc($result);
    ?>
    <form method="post">
        <label>Spesifikasi</label><br>
        <input type="text" name="spek" value="<?php echo $row['spek']; ?>" required><br><br>

        <label>Pasien</label><br>
        <input type="text" name="pasien" value="<?php echo $row['pasien']; ?>" required><br><br>

        <label>Harga</label><br>
        <input type="number" name="harga" value="<?php echo $row['harga']; ?>" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" value="<?php echo $row['stok']; ?>" required><br><br>

        <button type="submit" name="ubah">Simpan Perubahan</button>
    </form>

    <?php
    if (isset($_POST['ubah'])) {
        $spek   = $_POST['spek'];
        $pasien = $_POST['pasien'];
        $harga  = $_POST['harga'];
        $stok   = $_POST['stok'];

        mysqli_query($conn, "UPDATE akun_ff SET spek='$spek', pasien='$pasien', harga='$harga', stok='$stok' WHERE no='$no'");
        echo "<script>alert('Data berhasil diubah!'); window.location='index.php';</script>";
    }
    ?>
</body>
</html>



