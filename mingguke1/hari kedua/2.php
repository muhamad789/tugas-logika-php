<?php

// Nilai mata pelajaran
$nilaiMatematika = 87;
$nilaiInggris = 85;
$nilaiIndonesia = 87;

// Menghitung rata-rata nilai
$rataRata = ($nilaiMatematika + $nilaiInggris + $nilaiIndonesia) / 3.0;

// Syarat minimum
$nilaiMinMatematika = 87;
$nilaiMinInggris = 85;
$nilaiMinIndonesia = 87;
$rataRataMin = 85;

// Memeriksa syarat
if ($nilaiMatematika >= $nilaiMinMatematika && $nilaiInggris >= $nilaiMinInggris
    && $nilaiIndonesia >= $nilaiMinIndonesia && $rataRata >= $rataRataMin) {
    echo "Selamat, peserta diterima!";
} else {
    echo "Maaf, peserta tidak memenuhi syarat untuk diterima. Nilai Anda terlalu rendah.";
}

?>
