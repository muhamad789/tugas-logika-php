<?php
// Presentase kehadiran awal (asumsi 100%)
$kehadiran_awal = 100;

// Kondisi izin (berkurang 3%)
$izin = false; // Ganti menjadi true jika ingin menguji dengan kondisi izin
$kehadiran_izin = 0;

// Kondisi alfa (berkurang 5%)
$alfa = false; // Ganti menjadi true jika ingin menguji dengan kondisi alfa
$kehadiran_alfa = 0;

// Kondisi hadir (tidak berkurang)
$hadir = true;

// Menggunakan elseif untuk menentukan presentase kehadiran berdasarkan kondisi
if ($izin) {
    $kehadiran_izin = $kehadiran_awal - 3;
} elseif ($alfa) {
    $kehadiran_alfa = $kehadiran_awal - 5;
} elseif ($hadir) {
    // Jika hadir, presentase kehadiran tidak berkurang
} else {
    // Kondisi default jika tidak memenuhi semua kondisi di atas
    echo "Kondisi tidak valid.";
}

// Menampilkan hasil
echo "<br>Presentase kehadiran awal: $kehadiran_awal%\n";
echo "<br>Presentase kehadiran izin: $kehadiran_izin%\n";
echo "<br>Presentase kehadiran alfa: $kehadiran_alfa%\n";
echo "<br>Presentase kehadiran hadir: $kehadiran_awal%\n";
?>
