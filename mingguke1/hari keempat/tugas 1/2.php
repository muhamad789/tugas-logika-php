<!-- setiap orang memiliki IMT dan kategori IMT nya masing masing berikut kategori IMT :
  -kurang dari 18,5 : berat badan kurang
  -dari 18.5 sampai kurang dari 22.9 : normal
  -dari 22.9 samapi kurang dari 24.9 : berat badan lebih
  -lebih dari dan sama dengan 25 : obesitas
jika beni memiliki berat badan 44kg dengan tinggi badan 148cm,termasuk kedalam kategori apakah beni -->

<?php
// Berat badan dan tinggi badan Beni
$beratBadanBeni = 44;
$tinggiBadanBeni = 148;

// Konversi tinggi badan ke meter
$tinggiBadanMeter = $tinggiBadanBeni / 100;

// Hitung IMT
$imtBeni = $beratBadanBeni / ($tinggiBadanMeter * $tinggiBadanMeter);

// Tentukan kategori IMT
if ($imtBeni < 18.5) {
    $kategoriBeni = "Berat badan kurang";
} elseif ($imtBeni >= 18.5 && $imtBeni < 22.9) {
    $kategoriBeni = "Normal";
} elseif ($imtBeni >= 22.9 && $imtBeni < 24.9) {
    $kategoriBeni = "Berat badan lebih";
} else {
    $kategoriBeni = "Obesitas";
}

// Tampilkan hasil
echo "Berat badan Beni: {$beratBadanBeni} kg<br>";
echo "Tinggi badan Beni: {$tinggiBadanBeni} cm<br>";
echo "IMT Beni: {$imtBeni}<br>";
echo "Kategori IMT Beni: {$kategoriBeni}";
?>
