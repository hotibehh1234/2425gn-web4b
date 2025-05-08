<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna Terbaru</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .user-card { border: 1px solid #333; padding: 10px; margin: 8px 0; background-color: #f9f9f9; }
        .user-card h3 { margin: 0; }
        .status { font-style: italic; color: #555; }
    </style>
</head>
<body>

    <?php
    echo "<h1>Daftar Pengguna Terbaru</h1>";

    $users = [
        ["nama" => "Rani", "usia" => 17, "kota" => "Sidoarjo"],
        ["nama" => "Neisya", "usia" => 18, "kota" => "Sidoarjo"],
        ["nama" => "Faliza", "usia" => 21, "kota" => "Depok"],
        ["nama" => "Tania", "usia" => 28, "kota" => "Yogyakarta"],
        ["nama" => "Nur", "usia" => 21, "kota" => "Undaan"],
        ["nama" => "Rizal", "usia" => 23, "kota" => "Surabaya"]
    ];

    function cekStatus($usia) {
        if ($usia < 20) {
            return "Remaja";
        } elseif ($usia <= 25) {
            return "Dewasa Muda";
        } else {
            return "Dewasa";
        }
    }

    foreach ($users as $user) {
        echo "<div class='user-card'>";
        echo "<h3>Nama: " . $user["nama"] . "</h3>";
        echo "<p>Usia: " . $user["usia"] . " tahun</p>";
        echo "<p>Kota: " . $user["kota"] . "</p>";
        echo "<p class='status'>Status: " . cekStatus($user["usia"]) . "</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
