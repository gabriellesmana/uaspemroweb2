<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Group A</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
            color: #333;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #e0e0e0;
        }

        .button {
            display: block;
            width: 150px;
            padding: 10px;
            text-align: center;
            margin: 20px auto;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Data Group A</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "euro_data";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data Group A dari tabel uefa_groups
    $sql = "SELECT * FROM uefa_groups WHERE grup = 'A'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        echo "<table>
                <tr>
                    <th>Grup</th>
                    <th>Negara</th>
                    <th>Menang</th>
                    <th>Kalah</th>
                    <th>Point</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["grup"]."</td>
                    <td>".$row["negara"]."</td>
                    <td>".$row["menang"]."</td>
                    <td>".$row["kalah"]."</td>
                    <td>".$row["point"]."</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data untuk Group A.";
    }

    $conn->close();
    ?>
    <a href="index.php" class="button">Kembali ke Home</a>
</body>
</html>
