<?php 

// (1) Hapus cookie dengan key id 

// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();
session_unset();
//

// (4) Lakukan redirect ke halaman login awal
header('Location: http://localhost:8080/MODUL4%20RIVANO/JURNAL%20MODUL%204/views/login.php');
//

exit;

?>