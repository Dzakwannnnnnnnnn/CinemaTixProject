<?php
include_once("/koneksi.php");

// Proses form
if (isset($_POST['submit'])) {
  $judul = $_POST['judul'];
  $genre = $_POST['genre'];
  $durasi = $_POST['durasi'];
  $rating_usia = $_POST['rating_usia'];
  $poster = $_POST['poster'];

  $query = "INSERT INTO film (judul, genre, durasi, rating_usia, poster) 
            VALUES ('$judul', '$genre', '$durasi', '$rating_usia', '$poster')";
  
  if (mysqli_query($mysqli, $query)) {
    echo "<div class='status success'>✅ Data film berhasil ditambahkan!</div>";
  } else {
    echo "<div class='status failed'>❌ Gagal menambahkan data: " . mysqli_error($mysqli) . "</div>";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Film - CinemaTix Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .status {
      text-align: center;
      padding: 10px 15px;
      margin: 0;
      font-weight: 600;
      font-size: 14px;
    }
    .status.success {
      background-color: #d1f7d1;
      color: #1b5e20;
      border-bottom: 2px solid #43a047;
    }
    .status.failed {
      background-color: #ffd6d6;
      color: #b71c1c;
      border-bottom: 2px solid #e53935;
    }
    .form-card {
      max-width: 600px;
      margin: 50px auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      padding: 30px;
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
      <h4 class="text-center">🎬 Admin CinemaTix</h4>
      <ul class="nav flex-column mt-4">
        <li class="nav-item"><a href="dashboard.php" class="nav-link text-white">Dashboard</a></li>
        <li class="nav-item"><a href="users.php" class="nav-link text-white">Users</a></li>
        <li class="nav-item"><a href="film.php" class="nav-link text-white">Film</a></li>
        <li class="nav-item"><a href="studio.php" class="nav-link text-white">Studio</a></li>
        <li class="nav-item"><a href="kursi.php" class="nav-link text-white">Kursi</a></li>
        <li class="nav-item"><a href="jadwal.php" class="nav-link text-white">Jadwal</a></li>
        <li class="nav-item"><a href="booking.php" class="nav-link text-white">Booking</a></li>
        <li class="nav-item"><a href="pembayaran.php" class="nav-link text-white">Pembayaran</a></li>
      </ul>
    </nav>

    <div class="container-fluid p-4">
      <h2>Tambah Film</h2>
      <p>Isi form di bawah untuk menambahkan film baru ke database CinemaTix.</p>

      <div class="form-card">
        <form method="post" action="">
          <div class="mb-3">
            <label for="judul" class="form-label">Judul Film</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
          </div>
          <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
          </div>
          <div class="mb-3">
            <label for="durasi" class="form-label">Durasi (menit)</label>
            <input type="number" class="form-control" id="durasi" name="durasi" required>
          </div>
          <div class="mb-3">
            <label for="rating_usia" class="form-label">Rating Usia</label>
            <select class="form-select" id="rating_usia" name="rating_usia" required>
              <option value="">-- Pilih Rating --</option>
              <option>SU</option>
              <option>13+</option>
              <option>17+</option>
              <option>21+</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="poster" class="form-label">URL Poster</label>
            <input type="text" class="form-control" id="poster" name="poster" placeholder="https://example.com/poster.jpg">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          <a href="panelAdmin.php" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>