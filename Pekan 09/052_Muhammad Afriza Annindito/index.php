<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'shop';


$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$sql    = "SELECT id, name, price FROM products";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Produk dari Database</title>
</head>
<body>
    <h1>Produk dari Database</h1>
    <?php if ($result->num_rows > 0): ?> 
        <table border="1" cellpadding="8" cellspacing="0">
            <tr><th>ID</th><th>Nama</th><th>Harga</th></tr>
            <?php while ($row = $result->fetch_assoc()): ?>   
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
    <?php $conn->close(); i ?>  
</body>
</html>
