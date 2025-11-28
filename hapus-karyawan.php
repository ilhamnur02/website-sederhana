<?php
include 'config/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: karyawan.php");
    exit;
}

$id = $_GET['id'];

// Ambil data karyawan untuk ditampilkan sebelum dihapus
$query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

// Jika data tidak ditemukan
if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='karyawan.php';</script>";
    exit;
}

// Jika tombol hapus ditekan
if (isset($_POST['hapus'])) {
    mysqli_query($koneksi, "DELETE FROM karyawan WHERE id = '$id'");
    echo "<script>
        alert('Data berhasil dihapus!');
        setTimeout(function(){
            window.location = 'karyawan.php';
        }, 800); 
    </script>";
    exit;
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapus Karyawan</title>
    <link rel="stylesheet" href="assets/hapus-karyawan.css">
</head>
<body>

<div class="card">
    <h2>Hapus Karyawan</h2>
    <p>Apakah Anda yakin ingin menghapus data berikut?</p>

    <div class="info-box">
        <p><strong>Nama:</strong> <?= $data['nama']; ?></p>
        <p><strong>Jabatan:</strong> <?= $data['jabatan']; ?></p>
        <p><strong>Alamat:</strong> <?= $data['alamat']; ?></p>
    </div>

    <form method="POST" onsubmit="return confirm('Yakin mau hapus?')">
        <button type="submit" name="hapus" class="btn-hapus">HAPUS</button>
    </form>

    <a href="karyawan.php" class="back-link">Kembali</a>
</div>
</body>
</html>
