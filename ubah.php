<?php 
include "koneksi.php"; 
$no = $_GET['no'];
$data = mysqli_query($conn, "SELECT * FROM akun_ff WHERE no=$no");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Akun FF</title>
    <style>
        body { background: radial-gradient(circle at top, #1a103d, #0a0320, #000000); font-family: 'Orbitron', sans-serif; color: #fff; text-align: center; }
        form { margin: 50px auto; padding: 20px; width: 350px; background: rgba(20,20,40,0.9); border-radius: 15px; box-shadow: 0 0 25px #00ffff; }
        input { margin: 10px; padding: 10px; width: 90%; border: none; border-radius: 8px; }
        button { background: #111133; color: #0ff; padding: 10px 20px; border: none; border-radius: 10px; box-shadow: 0 0 8px #00ffff; }
        button:hover { background: #222266; box-shadow: 0 0 15px #ff00ff; }
    </style>
</head>
<body>
    <h1>Ubah Akun FF</h1>
    <form method="post">
        <input type="text" name="spek" value="<?= $row['spek'] ?>" required><br>
        <input type="number" name="harga" value="<?= $row['harga'] ?>" required><br>
        <input type="number" name="stok" value="<?= $row['stok'] ?>" required><br>
        <button type="submit" name="update">Update</button>
    </form>
    <?php
    if (isset($_POST['update'])) {
        $spek = $_POST['spek'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        mysqli_query($conn, "UPDATE akun_ff SET spek='$spek', harga='$harga', stok='$stok' WHERE no=$no");
        echo "<script>alert('Data berhasil diubah');window.location='index.php';</script>";
    }
    ?>
</body>
</html>
