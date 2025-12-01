<?php
include 'config/koneksi.php';

$id = $_GET['id'];

$stmt = $koneksi->prepare("SELECT * FROM karyawan WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='karyawan.php';</script>";
    exit;
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    $stmt = $koneksi->prepare("UPDATE karyawan SET nama=?, jabatan=?, alamat=? WHERE id=?");
    $stmt->bind_param("sssi", $nama, $jabatan, $alamat, $id);

    if ($stmt->execute()) {
        echo "<script>
                alert('Edit Data Berhasil!');
                setTimeout(function(){ window.location='karyawan.php'; }, 800);
              </script>";
        exit;
    } else {
        echo "<script>alert('Gagal mengedit data!');</script>";
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

    <form action="" method="POST" id="formEdit" onsubmit="return validateKaryawan('formEdit')">

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
