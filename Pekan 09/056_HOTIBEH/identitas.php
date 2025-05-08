<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

<h2>Daftar Mahasiswa</h2>

<?php
// Data dinamis dalam array
$mahasiswa = [
    ["nama" => "Nur", "jurusan" => "Pendidikan Informatika"],
    ["nama" => "Yasmin", "jurusan" => "PGSD"],
    ["nama" => "Yunika", "jurusan" => "Teknik Informatika"],
    ["nama" => "Manda", "jurusan" => "Sistem Informasi"]
];
?>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jurusan</th>
    </tr>
    <?php
    $no = 1;
    foreach ($mahasiswa as $mhs) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $mhs['nama'] . "</td>";
        echo "<td>" . $mhs['jurusan'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>