<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
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

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id= $_GET [ "id" ];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil

    // (4) Buatkan perkondisi jika eksekusi query berhasil

// Tutup koneksi ke database setelah selesai menggunakan database

?>