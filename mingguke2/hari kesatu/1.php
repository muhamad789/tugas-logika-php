<?php
//  buatlah sebuah function yang akan menampilkan hari tangggal dengan format (senin, 22 januari 2024) hari mengunakan bahasa indonesia, argument diambil dari variable berikut ($date)
// $date = date('D, d M Y');
// echo $date;
// echo " VS ";
// formatIND($date); 

function tampilkanTanggalIndonesia($date) {
    // Array nama hari dalam Bahasa Indonesia
    $namaHari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    
    // Ubah format tanggal
    $tanggal = date_create_from_format('D, d M Y', $date);
    
    // Ambil nama hari dari array
    $hari = $namaHari[date_format($tanggal, 'w')];
    
    // Menggunakan 'F' untuk nama bulan dengan huruf pertama besar
    $tanggalIndonesia = date_format($tanggal, 'd F Y'); 
    
    // Tampilkan hasil
    echo $hari . ', ' . $tanggalIndonesia;
}

// Contoh penggunaan
$date = date('l, d F Y');
echo $date . " vs ";
tampilkanTanggalIndonesia($date);

?>