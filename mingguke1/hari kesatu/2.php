<?php 
$nilai = 74;

// Memeriksa apakah nilai lebih besar atau sama dengan 75
if ($nilai >= 75) {
    // Jika ya, cetak pesan dengan warna hijau
    echo "Nilai " . $nilai . "<span style='color: green;'> Nilai Anda kompeten</span>";
} else {
    // Jika tidak, cetak pesan dengan warna merah
    echo "Nilai " . $nilai . "<span style='color: red;'> Nilai Anda belum kompeten</span>";
}
?>
