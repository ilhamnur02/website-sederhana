<?php
include 'config/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: karyawan.php");
    exit;
}

$id = $_GET['id'];

$stmt = $koneksi->prepare("SELECT * FROM karyawan WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='karyawan.php';</script>";
    exit;
}

if (isset($_POST['hapus'])) {
    $stmt = $koneksi->prepare("DELETE FROM karyawan WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    echo "<script>
        alert('Data berhasil dihapus!');
        setTimeout(function(){ window.location='karyawan.php'; }, 800);
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
