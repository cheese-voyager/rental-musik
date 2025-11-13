<?php

//include koneksi database
include('conn.php');

//get data dari form
$id_user        = $_POST['id_user'];
$nama           = $_POST['nama'];
$email          = $_POST['email'];
$password       = $_POST['password'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET nama = '$nama', email = '$email', password = '$password' WHERE id_user = '$id_user'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connect->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tableuserShow.php");
} else {
    //pesan error gagal update data
    echo "Failed to Update!";
}

?>