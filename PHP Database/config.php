<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pdug_audio"; 
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>