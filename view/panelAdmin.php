<?php
include_once("koneksi.php");

// Coba jalankan query
$hasil = mysqli_query($conn, "SELECT * FROM film");

// Cek error query
if (!$hasil) {
    die("❌ Query gagal: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - CinemaTix</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="d-flex">
    <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
      <h4 class="text-center">🎬 Admin CinemaTix</h4>
      <ul class="nav flex-column mt-4">
        <li class="nav-item"><a href="#" class="nav-link text-white">Dashboard</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Users</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Film</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Studio</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Kursi</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Jadwal</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Booking</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Pembayaran</a></li>
      </ul>
    </nav>

    <div class="container-fluid p-4">
      <h2>Dashboard</h2>
      <p>Selamat datang di panel admin database CinemaTix.</p>

      <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5>Data Film</h5>
          <a href="tambah.php" class="btn btn-primary btn-sm">+ Tambah Film</a>
        </div>
        <div class="card-body">
          <?php if (mysqli_num_rows($hasil) > 0): ?>
            <table class="table table-striped table-bordered">
              <thead class="table-light">
                <tr>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>Genre</th>
                  <th>Durasi</th>
                  <th>Rating Usia</th>
                  <th>Poster</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($film = mysqli_fetch_assoc($hasil)): ?>
                  <tr>
                    <td><?= htmlspecialchars($film['film_id']) ?></td>
                    <td><?= htmlspecialchars($film['judul']) ?></td>
                    <td><?= htmlspecialchars($film['genre']) ?></td>
                    <td><?= htmlspecialchars($film['durasi']) ?> menit</td>
                    <td><?= htmlspecialchars($film['rating_usia']) ?></td>
                    <td>
                      <?php if (!empty($film['poster_url'])): ?>
                        <img src="<?= htmlspecialchars($film['poster_url']) ?>" width="60" class="rounded" alt="poster">
                      <?php else: ?>
                        <span class="text-muted">Tidak ada</span>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="edit.php?id=<?= $film['film_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                      <a href="hapus.php?id=<?= $film['film_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus film ini?')">Hapus</a>
                    </td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          <?php else: ?>
            <div class="alert alert-warning">Tidak ada data film.</div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>