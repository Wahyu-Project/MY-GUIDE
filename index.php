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
    <title>My Guide | Portal Dashboard</title>
    <!-- Menghubungkan file CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <div class="header-top">
        <a class="btn-logout" href="logout.php">← Logout</a>
    </div>
    <div class="hero-grid">
        <div>
            <h1>MY GUIDE</h1>
            <p>Portal Internal untuk panduan sistem, dan monitoring layanan aplikasi. Silakan pilih modul pada dashboard di bawah ini.</p>
        </div>
    </div>
</header>

<main class="dashboard-grid">
   
    <!-- Kolom AMP -->
    <article class="card card-amp">
        <h2>AMP (API Management)</h2>
        <ul class="list-group">
            <li><a href="AMP/Aws/Aws.html">Flow AWS CloudWatch</a></li>
            <li><a href="AMP/Grafana_AMP/Grafana.html">Flow Monitoring Grafana</a></li>
            <li><a href="AMP/Elastic/Elastic.html">Flow Monitoring Elastic (Kibana)</a></li>
            <li><a href="AMP/Console/Console.html">Flow Console</a></li>
            <li><a href="AMP/Pam_AMP/Pam.html">Flow CyberArk</a></li>
            <li><a href="AMP/undeploy_redeploy/redeploy_undeploy.html">Flow <strong style="color: orangered">Undeploy</strong> & <strong style="color: darkgreen" >Redeploy</strong></a></li>
        </ul>
    </article>

    <!-- Kolom DSP -->
    <article class="card card-dsp">
        <h2>DSP (Data Singkronisai) </h2>
        <ul class="list-group">
            <li><a href="DSP/Grafana/Grafana.html">Flow Monitoring Grafana</a></li>
            <li><a href="DSP/Pam_DSP/Pam.html">Flow CyberArk</a></li>
            <li><a href="DSP/Telegram/Telegram.html">Flow Monitoring Master & DB (Telegram)</a></li>
            <li><a href="DSP/Start_Service/Start_service_DSP.html">Flow SetUp Server DSP</a></li>
        </ul>
    </article>
    
     <!-- Kolom ServiceDesk -->
    <article class="card card-sd1">
        <h2>Flow Ticket ServiceDesk </h2>
        <ul class="list-group">
            <li><a href="Servicedesk/Request_AMP.html">AMP Request Deploy (Permintaan Endpoint/API baru)</a></li>
            <li><a href="Servicedesk/redeploy_undeploy.html">AMP Request <strong style="color: orangered">Undeploy</strong> & <strong style="color: darkgreen" >Redeploy</strong></a></li>
            <li><a href="">DSP Request</a></li>
            <li><a href="Servicedesk/Incident_DSP.html">Ticket incident AMP & DSP</a></li>
        </ul>
    </article>
</main>
    
    

<footer>&copy; 2026 Portal Internal Local TNT</footer>

</body>
</html>