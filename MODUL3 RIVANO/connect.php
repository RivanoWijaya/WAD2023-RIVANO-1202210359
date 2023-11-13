<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "modul3 rivano";
// 
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
// 
?>