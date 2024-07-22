<?php
// Informasi koneksi ke database
$servername = "localhost"; // Nama server MySQL (biasanya localhost)
$username = "alwan"; // Nama pengguna MySQL
$password = "root"; // Kata sandi pengguna MySQL
$database = "db_appsurat"; // Nama database MySQL

// Buat koneksi ke database
$connection = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
} else {
    // Koneksi berhasil
    //echo "Koneksi berhasil!";
}
?>
