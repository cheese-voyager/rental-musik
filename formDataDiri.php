<!DOCTYPE html>
<html>
<head>
  <title>Data Diri Pengadopsi</title>
  <style>
    <?php include 'css/style.css'; ?>
    form {
      width: 70%;
      margin: 0 auto;
      background: white;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }
    input, textarea {
      width: 100%;
      padding: 8px;
      margin: 6px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
    }
  </style>
</head>
<body>
  <h2>Isi Data Diri Anda</h2>
  <form method="POST" action="formJemput.php">
    <input type="hidden" name="id_kucing" value="<?php echo $_GET['id_kucing']; ?>">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" required>
    <label>No. Telepon</label>
    <input type="text" name="telepon" required>
    <label>Email</label>
    <input type="email" name="email" required>
    <label>Alamat</label>
    <textarea name="alamat" required></textarea>
    <input type="submit" class="btn btn-ubah" value="Lanjutkan ke Form Jemput">
  </form>
</body>
</html>
