<?php

require 'koneksi.php';

// Ambil data dari form
$grup = $_POST['grup'];
$negara = $_POST['negara'];
$menang = $_POST['menang'];
$kalah = $_POST['kalah'];
$point = $_POST['point'];

// Misalnya, Anda dapat menyimpan data ini ke dalam database atau melakukan tindakan lain yang sesuai dengan kebutuhan aplikasi Anda


// Query untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO uefa_groups (grup, negara, menang, kalah, point) VALUES ('$grup', '$negara', $menang, $kalah, $point)";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
