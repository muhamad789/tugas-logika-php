<?php 

// Array berisi nilai-nilai bilangan
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];
// Array untuk menyimpan nilai-nilai kelompok pertama
$kelompok_pertama = []; 
// Array untuk menyimpan nilai-nilai kelompok kedua
$kelompok_kedua = [];

// Melakukan iterasi pada setiap nilai dalam array $bilangan
foreach ($bilangan as $nilai) {
    // Memeriksa apakah nilai lebih besar atau sama dengan 75
    if ($nilai >= 75) {
        // Jika iya, tambahkan nilai ke kelompok pertama
        array_push($kelompok_pertama, $nilai);
    } else {
        // Jika tidak, tambahkan nilai ke kelompok kedua
        array_push($kelompok_kedua, $nilai);
    }
}

// Menampilkan nilai-nilai kelompok pertama
echo "Kelompok Pertama: ";
foreach ($kelompok_pertama as $nilai) {
    echo "$nilai ";
}
echo "<br>";

// Menampilkan nilai-nilai kelompok kedua
echo "\nKelompok Kedua: ";
foreach ($kelompok_kedua as $nilai) {
    echo "$nilai ";
}

?>
