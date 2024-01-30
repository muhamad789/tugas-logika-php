<!-- dani ingin membangun rumah disuatu komplek perumahan dengan panjang tanah 13 meter dan lebar tanah 9 meter. tetapi sebelum membangun rumah, dani harus 
memberikan laporan terlebih dahulu tipe rumah yang ingin dia buat kepada kontraktor bangunan. dengan luas tanah yang dia punya, masuk ke kategori manakah 
rumah dani nantinya.
- tipe 36 : <90 m2
- tipe 45 : 90 - 96 m2 
- tipe 54 : 96 - 120 m2 
- tipe 70 : >150 m2  -->

<?php
// Luas tanah Dani
$panjangTanah = 13;
$lebarTanah = 9;

// Menghitung luas tanah
$luasTanah = $panjangTanah * $lebarTanah;

// Menentukan tipe rumah berdasarkan luas tanah
if ($luasTanah < 90) {
    $tipeRumah = "Tipe 36";
} elseif ($luasTanah >= 90 && $luasTanah <= 96) {
    $tipeRumah = "Tipe 45";
} elseif ($luasTanah > 96 && $luasTanah <= 120) {
    $tipeRumah = "Tipe 54";
} elseif ($luasTanah > 120) {
    $tipeRumah = "Tipe 70";
} else {
    $tipeRumah = "Tidak dapat menentukan tipe rumah";
}

// Menampilkan hasil
echo "Luas tanah: {$luasTanah} m2<br>";
echo "Tipe rumah yang dapat dibangun: {$tipeRumah}";

?>