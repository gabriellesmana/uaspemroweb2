<?php
require 'koneksi.php';

// Inisialisasi variabel
$negara = '';
$grup = '';
$menang = '';
$kalah = '';
$point = '';

// Periksa apakah parameter 'negara' ada dan tidak kosong
if (isset($_GET['negara'])) {
    $negara = $_GET['negara'];

    // Query untuk mengambil data berdasarkan nama negara
    $sql = "SELECT * FROM uefa_groups WHERE negara = '$negara'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Ambil data dari hasil query
        $row = $result->fetch_assoc();
        $grup = $row['grup'];
        $menang = $row['menang'];
        $kalah = $row['kalah'];
        $point = $row['point'];
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "Parameter 'negara' tidak ditemukan.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Negara</title>
</head>
<body>
    <h2>Edit Data Negara: <?php echo htmlspecialchars($negara); ?></h2>
    <form action="update.php" method="post">
        <input type="hidden" name="negara" value="<?php echo htmlspecialchars($negara); ?>">
        <label for="grup">Grup:</label>
        <input type="text" id="grup" name="grup" value="<?php echo htmlspecialchars($grup); ?>" required><br><br>
        <label for="menang">Jumlah Menang:</label>
        <input type="number" id="menang" name="menang" value="<?php echo htmlspecialchars($menang); ?>" required><br><br>
        <label for="kalah">Jumlah Kalah:</label>
        <input type="number" id="kalah" name="kalah" value="<?php echo htmlspecialchars($kalah); ?>" required><br><br>
        <label for="point">Jumlah Point:</label>
        <input type="number" id="point" name="point" value="<?php echo htmlspecialchars($point); ?>" required><br><br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
