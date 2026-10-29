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
            <li><a href="AMP/undeploy_redeploy/redeploy_undeploy.html">Flow <strong style="color: orangered; font-weight: 700;">Undeploy</strong> & <strong style="color: darkgreen" >Redeploy</strong></a></li>
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

    <!-- ======== WADAH DUA KALKULATOR BERSEBELAHAN ======== -->
    <div class="kalkulator-wrapper full-width">

        <!-- KALKULATOR SLA -->
        <div class="calculator-card">
            <div class="card-header">
                <h2>Kalkulator SLA</h2>
                <p>Masukkan parameter Jumlah Hari dan Downtime.</p>
            </div>

            <div class="card-body">
                <!-- Bagian Input -->
                <div class="input-section">
                    <div class="input-group">
                        <label for="inputHari">Jumlah Hari</label>
                        <input type="number" id="inputHari" value="31" min="1">
                    </div>
                    <div class="input-group">
                        <label for="inputJam">Total Jam per Hari</label>
                        <input type="number" id="inputJam" value="24" readonly>
                    </div>
                    <div class="input-group">
                        <label for="inputDownMenit">Downtime (Menit)</label>
                        <input type="number" id="inputDownMenit" value="51" min="0">
                    </div>
                </div>

                <!-- Bagian Hasil -->
                <div class="result-section">
                    <div class="highlight-result">
                        <span>Total SLA</span>
                        <h3 id="hasilTotalSla">99.89%</h3>
                    </div>
                    
                    <div class="details-grid">
                        <div class="detail-box">
                            <span class="detail-label">Total Jam/Bulan</span>
                            <span class="detail-value" id="hasilTotalJam">744</span>
                        </div>
                        <div class="detail-box">
                            <span class="detail-label">Down Per-Jam</span>
                            <span class="detail-value" id="hasilDownJam">0.85</span>
                        </div>
                        <div class="detail-box">
                            <span class="detail-label">Sisa Jam</span>
                            <span class="detail-value" id="hasilSisaJam">743.15</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AKHIR KALKULATOR SLA -->

        <!-- KALKULATOR TIER LOG ENDPOINT -->
        <div class="calculator-card">
            <div class="card-header bg-orange">
                <h2>Kalkulator Rentang Tier Log</h2>
                <p>Masukkan tanggal penarikan untuk melihat rentang tanggal pada Tier.</p>
            </div>

            <div class="card-body">
                <!-- Bagian Input -->
                <div class="input-section-tier">
                    <div class="input-group">
                        <label for="tanggalPenarikan">Tanggal Penarikan</label>
                        <input type="date" id="tanggalPenarikan">
                    </div>
                </div>

                <!-- Bagian Hasil -->
                <div class="result-section-tier">
                    <div class="details-grid">
                        <!-- Tier 1 -->
                        <div class="detail-box" style="border-left: 6px solid #10B981;">
                            <span class="detail-label" style="color: #10B981; font-weight: 700; font-size: 15px;">Tier 1</span>
                            <span class="detail-value" id="rangeTier1">-</span>
                        </div>
                        <!-- Tier 2 -->
                        <div class="detail-box" style="border-left: 6px solid #3b82f6;">
                            <span class="detail-label" style="color: #3b82f6; font-weight: 700; font-size: 15px;">Tier 2</span>
                            <span class="detail-value" id="rangeTier2">-</span>
                        </div>
                        <!-- Tier 3 -->
                        <div class="detail-box" style="border-left: 6px solid #f59e0b;">
                            <span class="detail-label" style="color: #f59e0b; font-weight: 700; font-size: 15px;">Tier 3</span>
                            <span class="detail-value" id="rangeTier3">-</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AKHIR KALKULATOR TIER LOG ENDPOINT -->

    </div>
    <!-- ======== AKHIR WADAH ======== -->
</main>
    
<footer>&copy; 2026 Portal Internal Local TNT</footer>

<!-- Script Logika Kalkulator SLA -->
<script>
    const inputHari = document.getElementById('inputHari');
    const inputJam = document.getElementById('inputJam');
    const inputDownMenit = document.getElementById('inputDownMenit');

    const hasilTotalJam = document.getElementById('hasilTotalJam');
    const hasilDownJam = document.getElementById('hasilDownJam');
    const hasilSisaJam = document.getElementById('hasilSisaJam');
    const hasilTotalSla = document.getElementById('hasilTotalSla');

    function hitungSLA() {
        let hari = parseFloat(inputHari.value) || 0;
        let jam = parseFloat(inputJam.value) || 0; 
        let downMenit = parseFloat(inputDownMenit.value) || 0;

        let totalJam = hari * jam;
        let downPerJam = downMenit / 60;
        let sisaJam = totalJam - downPerJam;
        
        let totalSlaPersen = 0;
        if (totalJam > 0) {
            totalSlaPersen = (sisaJam / totalJam) * 100;
        }

        hasilTotalJam.innerText = totalJam;
        hasilDownJam.innerText = Number.isInteger(downPerJam) ? downPerJam : downPerJam.toFixed(2);
        hasilSisaJam.innerText = Number.isInteger(sisaJam) ? sisaJam : sisaJam.toFixed(2);
        hasilTotalSla.innerText = totalSlaPersen.toFixed(2) + "%";
    }

    inputHari.addEventListener('input', hitungSLA);
    inputDownMenit.addEventListener('input', hitungSLA);

    hitungSLA();
    // === LOGIKA KALKULATOR RENTANG TIER LOG ===
    const inputTanggalPenarikan = document.getElementById('tanggalPenarikan');
    const rangeTier1 = document.getElementById('rangeTier1');
    const rangeTier2 = document.getElementById('rangeTier2');
    const rangeTier3 = document.getElementById('rangeTier3');

    // Set tanggal default ke hari ini saat web dibuka
    const now = new Date();
    const yyyy = now.getFullYear();
    const mm = String(now.getMonth() + 1).padStart(2, '0');
    const dd = String(now.getDate()).padStart(2, '0');
    inputTanggalPenarikan.value = `${yyyy}-${mm}-${dd}`;

    // Fungsi untuk format tanggal menjadi lebih rapi (cth: 15 Okt 2026)
    function formatDate(dateObj) {
        const options = { day: '2-digit', month: 'short', year: 'numeric' };
        return dateObj.toLocaleDateString('id-ID', options);
    }

    function hitungRentangTier() {
        if (!inputTanggalPenarikan.value) return;

        // Ambil tanggal penarikan yang diinput
        const baseDate = new Date(inputTanggalPenarikan.value);
        baseDate.setHours(0, 0, 0, 0);

        // Fungsi bantu untuk mengurangi hari
        const subtractDays = (date, days) => {
            const result = new Date(date);
            result.setDate(result.getDate() - days);
            return result;
        };

        // Menghitung batas Tier 1 (0 sampai 14 hari mundur)
        const t1End = baseDate;
        const t1Start = subtractDays(baseDate, 13);

        // Menghitung batas Tier 2 (15 sampai 30 hari mundur)
        const t2End = subtractDays(baseDate, 15);
        const t2Start = subtractDays(baseDate, 30);

        // Menghitung batas Tier 3 (31 sampai 60 hari mundur)
        const t3End = subtractDays(baseDate, 31);
        const t3Start = subtractDays(baseDate, 60);

        // Menampilkan hasilnya ke HTML
        rangeTier1.innerText = `${formatDate(t1Start)} s/d ${formatDate(t1End)}`;
        rangeTier2.innerText = `${formatDate(t2Start)} s/d ${formatDate(t2End)}`;
        rangeTier3.innerText = `${formatDate(t3Start)} s/d ${formatDate(t3End)}`;
    }

    // Event listener: hitung ulang otomatis setiap kali tanggal diubah
    inputTanggalPenarikan.addEventListener('input', hitungRentangTier);
    
    // Jalankan perhitungan pertama kali saat halaman dimuat
    hitungRentangTier();
</script>

</body>
</html>