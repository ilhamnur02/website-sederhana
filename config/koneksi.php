<?php
// Konfigurasi
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_website_sederhana";

// Koneksi aman menggunakan MySQLi OOP
$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($koneksi->connect_error) {
    // Jangan tampilkan pesan error detail ke user (berbahaya)
    error_log("Koneksi gagal: " . $koneksi->connect_error);
    die("Terjadi kesalahan pada server.");
}

// Mengaktifkan mode strict agar query error lebih jelas
$koneksi->set_charset("utf8mb4");
?>
