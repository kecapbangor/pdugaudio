<?php
// Memanggil sesi yang sedang aktif
session_start();
// Menghancurkan seluruh data sesi (menghapus status login)
session_destroy();
// Mengembalikan user ke halaman login
header("Location: login.php");
exit();
?>