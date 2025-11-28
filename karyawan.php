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
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="assets/dashboard.css">
    <link rel="stylesheet" href="assets/karyawan.css">
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
        <h1 class="title">Data Karyawan</h1>

        <div class="content-box">

        <div class="header-action">
            <h2>Daftar Karyawan</h2>
            <a href="tambah-karyawan.php" class="btn-tambah">+ Tambah Karyawan</a>
        </div>

        <div class="table-wrapper">
        <table class="table-karyawan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            <?php
                include "config/koneksi.php";
                $sintaks = mysqli_query($koneksi, "SELECT * FROM karyawan");
                $no = 1;
                while ($data = mysqli_fetch_array($sintaks)) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['jabatan']; ?></td>
                    <td><?= $data['alamat']; ?></td>
                    <td class="action-links">
                        <a href="edit-karyawan.php?id=<?= $data['id']; ?>" class="btn-edit">Edit</a>
                        <a href="hapus-karyawan.php?id=<?= $data['id']; ?>" class="btn-hapus">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>

        </div>
</main>

</body>
<script src="assets/script.js"></script>
</html>
