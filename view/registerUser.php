<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $no_hp = $_POST['no_hp'];
    $role = 'user';

    $sql = "INSERT INTO users (nama, email, password, no_hp, role)
            VALUES ('$nama', '$email', '$password', '$no_hp', '$role')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.html';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan, coba lagi.'); window.location='register.html';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cinematix | Daftar</title>
  <link rel="icon" type="image/png" href="tix_logo.png">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background-color: #000;
      color: #fff;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Navbar */
    .navbar {
      background-color: #111;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 80px;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 100;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #ffcc00;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 30px;
    }

    .nav-links a {
      color: #fff;
      text-decoration: none;
      font-size: 15px;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #ffcc00;
    }

    .btn-login {
      border: 1px solid #ffcc00;
      color: #ffcc00;
      padding: 6px 15px;
      border-radius: 8px;
      text-decoration: none;
      transition: 0.3s;
    }

    .btn-login:hover {
      background-color: #ffcc00;
      color: #111;
    }

    /* Register Section */
    .register-section {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 120px 20px 60px;
    }

    .register-box {
      background-color: #111;
      padding: 40px 50px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(255, 204, 0, 0.2);
      width: 100%;
      max-width: 420px;
      text-align: center;
    }

    .register-box h2 {
      color: #ffcc00;
      margin-bottom: 25px;
    }

    .input-group {
      margin-bottom: 18px;
      text-align: left;
    }

    .input-group label {
      display: block;
      margin-bottom: 6px;
      font-size: 14px;
      color: #ddd;
    }

    .input-group input {
      width: 100%;
      padding: 10px 12px;
      border-radius: 8px;
      border: 1px solid #333;
      background-color: #000;
      color: #fff;
      outline: none;
      transition: 0.3s;
    }

    .input-group input:focus {
      border-color: #ffcc00;
    }

    .btn-submit {
      background-color: #ffcc00;
      color: #000;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      width: 100%;
      transition: 0.3s;
      margin-top: 10px;
    }

    .btn-submit:hover {
      background-color: #ffd633;
    }

    .register-footer {
      margin-top: 15px;
      font-size: 14px;
      color: #ccc;
    }

    .register-footer a {
      color: #ffcc00;
      text-decoration: none;
    }

    .register-footer a:hover {
      text-decoration: underline;
    }

  </style>
</head>
<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">Cinematix</div>
    <nav>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Pemesanan Tiket</a></li>
        <li><a href="#">Sedang Tayang</a></li>
        <li><a href="#">Berita & Event</a></li>
      </ul>
    </nav>
    <a href="login.html" class="btn-login">Masuk</a>
  </header>

  <!-- Register Section -->
  <section class="register-section">
    <div class="register-box">
      <h2>Buat Akun Baru</h2>

      <form action="proses_register.php" method="POST">
        <div class="input-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Masukkan email aktif" required>
        </div>

        <div class="input-group">
          <label for="password">Kata Sandi</label>
          <input type="password" id="password" name="password" placeholder="Buat kata sandi" required>
        </div>

        <div class="input-group">
          <label for="no_hp">No. Handphone</label>
          <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP" required>
        </div>

        <button type="submit" class="btn-submit">Daftar Sekarang</button>
      </form>

      <div class="register-footer">
        <p>Sudah punya akun? <a href="loginUser.php">Masuk di sini</a></p>
      </div>
    </div>
  </section>
</body>
</html>
