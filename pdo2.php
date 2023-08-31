<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nama_database";

try {
    // Buat koneksi PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Set mode error PDO ke exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Query SELECT
    $sql = "SELECT * FROM nama_tabel";
    $stmt = $pdo->query($sql);
    
    // Ambil hasil dalam bentuk associative array
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Cetak hasil
    foreach ($result as $row) {
        echo "ID: " . $row['id'] . " Nama: " . $row['nama'] . "<br>";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Tutup koneksi
$pdo = null;
?>
