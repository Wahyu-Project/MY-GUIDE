<?php 
$host = "localhost";
$port = "5432";
$dbname = "MY_GUIDE";
$user = "postgres";
$password = "DB123";


$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Lakukan koneksi
$db = pg_connect($connection_string);

// Pengecekan tidak memakai ->connect, melainkan mengecek nilai kembalian $db
/*if ($db) {
    echo "Koneksi database PostgreSQL berhasil!";
} else {
    echo "Koneksi gagal terjadi masalah.<br>";
    die("Matot!");
} */

?>