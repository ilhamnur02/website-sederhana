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

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <div class="card">

        <div class="logo-section">
            <img src="assets/LogoPT.BRIDGESTONE.png" alt="Logo">
        </div>

        <form method="POST" autocomplete="off">

        <!-- Fake fields untuk menipu autofill browser -->
        <input type="text" name="fake_username" style="display:none" autocomplete="username">
        <input type="password" name="fake_password" style="display:none" autocomplete="new-password">

        <div class="form-section">
            <input type="text" name="username" placeholder="Username" autocomplete="new-password" required>
            <input type="password" name="password" placeholder="Password" autocomplete="new-password" required>

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