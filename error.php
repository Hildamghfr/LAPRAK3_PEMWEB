<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Error Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    body {
      background: url('Bromo.jpg') no-repeat center center fixed;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card {
      background: #fff;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.15);
      max-width: 500px;
      width: 100%;
      text-align: center;
      min-height: 400px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    img {
      max-width: 180px;
      margin: 0 auto 25px auto;
    }

    h3 {
      color: #dc3545;
      font-weight: 700;
      margin-bottom: 15px;
    }

    p {
      font-size: 16px;
      color: #555;
      margin-bottom: 25px;
    }

    .btn-danger {
      padding: 10px 25px;
      font-weight: bold;
      border-radius: 8px;
    }

    .btn-danger:hover {
      background-color: #bb2d3b;
    }
  </style>
</head>
<body>

<div class="card" data-aos="flip-down">
  <img src="login.png" alt="Ilustrasi Gagal Login">
  <h3>Login Gagal</h3>
  <p>Nama dan email harus diisi lengkap untuk melanjutkan.</p>
  <a href="login.php" class="btn btn-danger">Coba Lagi</a>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>