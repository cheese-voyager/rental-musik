<?php
session_start(); // mulai sesi

// hapus semua data sesi
session_unset();
session_destroy();

// kembali ke halaman login
header("Location: login.html");
exit;
?>