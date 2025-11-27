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

        <li class="menu-item" data-page="laporan.php" onclick="window.location='laporan.php'">
        <i class="fas fa-file-alt icon"></i> Laporan
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
                <h3>Total Users</h3>
                <p class="value">2,464</p>
            </div>

            <div class="card">
                <h3>New Users</h3>
                <p class="value">1,899</p>
            </div>

            <div class="card">
                <h3>Total Revenue</h3>
                <p class="value">$24,139</p>
            </div>
        </div>

        <div class="content-box">
            <!-- Tempat grafik atau konten lainnya -->
        </div>
    </main>

</body>
<script src="assets/script.js"></script>
</html>
