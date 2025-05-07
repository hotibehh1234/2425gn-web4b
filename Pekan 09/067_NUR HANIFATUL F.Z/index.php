<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background: #fff;
            width: 200px;
            margin: 10px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            text-align: center;
        }
        .card h3 {
            margin: 10px 0 5px;
        }
        .card p {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;">📚 Daftar Buku Populer</h1>

    <div class="container">
    <?php
    // Data daftar buku dalam array asosiatif
    $books = [
        ["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata", "tahun" => 2005],
        ["judul" => "Negeri 5 Menara", "penulis" => "Ahmad Fuadi", "tahun" => 2009],
        ["judul" => "Bumi Manusia", "penulis" => "Pramoedya Ananta Toer", "tahun" => 1980],
        ["judul" => "Dilan 1990", "penulis" => "Pidi Baiq", "tahun" => 2014]
    ];

    // Menampilkan data buku dalam card
    foreach ($books as $book) {
        echo "<div class='card'>";
        echo "<h3>" . $book['judul'] . "</h3>";
        echo "<p><strong>Penulis:</strong> " . $book['penulis'] . "</p>";
        echo "<p><strong>Tahun:</strong> " . $book['tahun'] . "</p>";
        echo "</div>";
    }
    ?>
    </div>

</body>
</html>
