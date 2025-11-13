<?php
include 'conn.php';

$id_kucing = $_POST['id_kucing'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$tanggal_jemput = $_POST['tanggal_jemput'];
$kendaraan = $_POST['kendaraan'];
$catatan = $_POST['catatan'];

mysqli_query($connect, "INSERT INTO adopsi (id_kucing, nama, telepon, email, alamat, tanggal_jemput, kendaraan, catatan)
VALUES ('$id_kucing', '$nama', '$telepon', '$email', '$alamat', '$tanggal_jemput', '$kendaraan', '$catatan')");

header("Location: index.php");
exit;
?>
