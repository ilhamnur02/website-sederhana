<?php
session_start();
include "config/koneksi.php";

$error = "";

if(isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Validasi server-side dasar
    if (empty($user)) {
        $error = "Username tidak boleh kosong!";
    } elseif (strlen($pass) < 6) {
        $error = "Password minimal 6 karakter!";
    } else {

        // === LOGIN AMAN DENGAN PREPARED STATEMENT === //
        $stmt = $koneksi->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        if ($data) {
            if (password_verify($pass, $data['password'])) {
                $_SESSION['login'] = $user;
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "Password salah!";
            }
        } else {
            $error = "Username tidak ditemukan!";
        }
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

        <form method="POST" autocomplete="off" onsubmit="return validateLogin()">

        <div class="form-section">

        <!-- Tambahkan ID agar JS bisa membaca -->
        <input type="text" id="username" name="username" placeholder="Username" autocomplete="new-password">
        <p class="error" id="user-error"></p>

        <input type="password" id="password" name="password" placeholder="Password" autocomplete="new-password">
        <p class="error" id="pass-error"></p>

        <button type="submit" name="login" class="btn">LOGIN</button>

        <!-- Tampilkan error login dari PHP -->
        <?php if(isset($_POST['login']) && !empty($error)) { ?>
            <p class="error"><?= $error; ?></p>
        <?php } ?>


        </div>
        </form>

    </div>
</div>

<script src="assets/script.js"></script>
</body>
</html>
