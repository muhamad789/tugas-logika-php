<?php
$total_pembelian = 130000;
$hari = "selasa";

$diskonHari = 0;
$diskonJumlah = 0;

// Memeriksa apakah hari ini Selasa
if ($hari == "selasa") {
    $diskonHari = 0.05; // Diskon 5% jika pembelian pada hari Selasa
    if ($total_pembelian > 100000) {
        $diskonJumlah = 0.07;  // Diskon 7% untuk pembelian di atas 100.000
    }
}

// Menghitung total yang harus dibayarkan
$total_bayar = $total_pembelian - ($total_pembelian * $diskonHari) - ($total_pembelian * $diskonJumlah);

echo "Total sebelum mendapatkan diskon: " . number_format($total_pembelian, 0, ".", ".") . "<br>";
echo "Total yang harus dibayar: " . number_format($total_bayar, 2, ".", ".");
?>
