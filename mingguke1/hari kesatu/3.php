<?php
$year = 2024;

// Memeriksa apakah tahun adalah tahun kabisat
if ($year % 4 == 0) {
    // Jika tahun kabisat, cetak pesan dengan tanggal 29
    echo "Tahun $year, bulan Februari sampai dengan tanggal 29";
} else {
    // Jika bukan tahun kabisat, cetak pesan dengan tanggal 28
    echo "Tahun $year, bulan Februari sampai dengan tanggal 28";
}
?>
