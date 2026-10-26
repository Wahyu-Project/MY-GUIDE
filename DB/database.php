<?php 
// Data kredensial dari Neon DB
$host = "ep-royal-paper-a1wz75yt-pooler.ap-southeast-1.aws.neon.tech";
$port = "5432"; // Port bawaan PostgreSQL
$dbname = "neondb";
$user = "neondb_owner";
$password = "npg_SrRI5Cqdhy9e";

// Format Key-Value (Tambahkan sslmode=require wajib untuk Neon DB)
$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password sslmode=require";

// Lakukan koneksi
$db = pg_connect($connection_string);

// Pengecekan koneksi (bisa dihapus atau diberi komentar jika aplikasi sudah jalan)
if (!$db) {
    die("Koneksi gagal terjadi masalah.");
}
?>