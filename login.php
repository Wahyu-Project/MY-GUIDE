<?php
session_start(); // Wajib ada di baris paling atas untuk mulai sesi
include("./DB/database.php");

if (isset($_POST["Login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = pg_query($db, $sql);

    if (pg_num_rows($result) > 0) {
        // Jika login berhasil, simpan session user
        $_SESSION['user'] = $username;
        
        // Arahkan ke index.php (pastikan file index.html sudah diubah menjadi index.php)
        header("location: index.php");
        exit();
    } else {
        echo "<script>alert('Salah User/Password!');</script>";
    }
}
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login.css">

 </head>
 <body>
    
    <div class = "Flex1">
    <h1> MY GUIDE </h1>
        
<P>Masuk Sekarang </p>
   <form action="login.php" method="POST" >
    <input type="text" placeholder="username" name="username" class = "Flex2"/>
    <br>
    <input type="password" placeholder="password" name="password" class = "Flex2"/>
    <br>
    <button type="submit" name ="Login"><strong>Masuk</strong></button>
    
   </form>
   </div>
<footer>© Copyright : 2026 Local TNT</footer> 
    </body>
 </html>