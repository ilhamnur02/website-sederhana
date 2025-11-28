<?php
include 'config/koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($koneksi, "INSERT INTO karyawan (nama, jabatan, alamat) VALUES ('$nama', '$jabatan', '$alamat')");

    if ($query) {
        echo "<script>
                alert('Tambah Data Berhasil!');
                setTimeout(function(){
                    window.location = 'karyawan.php';
                }, 800);
              </script>";
        exit;
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

    <form action="" method="POST">
        
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
