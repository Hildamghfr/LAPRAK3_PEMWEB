<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Elegan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: url('Bromo.jpg') no-repeat center center/cover;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(3px);
      z-index: 0;
    }

    .card-login {
      position: relative;
      z-index: 1;
      border-radius: 20px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
      padding: 35px;
      background-color: rgba(255, 255, 255, 0.95);
      max-width: 400px;
      width: 100%;
    }

    .form-control {
      border-radius: 12px;
    }

    .btn-custom {
      background-color: #4a90e2;
      color: #fff;
      border: none;
      border-radius: 12px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-custom:hover {
      background-color: #357ab8;
    }

    .text-title {
      color: #2a2a2a;
    }
  </style>
</head>
<body>

<div class="overlay"></div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 d-flex justify-content-center align-items-center">
      <div class="card-login" data-aos="zoom-in">
        <h3 class="text-center mb-4 fw-bold text-title">Silakan Login</h3>

        <!-- Tampilkan pesan error jika ada -->
        <?php if (isset($_GET['error'])): ?>
          <div class="alert alert-danger"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>

        <form action="proses.php" method="POST">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <button type="submit" class="btn btn-custom w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>