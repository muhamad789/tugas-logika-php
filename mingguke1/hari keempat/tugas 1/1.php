 <!-- waktu tidur yang baik untuk anak usia 6-12 adalah 10 jam, untuk usia 12-18 adalah 8-9 jam, untuk usia 18-40 adalah 7-8 jam, apabila seseorang berusia 17
tahun berapa waktu tidur yang baik? -->

<?php

// Usia seseorang
$usia = 17;

// Tentukan rentang waktu tidur berdasarkan usia
if ($usia >= 6 && $usia < 12) {
    $waktuTidurBaik = 10;
} elseif ($usia >= 12 && $usia < 18) {
    $waktuTidurBaik = "8-9";
} elseif ($usia >= 18 && $usia < 40) {
    $waktuTidurBaik = "7-8";
} else {
    $waktuTidurBaik = "Usia di luar rentang yang ditentukan";

    // Menentukan waktu tidur yang tidak baik untuk usia di luar rentang
    if ($usia >= 6 && $usia < 12) {
        $waktuTidurTidakBaik = 10;
    } elseif ($usia >= 12 && $usia < 18) {
        $waktuTidurTidakBaik = "8-9";
    } elseif ($usia >= 18 && $usia < 40) {
        $waktuTidurTidakBaik = "7-8";
    } else {
        $waktuTidurTidakBaik = "Usia di luar rentang yang ditentukan";
    }
}

// Tampilkan hasil
echo "Usia: {$usia} tahun<br>";
// echo "Waktu tidur yang baik: {$waktuTidurBaik} jam";

// Jika usia di luar rentang, tampilkan juga waktu tidur yang tidak baik
if ($waktuTidurBaik == "Usia di luar rentang yang ditentukan") {
    echo "Waktu tidur yang tidak baik: {$waktuTidurTidakBaik} jam";
} else {
    echo "Waktu tidur yang baik : {$waktuTidurBaik} jam";
}

?>
