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
        ["nama" => "iza", "usia" => 26, "kota" => "bangkalan"],
        ["nama" => "nur", "usia" => 21, "kota" => "surabaya"],
        ["nama" => "ina", "usia" => 22, "kota" => "Bandung"]
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
