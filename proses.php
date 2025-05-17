<?php
include 'db.php';

$nama = $_POST['nama'];
$museum_id = $_POST['museum_id'];
$jumlah = $_POST['jumlah'];

// Ambil harga museum
$query = $conn->query("SELECT harga FROM museum WHERE id = $museum_id");
$data = $query->fetch_assoc();
$harga = $data['harga'];
$total = $harga * $jumlah;

// Simpan ke database
$conn->query("INSERT INTO pemesanan (nama_pengunjung, museum_id, jumlah_tiket, total_harga)
              VALUES ('$nama', $museum_id, $jumlah, $total)");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Berhasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="dashboard">
    <h2>Pemesanan Berhasil!</h2>
    <p>Nama: <?= htmlspecialchars($nama) ?></p>
    <p>Jumlah Tiket: <?= $jumlah ?></p>
    <p>Total Bayar: Rp<?= $total ?></p>
    <a href="index.php">Kembali</a>
</div>
</body>
</html>