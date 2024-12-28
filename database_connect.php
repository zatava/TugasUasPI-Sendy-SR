<?php
$host = 'localhost'; // Server database
$user = 'root';      // Username database
$pass = '';          // Password database
$database   = 'identitas_diri'; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
