<?php
// koneksi.php dengan error handling yang better
$host = "192.168.1.6";
$user = "root";
$pass = "Dzakwann033";  // Coba kosong dulu
$db = "cinematicket";

try {
    $conn = mysqli_connect($host, $user, $pass, $db);
    
    if (!$conn) {
        throw new Exception("Koneksi database gagal: " . mysqli_connect_error());
    }
    
    // Set charset
    mysqli_set_charset($conn, "utf8mb4");
    
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>