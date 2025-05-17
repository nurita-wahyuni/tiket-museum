<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Tiket Museum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Pemesanan Tiket Masuk Museum</h2>
    <form action="proses.php" method="POST">
        <label>Nama Anda:</label>
        <input type="text" name="nama" required>

        <label>Pilih Museum:</label>
        <select name="museum_id" required>
            <?php
            include 'db.php';
            $result = $conn->query("SELECT * FROM museum");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['nama']} - Rp{$row['harga']}</option>";
            }
            ?>
        </select>

        <label>Jumlah Tiket:</label>
        <input type="number" name="jumlah" min="1" value="1" required>

        <button type="submit">Pesan Tiket</button>
    </form>
</div>
</body>
</html>