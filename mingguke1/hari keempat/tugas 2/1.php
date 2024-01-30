<?php
// Contoh penggunaan
$waktu1 = "19:00";
$waktu2 = "23:45";
$waktu3 = "08:55";

// Pecah waktu 1
list($jam1, $menit1) = explode(':', $waktu1);
$ampm1 = ($jam1 < 12) ? 'am' : 'pm';
$jam12_1 = ($jam1 > 12) ? $jam1 - 12 : $jam1;
$menit1 = str_pad($menit1, 2, '0', STR_PAD_LEFT);
$formattedWaktu1 = "{$jam12_1}.{$menit1} {$ampm1}";

// Pecah waktu 2
list($jam2, $menit2) = explode(':', $waktu2);
$ampm2 = ($jam2 < 12) ? 'am' : 'pm';
$jam12_2 = ($jam2 > 12) ? $jam2 - 12 : $jam2;
$menit2 = str_pad($menit2, 2, '0', STR_PAD_LEFT);
$formattedWaktu2 = "{$jam12_2}.{$menit2} {$ampm2}";

// Pecah waktu 3
list($jam3, $menit3) = explode(':', $waktu3);
$ampm3 = ($jam3 < 12) ? 'am' : 'pm';
$jam12_3 = ($jam3 > 12) ? $jam3 - 12 : $jam3;
$menit3 = str_pad($menit3, 2, '0', STR_PAD_LEFT);
$formattedWaktu3 = "{$jam12_3}.{$menit3} {$ampm3}";

// Tampilkan hasil
echo "<br> Waktu 1: {$formattedWaktu1}\n";
echo "<br> Waktu 2: {$formattedWaktu2}\n";
echo "<br> Waktu 3: {$formattedWaktu3}\n";

?>