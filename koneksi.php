<?php
$host = "localhost";
$user = "root"; // sesuaikan dengan user database
$pass = ""; // sesuaikan dengan password database
$db   = "simaskir";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";
?>
