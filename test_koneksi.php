<?php
include "koneksi.php"; // Pastikan file koneksi.php sudah benar

if ($conn) {
    echo "Koneksi database berhasil!";
} else {
    echo "Koneksi database gagal!";
}
?>
