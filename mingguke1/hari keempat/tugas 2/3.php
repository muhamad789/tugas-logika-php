<?php
// Mendapatkan nilai ujian secara otomatis (gunakan nilai sembarang untuk keperluan contoh)
$nilai_ujian = 100;

// Menentukan predikat menggunakan ternary operator
$predikat = ($nilai_ujian > 90) ? "A" : (($nilai_ujian > 75) ? "B" : "C");

// Menampilkan hasil
echo "Nilai ujian: $nilai_ujian\n";
echo "Predikat: $predikat\n";
?>
