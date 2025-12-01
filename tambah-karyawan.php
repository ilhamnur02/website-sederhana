<?php
include 'config/koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    $stmt = $koneksi->prepare("INSERT INTO karyawan (nama, jabatan, alamat) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $jabatan, $alamat);

    if ($stmt->execute()) {
        echo "<script>
                alert('Tambah Data Berhasil!');
                setTimeout(function(){ window.location='karyawan.php'; }, 800);
              </script>";
    } else {
        echo "<script>alert('Gagal menambah data!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Karyawan</title>
    <link rel="stylesheet" href="assets/tambah-karyawan.css">
    <link rel="stylesheet" href="assets/karyawan.css">
</head>

<body>

<div class="form-container">
    <h2>Tambah Karyawan</h2>

    <form action="" method="POST" id="formTambah" onsubmit="return validateKaryawan('formTambah')">
        
        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>

        <label>Jabatan</label>
        <input type="text" name="jabatan" required>

        <label>Alamat</label>
        <textarea name="alamat" rows="3" required></textarea>

        <button type="submit" name="submit" class="btn-submit">SIMPAN</button>
    </form>

    <a href="karyawan.php" class="back-link">Kembali</a>
</div>

</body>
</html>
