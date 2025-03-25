<?php
// Konfigurasi koneksi database
$host = "localhost"; // Nama host (default: localhost)
$user = "root"; // Username database
$pass = ""; // Password database (kosong jika menggunakan XAMPP)
$db   = "mhs"; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";
}
?>
