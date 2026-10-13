<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Dashboard</title>
    <!-- Menghubungkan file CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
    <ul class="home">    
    <a href="logout.php">logout</a>
    </ul>
        <h1>MY GUIDE</h1>
        
    </div>
    
    <section class="container">
        <!-- Kolom Home -->
        <article class="card">
            <div class="card-header">Profil Perusahaan</div>
            <ul class="list-group">
                <li><a href="profilePerusahaan/profilePerusahaan.html">Informasi Perusahaan</a></li>
            
                <li>Informasi Partner & CLient</li>
    
            </ul>
        </article>
        
        <!-- Kolom AMP -->
        <article class="card">
            <div class="card-header">AMP</div>
            <ul class="list-group">
                <li><a href="AMP/Aws/Aws.html">Flow AWS CloudWatch</a></li>
                <li><a href="AMP/Grafana_AMP/Grafana.html">Flow Monitoring Grafana</a></li>
                <li><a href="AMP/Elastic/Elastic.html">Flow Monitoring Elastic (Kibana)</a></li>
                <li><a href="AMP/Console/Console.html">Flow Console</a></li>
                <li><a href="AMP/Pam_AMP/Pam.html">Flow CyberArk</a></li>
                <li><a href="AMP/Servicedesk_AMP/Servicedesk.html">Flow Ticket ServiceDesk</a></li>
        
            </ul>
        </article>

        <!-- Kolom DSP -->
        <article class="card">
            <div class="card-header">DSP</div>
            <ul class="list-group">
                <li><a href="DSP/Grafana/Grafana.html">Flow Monitoring Grafana</a></li>
                <li>Flow CyberArk</li>
                <li>Flow Monitoring Jobs</li>
                <li>Flow SetUp Server DSP</li>
                <li>Flow ServiceDesk</li>
            </ul>
        </article>
    </section>
    
    <div class="footer">
        &copy; 2026 Portal Internal
    </div>
</body>
</html>