<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Detail Kucing</title>
  <style>
    <?php include 'css/style.css'; ?>
    .detail {
      width: 80%;
      margin: 0 auto;
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      padding: 20px;
      text-align: center;
    }
    img {
      width: 250px;
      height: 250px;
      border-radius: 15px;
      object-fit: cover;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <?php
    $id = $_GET['id_kucing'];
    $data = mysqli_query($connect, "SELECT * FROM kucing WHERE id_kucing='$id'");
    $d = mysqli_fetch_array($data);
  ?>
  <div class="detail">
    <h2><?php echo $d['nama']; ?></h2>
    <img src="img/<?php echo $d['foto']; ?>">
    <p>Ras: <?php echo $d['ras']; ?></p>
    <p>Kelamin: <?php echo $d['kelamin']; ?></p>
    <p>Usia: <?php echo $d['usia']; ?></p>
    <p><?php echo $d['deskripsi']; ?></p>
    <a href="formDataDiri.php?id_kucing=<?php echo $d['id_kucing']; ?>" class="btn btn-tambah">Adopsi</a>
  </div>
</body>
</html>
