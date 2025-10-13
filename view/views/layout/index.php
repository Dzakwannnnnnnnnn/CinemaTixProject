<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cinema Tix</title>
  <link rel="icon" type="images/png" href="tix_logo.png">
</head>
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
}

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


.hero {
  height: 100vh;
  display: flex;
  align-items: center;
  padding: 0 80px;
  background-image: 
    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
    url('Stranger things 1920x1080.jpeg'); 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed; 
}


.hero-content {
  max-width: 600px;
}

.hero h1 {
  font-size: 42px;
  font-weight: 700;
  margin-bottom: 20px;
  line-height: 1.3;
}

.hero p {
  font-size: 16px;
  color: #ccc;
  margin-bottom: 30px;
}

.btn-primary {
  background-color: #ffcc00;
  color: #000;
  font-weight: bold;
  padding: 10px 25px;
  border-radius: 8px;
  text-decoration: none;
  transition: 0.3s;
}

.btn-primary:hover {
  background-color: #ffd633;
}

</style>
<body>
  <header class="navbar">
    <div class="logo" onclick="window.location.href='index.php'" style="cursor:pointer;">Cinematix</div>
    <nav>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Pemesanan Tiket</a></li>
        <li><a href="#">Sedang Tayang</a></li>
        <li><a href="#">Berita & Event</a></li>
      </ul>
    </nav>
    <a href="#" class="btn-login" onclick="window.location.href='loginUser.php'">Masuk / Daftar</a>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h1>Nikmati Pengalaman Nonton<br>Terbaik<br>Tanpa Antri di Bioskop</h1>
      <p>Temukan film terbaru dan jadwal bioskop favoritmu.</p>
      <a href="#" class="btn-primary">Pesan Tiket Sekarang</a>
    </div>
  </section>
</body>
</html>