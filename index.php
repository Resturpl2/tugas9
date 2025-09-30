<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Stok Akun Free Fire</title>
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            background: radial-gradient(circle at top, #1a103d, #0a0320, #000000);
            color: #fff;
            text-align: center;
        }
        h1 {
            text-shadow: 0 0 10px #ff00ff, 0 0 20px #00ffff;
        }
        a {
            color: #00ffff;
            text-decoration: none;
            padding: 8px 12px;
            background: #111133;
            border-radius: 10px;
            margin: 5px;
            display: inline-block;
            box-shadow: 0 0 8px #00ffff;
        }
        a:hover {
            background: #222266;
            box-shadow: 0 0 15px #ff00ff;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background: rgba(20, 20, 40, 0.9);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 25px #00ffff;
        }
        th, td {
            padding: 12px;
            border: 1px solid #444;
            text-align: center;
        }
        th {
            background: #220044;
            color: #0ff;
            text-shadow: 0 0 5px #ff0;
        }
        td {
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>🌌 Stok Akun Free Fire 🌌</h1>
    <a href="tambah.php">+ Tambah Akun</a>
    <table>
        <tr>
            <th>No</th>
            <th>Spesifikasi</th>
            <th>Pasien</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM akun_ff");
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$no++."</td>
                    <td>".$row['spek']."</td>
                    <td>".$row['pasien']."</td>
                    <td>Rp ".number_format($row['harga'],0,',','.')."</td>
                    <td>".$row['stok']."</td>
                    <td>
                        <a href='ubah.php?id=".$row['id']."'>Ubah</a>
                        <a href='hapus.php?id=".$row['id']."' onclick=\"return confirm('Hapus data ini?')\">Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>



