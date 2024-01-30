<?php 
// buatlah sebuah fungsi yang akan membandinkan dua buah string nama. lalu, menampilkan jumlah karakter dari dua nama tersebut, dam menampilkan nama yang memiliki  jumlah karakter lebih banyak serta selisihnya

function perbandinganNama ($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);
//menyimpan hasil hitungan dari strlen

    echo "jumlah nama pertama: $panjangNama1 <br>";
    echo "jumlah nama kedua: $panjangNama2 <br>";
// lebih besar
    if ($panjangNama1 > $panjangNama2) {
        //  jika panjang $nama1 lebih besar 
        $selisih = $panjangNama1 - $panjangNama2;
        echo "$nama1 memiliki jumlah lebih banyak dari pada $nama2 sebanyak $selisih karakter";
    } elseif ($panjangNama1 < $panjangNama2) {
        //lebih kecil
        //  jika panjang $nama1 lebih kecil 
        $selisih = $panjangNama2 - $panjangNama1; // Koreksi perhitungan
        echo "$nama2 memiliki jumlah lebih banyak dari pada $nama1 sebanyak $selisih karakter";
    } else {
        echo "kedua nama memiliki jumlah nama yang sama";
    }
}
perbandinganNama("Fazri", "Ramdani");

?>