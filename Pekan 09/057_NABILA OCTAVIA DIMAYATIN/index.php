<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dinamis</title>
</head>
<body>

    <h1>Daftar Pengguna</h1>

    <?php
    // Data dalam bentuk array asosiatif
    $users = [
        ["nama" => "Budi", "usia" => 25, "kota" => "Surabaya"],
        ["nama" => "Siti", "usia" => 30, "kota" => "Jakarta"],
        ["nama" => "Andi", "usia" => 22, "kota" => "Bandung"]
    ];

    // Looping untuk menampilkan setiap data pengguna
    echo "<ul>";
    foreach ($users as $user) {
        echo "<li>Nama: " . $user["nama"] . ", Usia: " . $user["usia"] . ", Kota: " . $user["kota"] . "</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>