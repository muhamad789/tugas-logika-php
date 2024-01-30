<?php

// Terdapat dua variabel yang menyimpan data angka
$angka1 = 10;
$angka2 = 3;

// Hitung hasil bagi antara angka1 dan angka2
$hasilBagi = $angka1 / $angka2;

// Cek apakah hasilnya desimal
if (is_float($hasilBagi)) {
    // Jika desimal, bulatkan hasil
    $hasilBulat = round($hasilBagi);
    echo "$angka1 : $angka2 = $hasilBulat";
} else {
    // Jika bukan desimal, tampilkan hasil tanpa pembulatan
    echo "$angka1 : $angka2 = $hasilBagi";
}

?>