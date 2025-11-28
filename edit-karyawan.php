<?php 
include 'config/koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data karyawan berdasarkan ID
$data = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

// Jika form disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    $update = mysqli_query($koneksi, 
        "UPDATE karyawan SET 
        nama='$nama', 
        jabatan='$jabatan', 
        alamat='$alamat' 
        WHERE id='$id'"
    );

    if ($update) {
        header("Location: karyawan.php");
        exit;
    } else {
        echo "Gagal mengupdate data!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Karyawan</title>
    <link rel="stylesheet" href="assets/edit-karyawan.css">
</head>

<body>

<div class="form-container">
    <h2>Edit Karyawan</h2>

    <form action="" method="POST">

        <label>Nama</label>
        <input type="text" name="nama" value="<?= $row['nama']; ?>" required>

        <label>Jabatan</label>
        <input type="text" name="jabatan" value="<?= $row['jabatan']; ?>" required>

        <label>Alamat</label>
        <textarea name="alamat" rows="3" required><?= $row['alamat']; ?></textarea>

        <button type="submit" name="submit" class="btn-submit">EDIT</button>
    </form>

    <a href="karyawan.php" class="back-link">Kembali</a>
</div>

</body>
</html>
