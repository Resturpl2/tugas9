<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Akun FF</title>
    <style>
        body {
            background: radial-gradient(circle at top, #1a103d, #0a0320, #000000);
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            text-align: center;
        }
        form {
            margin: 50px auto;
            padding: 20px;
            width: 350px;
            background: rgba(20, 20, 40, 0.9);
            border-radius: 15px;
            box-shadow: 0 0 25px #00ffff;
        }
        input {
            margin: 10px;
            padding: 10px;
            width: 90%;
            border: none;
            border-radius: 8px;
        }
        button {
            background: #111133;
            color: #0ff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 8px #00ffff;
        }
        button:hover {
            background: #222266;
            box-shadow: 0 0 15px #ff00ff;
        }
    </style>
</head>
<body>
    <h1>Tambah Akun FF</h1>
    <form method="post">
        <input type="text" name="spek" placeholder="Spesifikasi" required><br>
        <input type="number" name="harga" placeholder="Harga" required><b\r>
        <input type="number" name="stok" placeholder="Stok" required><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
        $spek = $_POST['spek'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        mysqli_query($conn, "INSERT INTO akun_ff (spek, harga, stok) VALUES ('$spek','$harga','$stok')");
        echo "<script>alert('Data berhasil ditambah');window.location='index.php';</script>";
    }
    ?>
</body>
</html>
