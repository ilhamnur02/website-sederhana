<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

 <aside class="sidebar">
        <div class="logo-area">
            <img src="assets/LogoPT.BRIDGESTONE.png" class="logo" alt="Logo">
        </div>

        <ul class="menu">
        <li class="menu-item" data-page="dashboard.php" onclick="window.location='dashboard.php'">
        <i class="fas fa-home icon"></i> Dashboard
        </li>

        <li class="menu-item" data-page="karyawan.php" onclick="window.location='karyawan.php'">
        <i class="fas fa-users icon"></i> Data Karyawan
        </li>

        <li class="menu-item" data-page="absensi.php" onclick="window.location='absensi.php'">
        <i class="fas fa-calendar-check icon"></i> Data Absensi
        </li>

        <li class="menu-item" data-page="settings.php" onclick="window.location='settings.php'">
        <i class="fas fa-cog icon"></i> Settings
        </li>

        <li class="menu-item" onclick="window.location='logout.php'">
        <i class="fas fa-sign-out-alt icon"></i> Logout
        </li>
        </ul>

    </aside>

<main class="main">
        <h1 class="title">Dashboard</h1>

        <div class="cards">
            <div class="card">
                <h3>Total Karyawan</h3>
                <p class="value">185</p>
            </div>

            <div class="card">
                <h3>Hadir Hari Ini</h3>
                <p class="value">172</p>
            </div>

            <div class="card">
                <h3>Izin / Sakit</h3>
                <p class="value">10</p>
            </div>

            <div class="card">
                <h3>Tanpa Keterangan</h3>
                <p class="value">3</p>
            </div>
        </div>

        <!-- ROW KE-2 -->
        <div class="cards">
            <div class="card">
                <h3>Mesin Aktif</h3>
                <p class="value">24 / 30</p>
            </div>

            <div class="card">
                <h3>Produksi Hari Ini</h3>
                <p class="value">12,450 Unit</p>
            </div>

            <div class="card">
                <h3>Tingkat Keamanan (K3)</h3>
                <p class="value">Aman</p>
            </div>

            <div class="card">
                <h3>Laporan Masuk</h3>
                <p class="value">5</p>
            </div>
        </div>

        <!-- BIG CONTENT BOX BISA UNTUK GRAFIK -->
        <div class="content-box">
            <h2 class="content-title">Grafik Produktivitas Mingguan</h2>
            <p style="margin-top: 10px; color:#666;">(Grafik dapat ditambahkan nanti)</p>
        </div>
</main>

</body>
<script src="assets/script.js"></script>
</html>
