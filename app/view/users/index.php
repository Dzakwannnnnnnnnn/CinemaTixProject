<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cinema Tix</title>
  <link rel="icon" type="images/png" href="tix_logo.png">
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

    /* === NAVBAR === */
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
      cursor: pointer;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 30px;
      transition: all 0.3s ease;
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

    /* Tombol hamburger */
    .menu-toggle {
      display: none;
      font-size: 26px;
      color: #ffcc00;
      cursor: pointer;
    }

    /* === HERO === */
    .hero {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding: 0 80px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      transition: background-image 1s ease-in-out;
      position: relative;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background: rgba(0, 0, 0, 0.55);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
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

    /* SECTION & GRID */
    .section {
      padding: 48px 0;
      border-top: 1px solid rgba(255,255,255,0.02);
      margin: 50px;
    }

    .section-title {
      font-family: 'Montserrat', sans-serif;
      color: #fff;
      font-size: 28px;
      margin-bottom: 22px;
    }

    .movies-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 26px;
    }

    .movie-card {
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(0,0,0,0.03));
      border-radius: 12px;
      overflow: hidden;
      transition: transform .22s ease, box-shadow .22s ease;
      box-shadow: 0 8px 18px rgba(0,0,0,0.45);
    }

    .movie-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 18px 40px rgba(0,0,0,0.6);
    }

    .poster {
      width: 100%;
      aspect-ratio: 2 / 3;
      background-size: cover;
      background-position: center;
      display: block;
    }

    .movie-meta {
      padding: 14px;
    }

    .movie-meta h3 {
      font-size: 18px;
      margin-bottom: 8px;
    }

    .sub {
      color: #aaa;
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .rating { color: #ffcc00; }

    .news-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 22px;
      margin-bottom: 18px;
    }

    .news-card {
      background: #111;
      border-radius: 10px;
      overflow: hidden;
      transition: transform .2s ease;
    }

    .news-card:hover {
      transform: translateY(-5px);
    }

    .news-card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      display: block;
    }

    .news-card h4 {
      padding: 12px 14px 6px;
      font-size: 16px;
    }

    .news-card p {
      padding: 0 14px 14px;
      color: #ccc;
      font-size: 14px;
    }

    .howto .steps {
      display: flex;
      gap: 18px;
      margin-top: 12px;
    }

    .step {
      flex: 1;
      background: #121212;
      padding: 18px;
      border-radius: 10px;
      text-align: center;
    }

    .step-icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #1f1f1f;
      color: #ffcc00;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .step-title { font-weight: 700; }

    /* FOOTER */
    .site-footer {
      background: linear-gradient(to top, #000, #0a0a0a);
      color: #ccc;
      padding: 50px 0 20px;
      border-top: 2px solid #ffcc00;
      position: relative;
      overflow: hidden;
    }

    .site-footer::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 200%;
      height: 3px;
      background: linear-gradient(90deg, transparent, #ffcc00, transparent);
      animation: footer-shine 4s linear infinite;
    }

    @keyframes footer-shine {
      0% { left: -100%; opacity: 0; }
      50% { opacity: 1; }
      100% { left: 100%; opacity: 0; }
    }

    .footer-inner {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 40px;
    }

    .foot-left .logo {
      font-size: 26px;
      font-weight: 700;
      color: #ffcc00;
      margin-bottom: 8px;
    }

    .foot-left .tag {
      font-size: 14px;
      color: #aaa;
    }

    .footer-nav {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .footer-nav a {
      color: #ccc;
      text-decoration: none;
      transition: 0.3s;
      font-size: 15px;
    }

    .footer-nav a:hover {
      color: #ffcc00;
      transform: translateX(4px);
    }

    .socials {
      display: flex;
      gap: 12px;
    }

    .socials a {
      color: #ffcc00;
      text-decoration: none;
      font-weight: bold;
      border: 1px solid #ffcc00;
      padding: 6px 10px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .socials a:hover {
      background: #ffcc00;
      color: #000;
      transform: scale(1.1);
    }

    /* RESPONSIVE */
    @media (max-width: 1100px) {
      .movies-grid { grid-template-columns: repeat(2, 1fr); }
      .news-grid { grid-template-columns: repeat(2, 1fr); }
      .hero h1 { font-size: 36px; }
    }

    @media (max-width: 768px) {
      .navbar {
        padding: 15px 20px;
      }

      .menu-toggle {
        display: block;
      }

      .nav-links {
        position: absolute;
        top: 65px;
        right: 0;
        background: #111;
        flex-direction: column;
        width: 100%;
        text-align: center;
        gap: 0;
        overflow: hidden;
        max-height: 0;
        transition: max-height 0.4s ease, transform 0.4s ease;
      }

      .nav-links li {
        border-top: 1px solid rgba(255,255,255,0.1);
        padding: 14px 0;
      }

      .nav-links.active {
        max-height: 300px;
      }

      .btn-login {
        display: none;
      }

      .movies-grid, .news-grid {
        grid-template-columns: 1fr;
      }

      .howto .steps {
        flex-direction: column;
      }

      .footer-inner {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 25px;
      }

      .socials {
        justify-content: center;
      }
    }

  </style>
</head>

<body>
  <header class="navbar">
    <div class="logo" onclick="window.location.href='index.php'">Cinematix</div>

    <div class="menu-toggle" id="menu-toggle">☰</div>

    <nav>
      <ul class="nav-links" id="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Pemesanan Tiket</a></li>
        <li><a href="#movies">Sedang Tayang</a></li>
        <li><a href="#news">Berita & Event</a></li>
      </ul>
    </nav>

    <a href="#" class="btn-login" onclick="window.location.href='loginUser.php'">Masuk / Daftar</a>
  </header>

  <section class="hero" id="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>Nikmati Pengalaman Nonton<br>Terbaik<br>Tanpa Antri di Bioskop</h1>
      <p>Temukan film terbaru dan jadwal bioskop favoritmu.</p>
      <a href="#" class="btn-primary">Pesan Tiket Sekarang</a>
    </div>
  </section>

  <main class="container">
    <section id="movies" class="section">
      <h2 class="section-title">Film Sedang Tayang</h2>
      <div class="movies-grid">
        <article class="movie-card">
          <div class="poster" style="background-image:url('venom.jpg')"></div>
          <div class="movie-meta"><h3>Venom: The Last Dance</h3><div class="sub">Aksi <span class="rating">★★★★☆</span></div></div>
        </article>
        <article class="movie-card">
          <div class="poster" style="background-image:url('interstellar.jpg')"></div>
          <div class="movie-meta"><h3>Interstellar</h3><div class="sub">Sci-Fi <span class="rating">★★★★☆</span></div></div>
        </article>
        <article class="movie-card">
          <div class="poster" style="background-image:url('haikyu.jpg')"></div>
          <div class="movie-meta"><h3>Haikyuu!! The Dumpster Battle</h3><div class="sub">Animasi <span class="rating">★★★★☆</span></div></div>
        </article>
      </div>
    </section>

    <section id="news" class="section">
      <h2 class="section-title">Berita & Event</h2>
      <div class="news-grid">
        <article class="news-card"><img src="venom.jpg"><h4>Deadpool & Wolverine Raih Antusiasme Tinggi</h4><p>Marvel kembali menarik perhatian para penggemar dengan aksi penuh kejutan.</p></article>
        <article class="news-card"><img src="avatar.jpg"><h4>Inside Out 2: Animasi Menyentuh Hati</h4><p>Film animasi yang menyentuh penonton dari segala usia.</p></article>
        <article class="news-card"><img src="openhimer.webp"><h4>Festival Sinema Dunia Akan Digelar</h4><p>Menampilkan karya-karya luar biasa dari seluruh dunia.</p></article>
      </div>
    </section>

    <section class="section howto">
      <h2 class="section-title">Cara Pesan Tiket</h2>
      <div class="steps">
        <div class="step"><div class="step-icon">1</div><div class="step-title">Pilih Film</div></div>
        <div class="step"><div class="step-icon">2</div><div class="step-title">Pilih Kursi</div></div>
        <div class="step"><div class="step-icon">3</div><div class="step-title">Bayar</div></div>
        <div class="step"><div class="step-icon">4</div><div class="step-title">Dapatkan E-Ticket</div></div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="footer-inner">
      <div class="foot-left">
        <div class="logo">Cinematix</div>
        <p class="tag">Cinematix — Enjoy Your Movie & Your Moment.</p>
      </div>
      <div class="foot-center">
        <nav class="footer-nav">
          <a href="#">Home</a>
          <a href="#">Tentang</a>
          <a href="#">Kontak</a>
        </nav>
      </div>
      <div class="foot-right">
        <div class="socials">
          <a href="#">IG</a>
          <a href="#">TT</a>
          <a href="#">YT</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Slideshow background
    const hero = document.getElementById("hero");
    const images = ["Stranger things 1920x1080.jpeg","dune.jpg","star.jpg","openhimer.webp"];
    let current = 0;
    function changeBackground() {
      hero.style.backgroundImage = `url('${images[current]}')`;
      current = (current + 1) % images.length;
    }
    changeBackground();
    setInterval(changeBackground, 5000);

    // Navbar toggle
    const menuToggle = document.getElementById("menu-toggle");
    const navLinks = document.getElementById("nav-links");

    menuToggle.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });
  </script>
</body>
</html>
