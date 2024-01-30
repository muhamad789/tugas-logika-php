<?php

$totalHarian = 100000; // Jumlah pembelian normal
$totalPembelian = 130000; // Total pembelian hari ini
$hariPembelian = "Selasa"; // Hari pembelian
$diskon = 0; // Inisialisasi diskon

echo "<br>";

// Cek apakah hari pembelian adalah Selasa
if ($hariPembelian == "selasa") {
    // Diskon 5% untuk pembelian di hari Selasa
    $diskon = 0.05;
}

// Cek apakah total pembelian di atas 100.000
if ($totalPembelian > 100000) {
    // Diskon tambahan 7% untuk total pembelian di atas 100.000
    $diskon += 0.07;
}

// Hitung jumlah diskon dalam rupiah
$jumlahDiskon = ($diskon / 100) * $totalPembelian;

// Hitung jumlah uang yang harus dibayar setelah diskon
$totalYangDibayar = $totalPembelian - $jumlahDiskon;

// Tampilkan hasil
echo "Total Pembelian: Rp " . number_format($totalPembelian, 2, ',', '.');
echo "<br>";
echo "Diskon: 5%" ;
echo "<br>";
echo "Jumlah Diskon: Rp " . number_format($jumlahDiskon, 2, ',', '.');
echo "<br>";
echo "Total yang harus dibayar: Rp " . number_format($totalYangDibayar, 2, ',', '.');

?>