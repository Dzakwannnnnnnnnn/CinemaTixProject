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

    /* SLIDESHOW */
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

.lead{
  color:var(--muted);
  font-size:18px;
  margin-bottom:20px;
  max-width:620px;
}

/* Section */
.section{
  padding:48px 0;
  border-top:1px solid rgba(255,255,255,0.02);
  margin:50px;
}

/* Titles */
.section-title{
  font-family:'Montserrat', sans-serif;
  color:#fff;
  font-size:28px;
  margin-bottom:22px;
}

/* Movie Grid 2 rows x 3 columns */
.movies-grid{
  display:grid;
  grid-template-columns: repeat(3, 1fr);
  gap:26px;
}
.movie-card{
  background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(0,0,0,0.03));
  border-radius:12px;
  overflow:hidden;
  transition: transform .22s ease, box-shadow .22s ease;
  box-shadow: 0 8px 18px rgba(0,0,0,0.45);
}
.movie-card:hover{
  transform: translateY(-8px);
  box-shadow: 0 18px 40px rgba(0,0,0,0.6);
}
/* Use aspect-ratio to keep poster shape 2:3 */
.poster{
  width:100%;
  aspect-ratio: 2 / 3;
  background-size:cover;
  background-position:center;
  display:block;
}
.movie-meta{
  padding:14px;
}
.movie-meta h3{
  font-size:18px;
  margin-bottom:8px;
}
.sub{
  color:var(--muted);
  font-size:14px;
  display:flex;
  align-items:center;
  gap:10px;
}
.rating{ color:var(--accent) }

/* News grid 2 rows x 3 columns */
.news-grid{
  display:grid;
  grid-template-columns: repeat(3, 1fr);
  gap:22px;
  margin-bottom:18px;
}
.news-card{
  background:var(--surface);
  border-radius:10px;
  overflow:hidden;
  transition: transform .2s ease;
}
.news-card img{
  width:100%;
  height:160px;
  object-fit:cover;
  display:block;
}
.news-card h4{
  padding:12px 14px 6px;
  font-size:16px;
}
.news-card p{
  padding:0 14px 14px;
  color:var(--muted);
  font-size:14px;
}

/* How to steps */
.howto .steps{
  display:flex;
  gap:18px;
  margin-top:12px;
}
.step{
  flex:1;
  background:#121212;
  padding:18px;
  border-radius:10px;
  text-align:center;
}
.step-icon{
  width:60px;height:60px;border-radius:50%;
  background:#1f1f1f;color:var(--accent);
  display:inline-flex;align-items:center;justify-content:center;font-weight:700;margin-bottom:10px;
}
.step-title{font-weight:700;}

/* Footer */
.site-footer{
  margin-top:36px;
  background:#070707;
  border-top:1px solid rgba(255,255,255,0.02);
  padding:28px 0;
}
.footer-inner{
  display:flex;
  align-items:center;
  justify-content:space-between;
}
.foot-left .tag{color:var(--muted);margin-top:8px;font-size:14px}
.footer-nav a{color:var(--muted);margin:0 10px;text-decoration:none}
.socials a{color:var(--accent);margin-left:12px}

/* Utility center */
.center{text-align:center}

/* Responsive */
@media (max-width:1100px){
  .movies-grid{grid-template-columns: repeat(2, 1fr)}
  .news-grid{grid-template-columns: repeat(2,1fr)}
  .hero h1{font-size:40px}
}
@media (max-width:700px){
  .header-inner{padding:0 14px}
  .main-nav{display:none}
  .hero{height:520px}
  .movies-grid{grid-template-columns: 1fr}
  .news-grid{grid-template-columns: 1fr}
  .hero-left{margin-left:18px}
  .hero h1{font-size:32px}
}

.hero::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  background: linear-gradient(to bottom, transparent, #000000ff);
}

/* === FOOTER STYLING === */
.site-footer {
  background: linear-gradient(to top, #000, #0a0a0a);
  color: #ccc;
  padding: 50px 0 20px;
  border-top: 2px solid #ffcc00;
  position: relative;
  overflow: hidden;
}

/* Garis cahaya berjalan di atas footer */
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

/* === Layout === */
.footer-inner {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
}

/* === Kiri (logo dan tag) === */
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

/* === Tengah (navigasi) === */
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

/* === Kanan (sosial media) === */
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

/* === Responsif === */
@media (max-width: 768px) {
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
    <div class="logo" onclick="window.location.href='index.php'" style="cursor:pointer;">Cinematix</div>
    <nav>
      <ul class="nav-links">
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
    <!-- MOVIES -->
    <section id="movies" class="section">
      <h2 class="section-title">Film Sedang Tayang</h2>

      <div class="movies-grid">
        <!-- card x6 -->
        <article class="movie-card">
          <div class="poster" style="background-image:url('venom.jpg')" role="img" aria-label="Deadpool"></div>
          <div class="movie-meta">
            <h3>venom the last dance</h3>
            <div class="sub">Aksi <span class="rating">★★★★☆</span></div>
          </div>
        </article>

        <article class="movie-card">
          <div class="poster" style="background-image:url('interstellar.jpg')" role="img" aria-label="Inside Out 2"></div>
          <div class="movie-meta">
            <h3>Interstellar</h3>
            <div class="sub">sci-fi<span class="rating">★★★★☆</span></div>
          </div>
        </article>

        <article class="movie-card">
          <div class="poster" style="background-image:url('haikyu.jpg')" role="img" aria-label="Dune Part Two"></div>
          <div class="movie-meta">
            <h3>Haikyuu the dumster battle</h3>
            <div class="sub">Animasi <span class="rating">★★★★☆</span></div>
          </div>
        </article>

        <article class="movie-card">
          <div class="poster" style="background-image:url('jatuhcinta.jpg')" role="img" aria-label="Venom 3"></div>
          <div class="movie-meta">
            <h3>Jatuh cinta seperti di film-film </h3>
            <div class="sub">Aksi <span class="rating">★★★☆☆</span></div>
          </div>
        </article>

        <article class="movie-card">
          <div class="poster" style="background-image:url('thedark.webp')" role="img" aria-label="The Darkest Day of My Life"></div>
          <div class="movie-meta">
            <h3>The Darkest Day of My Life</h3>
            <div class="sub">Drama<span class="rating">★★★★☆</span></div>
          </div>
        </article>

        <article class="movie-card">
          <div class="poster" style="background-image:url('gost.jpg')" role="img" aria-label="Moana 2"></div>
          <div class="movie-meta">
            <h3>Ghostbusters The Supernatural Spectacular</h3>
            <div class="sub">Animasi <span class="rating">★★★★☆</span></div>
          </div>
        </article>
      </div>
      <br><br>
      <div class="center">
        <a href="sedang_tayang.php" class="btn btn-primary">Lihat Semua Film</a>
      </div>
    </section>

    <!-- NEWS -->
    <section id="news" class="section">
      <h2 class="section-title">Berita & Event</h2>
      <div class="news-grid">
        <article class="news-card">
          <img src="venom.jpg" alt="Berita 1">
          <h4>Prilaku Positif untuk Deadpool & Wolverine</h4>
          <p class="muted">Marvel kembali menarik perhatian para penggemar dengan aksi penuh kejutan.</p>
        </article>

        <article class="news-card">
          <img src="avatar.jpg" alt="Berita 2">
          <h4>Inside Out 2: Seri Animasi Berhasil Menarik Perhatian</h4>
          <p class="muted">Film animasi yang menyentuh hati penonton dari segala usia.</p>
        </article>

        <article class="news-card">
          <img src="openhimer.webp" alt="Berita 3">
          <h4>Ajang Sinema Internasional Akan Digelar Tahun Ini</h4>
          <p class="muted">Beberapa festival akan menampilkan karya-karya luar biasa.</p>
        </article>

        <article class="news-card">
          <img src="Stranger things 1920x1080.jpeg" alt="Berita 4">
          <h4>Premiere Eksklusif Dune: Part Two</h4>
          <p class="muted">Acara khusus untuk premiere dan Q&A dengan pemeran.</p>
        </article>

        <article class="news-card">
          <img src="dune.jpg" alt="Berita 5">
          <h4>Promo Week: Diskon Tiket Midweek</h4>
          <p class="muted">Dapatkan potongan harga untuk hari kerja tertentu.</p>
        </article>

        <article class="news-card">
          <img src="star.jpg" alt="Berita 6">
          <h4>Event Cosplay & Meet&Greet</h4>
          <p class="muted">Bertemu kreator dan cosplayer favoritmu di Cinematix.</p>
        </article>
      </div>
<br><br>
      <div class="center">
        <a href="beritaEvent.php" class="btn btn-primary">Lihat Semua Berita</a>
      </div>
    </section>

    <!-- HOW TO -->
    <section class="section howto">
      <h2 class="section-title">Cara Pesan Tiket</h2>
      <div class="steps">
        <div class="step">
          <div class="step-icon">1</div>
          <div class="step-title">Pilih Film</div>
        </div>
        <div class="step">
          <div class="step-icon">2</div>
          <div class="step-title">Pilih Kursi</div>
        </div>
        <div class="step">
          <div class="step-icon">3</div>
          <div class="step-title">Bayar</div>
        </div>
        <div class="step">
          <div class="step-icon">4</div>
          <div class="step-title">Dapatkan E-Ticket</div>
        </div>
      </div>
    </section>
  </main>
<br><br><br>
  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="foot-left">
        <div class="logo">Cinematix</div>
        <p class="tag">Cinematix — enjoy Your Movie & Your Moment.</p>
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
          <a href="#" aria-label="Instagram">IG</a>
          <a href="#" aria-label="TikTok">TT</a>
          <a href="#" aria-label="Youtube">YT</a>
        </div>
      </div>
    </div>
  </footer>
  <script>
    const hero = document.getElementById("hero");

    // Ganti dengan path gambar kamu sendiri
    const images = [
      "Stranger things 1920x1080.jpeg",
      "dune.jpg",
      "star.jpg",
      "openhimer.webp"
    ];

    let current = 0;

    function changeBackground() {
      hero.style.backgroundImage = `url('${images[current]}')`;
      current = (current + 1) % images.length;
    }

    // Pertama kali jalan
    changeBackground();

    setInterval(changeBackground, 5000);
  </script>
</body>
</html>
