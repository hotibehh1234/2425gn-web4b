<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f0f0f0;
        }
        h1 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px 15px;
            text-align: center;
        }
        th {
            background-color: #3498db;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #e0f7fa;
        }
    </style>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php
    // Data mahasiswa dalam array asosiatif
    $mahasiswa = [
        ["nama" => "Rizky", "nim" => "20221001", "prodi" => "Teknik Informatika"],
        ["nama" => "Aulia", "nim" => "20221002", "prodi" => "Sistem Informasi"],
        ["nama" => "Cindy", "nim" => "20221003", "prodi" => "Teknik Komputer"],
        ["nama" => "Putri", "nim" => "20221004", "prodi" => "Manajemen Informatika"]
    ];

    // Menampilkan data dalam tabel
    echo "<table>";
    echo "<tr><th>No</th><th>Nama</th><th>NIM</th><th>Program Studi</th></tr>";
    $no = 1;
    foreach ($mahasiswa as $mhs) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $mhs["nama"] . "</td>";
        echo "<td>" . $mhs["nim"] . "</td>";
        echo "<td>" . $mhs["prodi"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>


