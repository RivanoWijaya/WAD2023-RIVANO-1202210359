<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

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


// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if (isset($_POST["nama_mobil"])){
$nama_mobil = $_POST ['nama_mobil'];
    // b. Ambil data brand mobil
$brand_mobil = $_POST ['brand_mobil'];
    // c. Ambil data warna mobil
$warna_mobil = $_POST ['warna_mobil'];
    // d. Ambil data tipe mobil
$tipe_mobil = $_POST ['tipe_mobil'];
    // e. Ambil data harga mobil
$harga_mobil = $_POST ['harga_mobil'];
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
$query = mysqli_query($conn, "INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil)
VALUES ('$nama_mobil','$brand_mobil','$warna_mobil','$tipe_mobil','$harga_mobil')")
    // (5) Buatkan kondisi jika eksekusi query berhasil
if (mysqli_affected_rows ($connect) > 0){
    header('Location: list_mobil.php')
}
    else
    echo "</script>
        alert ('data gagal')
        document.location.href = 'list_mobil.php
        </script>";
}
// (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
// (7) Tutup koneksi ke database setelah selesai menggunakan database
?>