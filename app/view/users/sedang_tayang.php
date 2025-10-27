<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Film Sedang Tayang - Cinematix</title>
  <style>
    /* ==== GLOBAL STYLE ==== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #0e0e0e;
      color: #fff;
      overflow-x: hidden;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* ==== NAVBAR ==== */
    header {
      background-color: #111;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 60px;
      position: sticky;
      top: 0;
      z-index: 100;
      border-bottom: 1px solid #222;
    }

    .logo {
      color: #ffd700;
      font-weight: 700;
      font-size: 1.5rem;
    }

    nav a {
      margin: 0 15px;
      color: #ddd;
      transition: 0.3s;
    }

    nav a:hover {
      color: #ffd700;
    }

    .btn-login {
      background-color: transparent;
      border: 1px solid #ffd700;
      color: #ffd700;
      padding: 8px 20px;
      border-radius: 6px;
      transition: 0.3s;
    }

    .btn-login:hover {
      background-color: #ffd700;
      color: #111;
    }

    /* ==== SECTION FILM ==== */
    .movie-section {
      padding: 80px 60px;
      background: linear-gradient(to bottom, #0e0e0e 80%, #111);
    }

    .section-title {
      text-align: center;
      font-size: 2.2rem;
      font-weight: 600;
      margin-bottom: 50px;
      color: #ffd700;
    }

    .movie-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 30px;
    }

    .movie-card {
      position: relative;
      background-color: #1a1a1a;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.4);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .movie-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.6);
    }

    .movie-card img {
      width: 100%;
      height: 330px;
      object-fit: cover;
      transition: 0.3s;
    }

    .movie-info {
      padding: 18px;
    }

    .movie-info h3 {
      font-size: 1.1rem;
      margin-bottom: 8px;
      color: #fff;
    }

    .movie-info p {
      font-size: 0.9rem;
      color: #bbb;
    }

    .btn-book {
      display: inline-block;
      margin-top: 12px;
      background-color: #ffd700;
      color: #111;
      font-weight: 600;
      padding: 8px 16px;
      border-radius: 6px;
      transition: 0.3s;
    }

    .btn-book:hover {
      background-color: #ffcc00;
    }

    /* ==== FOOTER ==== */
    footer {
      background-color: #111;
      padding: 40px 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      border-top: 1px solid #222;
    }

    footer .logo {
      font-size: 1.3rem;
      color: #ffd700;
      font-weight: 700;
    }

    footer p {
      color: #999;
      font-size: 0.9rem;
    }

    .socials a {
      margin: 0 10px;
      color: #ffd700;
      font-weight: 600;
      transition: 0.3s;
    }

    .socials a:hover {
      color: #fff;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="logo">Cinematix</div>
    <nav>
      <a href="#">Home</a>
      <a href="#">Pemesanan Tiket</a>
      <a href="#">Sedang Tayang</a>
      <a href="#">Berita & Event</a>
    </nav>
    <a href="#" class="btn-login">Masuk / Daftar</a>
  </header>

  <!-- SECTION FILM -->
  <section class="movie-section">
    <h2 class="section-title">Film Sedang Tayang</h2>
    <div class="movie-grid">
      
      <div class="movie-card">
        <img src="dune.jpg" alt="Dune: Part Two">
        <div class="movie-info">
          <h3>Dune: Part Two</h3>
          <p>Genre: Sci-Fi, Adventure</p>
          <a href="#" class="btn-book">Pesan Tiket</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="https://image.tmdb.org/t/p/w500/s1VzVhXlqsevi8zeCMG9A16nEUf.jpg" alt="Venom: The Last Dance">
        <div class="movie-info">
          <h3>Venom: The Last Dance</h3>
          <p>Genre: Action, Fantasy</p>
          <a href="#" class="btn-book">Pesan Tiket</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="https://image.tmdb.org/t/p/w500/vBZ0qvaRxqEhZwl6LWmruJqWE8Z.jpg" alt="Inside Out 2">
        <div class="movie-info">
          <h3>Inside Out 2</h3>
          <p>Genre: Animation, Family</p>
          <a href="#" class="btn-book">Pesan Tiket</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="https://image.tmdb.org/t/p/w500/bkpPTZUdq31UGDovmszsg2CchiI.jpg" alt="Deadpool & Wolverine">
        <div class="movie-info">
          <h3>Deadpool & Wolverine</h3>
          <p>Genre: Action, Comedy</p>
          <a href="#" class="btn-book">Pesan Tiket</a>
        </div>
      </div>

    </div>
  </section>
    <section class="movie-section">
    <div class="movie-grid">
      
      <div class="movie-card">
        <img src="dune.jpg" alt="Dune: Part Two">
        <div class="movie-info">
          <h3>Dune: Part Two</h3>
          <p>Genre: Sci-Fi, Adventure</p>
          <a href="#" class="btn-book">Pesan Tiket</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="https://image.tmdb.org/t/p/w500/s1VzVhXlqsevi8zeCMG9A16nEUf.jpg" alt="Venom: The Last Dance">
        <div class="movie-info">
          <h3>Venom: The Last Dance</h3>
          <p>Genre: Action, Fantasy</p>
          <a href="#" class="btn-book">Pesan Tiket</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="https://image.tmdb.org/t/p/w500/vBZ0qvaRxqEhZwl6LWmruJqWE8Z.jpg" alt="Inside Out 2">
        <div class="movie-info">
          <h3>Inside Out 2</h3>
          <p>Genre: Animation, Family</p>
          <a href="#" class="btn-book">Pesan Tiket</a>
        </div>
      </div>

      <div class="movie-card">
        <img src="https://image.tmdb.org/t/p/w500/bkpPTZUdq31UGDovmszsg2CchiI.jpg" alt="Deadpool & Wolverine">
        <div class="movie-info">
          <h3>Deadpool & Wolverine</h3>
          <p>Genre: Action, Comedy</p>
          <a href="#" class="btn-book">Pesan Tiket</a>
        </div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="logo">Cinematix</div>
    <p>© 2025 Cinematix. Enjoy Your Movie & Your Moment.</p>
    <div class="socials">
      <a href="#">IG</a>
      <a href="#">TT</a>
      <a href="#">YT</a>
    </div>
  </footer>

</body>
</html>
