<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database

$host = "127.0.0.1:3307"; // Server database 
$user = "root"; // Username MySQL (default: "root" di XAMPP)
$pass = ""; // Password MySQL (kosong di XAMPP)
$dbname = "db_perpustakaan"; // nama database

// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 
$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>