<?php
// koneksi.php dengan error handling yang better
$host = "192.168.1.6";
$user = "cinematik_user"; // ← PERHATIKAN: cinematik_user BUKAN cinematic_user
$pass = "password123";
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