<?php
// Konfigurasi koneksi
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'shop';

// Buat koneksi MySQLi (OO)
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query SELECT
$sql    = "SELECT id, name, price FROM products";
$result = $conn->query($sql);

// Tampilkan data
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Produk dari Database</title>
</head>
<body>
    <h1>Produk dari Database</h1>
    <?php if ($result->num_rows > 0): ?>  <!-- Cek jumlah baris hasil SELECT -->  
        <table border="1" cellpadding="8" cellspacing="0">
            <tr><th>ID</th><th>Nama</th><th>Harga</th></tr>
            <?php while ($row = $result->fetch_assoc()): ?>  <!-- Loop hasil query -->  
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td>$<?= number_format($row['price'], 2) ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>Tidak ada data produk.</p>
    <?php endif; ?>
    <?php $conn->close(); // Tutup koneksi ?>  
</body>
</html>
