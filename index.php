<?php
session_start();
include "config/koneksi.php";

if(isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
    $data = mysqli_fetch_assoc($cek);

    if ($data) {
        $_SESSION['login'] = $user;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bridgestone</title>

    <!-- PENTING: Linknya harus benar -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <div class="card">

        <div class="logo-section">
            <img src="assets/LogoPT.BRIDGESTONE.png" alt="Logo">
            <p>PT. BRIDGESTONE KALIMANTAN PLANTATION</p>
        </div>

        <form method="POST">
            <div class="form-section">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login" class="btn">LOGIN</button>

                <?php if(!empty($error)) { ?>
                    <p class="error"><?= $error; ?></p>
                <?php } ?>
            </div>
        </form>

    </div>
</div>

</body>
</html>