<!DOCTYPE html>
<html>
<head>
  <title>Form Penjemputan Kucing</title>
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
  <h2>Formulir Penjemputan</h2>
  <form method="POST" action="simpanAdopsi.php">
    <input type="hidden" name="id_kucing" value="<?php echo $_POST['id_kucing']; ?>">
    <input type="hidden" name="nama" value="<?php echo $_POST['nama']; ?>">
    <input type="hidden" name="telepon" value="<?php echo $_POST['telepon']; ?>">
    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
    <input type="hidden" name="alamat" value="<?php echo $_POST['alamat']; ?>">

    <label>Tanggal Jemput</label>
    <input type="date" name="tanggal_jemput" required>
    <label>Kendaraan yang Dibawa</label>
    <input type="text" name="kendaraan" required>
    <label>Keterangan Tambahan</label>
    <textarea name="catatan"></textarea>

    <input type="submit" class="btn btn-ubah" value="Kirim Formulir">
  </form>
</body>
</html>
