<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("Location: login.html");
    exit;
}
include "conn.php"; // pastikan file koneksi ada
?>


<!DOCTYPE html>
<html>
<head>
  <title>Show User</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap">

<style>
body {
  background: linear-gradient(to right, #d7f0ff, #f8fdff);
  font-family: 'Quicksand', sans-serif;
  color: #444;
  margin: 0;
  padding: 20px;
}

/* Judul halaman */
h2 {
  text-align: center;
  color: #3A2E68;
  font-weight: 700;
  margin-bottom: 20px;
}

/* Tabel utama */
table {
  width: 90%;
  margin: 0 auto;
  background-color: white;
  border-collapse: collapse;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
}

/* Header tabel */
th {
  background-color: #c8e8ff;
  color: #333;
  text-align: center;
  padding: 12px;
  font-weight: 600;
  font-size: 15px;
}

/* Baris data */
td {
  text-align: center;
  padding: 10px;
  border-bottom: 1px solid #eee;
}

/* Baris warna lembut pastel */
tbody tr:nth-child(odd) {
  background-color: #f3faff;
}
tbody tr:nth-child(even) {
  background-color: #fefcff;
}

/* Efek hover */
tr:hover {
  background-color: #e8f7ff;
  transition: 0.2s;
}

/* Tombol umum */
button, a.btn {
  display: inline-block;
  padding: 8px 18px;
  border-radius: 8px;
  border: none;
  font-weight: 600;
  text-decoration: none;
  cursor: pointer;
  font-size: 14px;
  transition: 0.2s;
}

/* Tombol Tambah */
.btn-tambah {
  background-color: #e3f3ff;
  color: #444;
}
.btn-tambah:hover {
  background-color: #bde3ff;
}

/* Tombol Edit */
.btn-ubah {
  background-color: #d9fdd3;
  color: #333;
}
.btn-ubah:hover {
  background-color: #b8f3a5;
}

/* Tombol Hapus */
.btn-hapus {
  background-color: #ffe1e1;
  color: #444;
}
.btn-hapus:hover {
  background-color: #ffbcbc;
}

/* Tombol Logout */
.logout-btn {
  background-color: #ede4ff;
  color: #444;
  padding: 8px 16px;
  border-radius: 10px;
  font-weight: bold;
  text-decoration: none;
}
.logout-btn:hover {
  background-color: #d4c4ff;
}

/* Garis dekorasi */
hr {
  width: 60%;
  margin: 20px auto;
  height: 4px;
  border: none;
  background: linear-gradient(to right, #c7e8ff, #ede4ff);
  border-radius: 10px;
}

/* Layout tombol atas */
.top-bar {
  width: 90%;
  margin: 0 auto 15px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
</style>

</head>

<body>
  <br>
    <div class="d-flex justify-content-between align-items-center mb-3">
      <form method="POST" action="index.html" class="m-0">
        <button type="submit" class="btn btn-tambah">+ Tambah Pesanan</button>
      </form>

      <a href="logout.php" class="btn logout-btn">Logout</a>
    </div>
<hr>
  </form>

  <h3>Data User</h3>

  <table class="table">
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Password</th>
      <th>Aksi</th>
    </tr>
    <?php  
      include 'conn.php';
      $data = mysqli_query($connect, "SELECT * FROM crudweb");
      while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?php echo $d['id_user']; ?></td>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['email']; ?></td>
      <td><?php echo $d['password']; ?></td>
      <td>
        <a role="button" class="btn btn-ubah" href="tableuserUbah.php?id=<?php echo $d['id_user']; ?>">UBAH</a>
        <a role="button" class="btn btn-hapus" href="tableuserHapus.php?id=<?php echo $d['id_user']; ?>">HAPUS</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>