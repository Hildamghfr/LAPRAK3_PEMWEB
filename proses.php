<?php
$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');

if (empty($nama) || empty($email)) {
    header("Location: error.php");
    exit;
}

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i:s");
$hari = date("l");
$tanggal = date("d-m-Y");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Berhasil Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
      background: url('Bromo.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      padding: 40px 30px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      text-align: center;
      max-width: 600px;
      width: 100%;
      min-height: 450px; /* agar tetap panjang */
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    img {
      max-width: 200px;
      margin-bottom: 20px;
      margin-left: auto;
      margin-right: auto;
    }

    h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    p {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="card" data-aos="zoom-in">
  <img src="login.png" alt="Hello Ilustration">
  <h2>Selamat Datang, <?= htmlspecialchars($nama) ?>!</h2>
  <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
  <p><strong>Login pada:</strong><br><?= $hari ?>, <?= $tanggal ?> pukul <?= $jam ?></p>
  <a href="login.php" class="btn btn-primary mt-4">Kembali</a>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
