<?php
// host
$host = "127.0.0.1:3307";
// username
$username = "root";
// password
$password = "";
// database
$database = "db_buku";
// port
$port = 3306;

// conn
$conn = mysqli_connect($host, $username, $password, $database, $port);

// check conn
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>