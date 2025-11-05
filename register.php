<?php
session_start();
include 'conn.php';

// ambil data dari form
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = $_POST['password'];

// cek apakah username sudah ada
$cek = mysqli_query($connect, "SELECT * FROM user WHERE email='$email'");
if(mysqli_num_rows($cek) > 0){
    echo "<script>alert('Email sudah ada!'); window.location='register.html';</script>";
    exit;
}

// simpan ke database
$query = mysqli_query($connect, "INSERT INTO user (nama, email, password) VALUES ('$nama','$email','$password')");

if($query){
    // buat session login langsung
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    echo "<script>alert('Akun berhasil dibuat! Selamat datang $email'); window.location='tableuserShow.php';</script>";
} else {
    echo "<script>alert('Gagal membuat akun!'); window.location='register.html';</script>";
}
?>