<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_website-sederhana");
if(!$koneksi){
    die("koneksi gagal: " . mysqli_connect_error());
}
?>