<?php

// Diketahui
$jamNormal = 8;
$kompensasiSatu = 50000;
$kompensasiDua = 25000;

// Ditanyakan
$jumlahMulai = 8;
$jumlahSelesai = 22;

// Jawab
// 14
$jumlahJam = $jumlahSelesai - $jumlahMulai;

if ($jumlahJam > $jamNormal) {
    // 6
    $jumlahJamKompensasi = $jumlahJam - $jamNormal;

    if ($jumlahJamKompensasi == 1) {
        $kompensasi = $kompensasiSatu;
    } else {
        $kompensasi = (($jumlahJamKompensasi - 1) * $kompensasiDua) + $kompensasiSatu;
    }

    echo "Jumlah kompensasi: " . $kompensasi;
} else {
    echo "Tidak mendapatkan kompensasi";
}

?>
