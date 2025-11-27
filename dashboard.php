<?php
include "config.php";

// Cek apakah user sudah login
if(!isset($_SESSION['username'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard - Website Sederhana</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Dashboard</h2>
    <p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b>!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
