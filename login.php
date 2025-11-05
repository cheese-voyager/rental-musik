<?php 
    session_start();
    include 'conn.php';
 
    // menangkap data yang dikirim dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($connect, "SELECT * FROM user WHERE email='$email' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "login";
        header("location:tableuserShow.php");
    }
    else{
        echo "<script> alert ('Login gagal! Email atau password tidak benar');</script>";
        echo "<script> window.location ='login.html';</script>";
    }
?>