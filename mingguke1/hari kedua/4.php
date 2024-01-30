<?php

// Nilai variabel
$a = 5;
$b = 10;

// Memeriksa kondisi
if ($a == $b) {
    echo "Kedua variabel sama, maka munculkan angka a: $a";
} else {
    $angkaTerbesar = max($a, $b);
    echo "Kedua variabel tidak sama, munculkan angka terbesar: $angkaTerbesar";
}

?>