<?php

// Mendapatkan tanggal hari ini secara otomatis
$hari_ini = date('N'); // 'N' mengembalikan nilai 1-7, dimana 1 adalah Senin dan 7 adalah Minggu

// Menentukan apakah hari ini ada upacara atau tidak menggunakan ternary operator
$upacara_hari_ini = ($hari_ini == 1) ? "Hari ini upacara." : "Hari ini tidak upacara.";

// Menampilkan hasil
echo $upacara_hari_ini;
?>
