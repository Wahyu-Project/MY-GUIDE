// Mengambil elemen input
const inputHari = document.getElementById('inputHari');
const inputJam = document.getElementById('inputJam');
const inputDownMenit = document.getElementById('inputDownMenit');

// Mengambil elemen output
const hasilTotalJam = document.getElementById('hasilTotalJam');
const hasilDownJam = document.getElementById('hasilDownJam');
const hasilSisaJam = document.getElementById('hasilSisaJam');
const hasilTotalSla = document.getElementById('hasilTotalSla');

function hitungSLA() {
    // Ambil nilai dari input, default 0 jika kosong
    let hari = parseFloat(inputHari.value) || 0;
    let jam = parseFloat(inputJam.value) || 0;
    let downMenit = parseFloat(inputDownMenit.value) || 0;

    // Kalkulasi
    let totalJam = hari * jam;
    let downPerJam = downMenit / 60;
    let sisaJam = totalJam - downPerJam;
    
    let totalSlaPersen = 0;
    if (totalJam > 0) {
        totalSlaPersen = (sisaJam / totalJam) * 100;
    }

    // Render ke HTML
    hasilTotalJam.innerText = totalJam;
    hasilDownJam.innerText = Number.isInteger(downPerJam) ? downPerJam : downPerJam.toFixed(2);
    hasilSisaJam.innerText = Number.isInteger(sisaJam) ? sisaJam : sisaJam.toFixed(2);
    
    // Format SLA dengan 2 desimal
    hasilTotalSla.innerText = totalSlaPersen.toFixed(2) + "%";
}

// Event Listener agar berjalan otomatis (Real-time)
inputHari.addEventListener('input', hitungSLA);
inputJam.addEventListener('input', hitungSLA);
inputDownMenit.addEventListener('input', hitungSLA);

// Inisialisasi perhitungan pertama
hitungSLA();