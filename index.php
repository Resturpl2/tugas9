<?php
include "koneksi.php";
$result = mysqli_query($conn, "SELECT * FROM akun_ff ORDER BY id ASC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Stok Akun FF</title>
    <style>
        body { font-family: Arial; background: radial-gradient(circle at top, #1a103d, #0a0320, #000); color: #fff; text-align: center; }
        table { margin: auto; border-collapse: collapse; width: 90%; background: rgba(255,255,255,0.1); }
        table, th, td { border: 1px solid #fff; padding: 10px; }
        th { background: #3f2b96; }
        a { color: #00ffcc; text-decoration: none; }
        a:hover { color: yellow; }
        .btn { margin: 10px; padding: 8px 15px; background: #3f2b96; color: #fff; border-radius: 5px; }
        .btn:hover { background: #00ffcc; color: #000; }
    </style>
</head>
<body>
    <h1>Data Stok Akun Free Fire</h1>
    <a href="tambah.php" class="btn">+ Tambah Data</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Spek</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kode_otp</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['spek']; ?></td>
            <td><?= $row['harga']; ?></td>
            <td><?= $row['stok']; ?></td>
            <td><?= $row['kode_otp']; ?></td>
            <td><?= $row['status']; ?></td>
                                                         
            <td>
                <a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> | 
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
