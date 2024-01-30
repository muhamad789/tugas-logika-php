<?php
// buatlah sebuah fungsiyang akan menghasilkan sebuah array dari banyak data yang di terima. data yang di kirim berbentuk string nama-nama jurusan. jika nama jurusan  ada yang di panggil duplikat, maka yang di masukan ke array hanya slah satunya saja (capslock).
//contoh pengilan argumennya : namafunc("PPLG", "HTL", "KLN", "PMN", "pplg"). maka akan mengahasilkan array ["PPLG", "HTL", "KLN", "PMN"]

//menerima banyak argumen berupa nama-nama jurusan
function createArray(...$jurusan) {
    // Mengubah semua nama jurusan menjadi huruf kapital 
    $result = array_map('strtoupper', $jurusan);
    
    // Menghilangkan duplikat dari array
    $result = array_unique($result);
    
    // Mendapatkan kembali array dengan indeks numerik yang disusun ulang
    return array_values($result);
}

// Memanggil fungsi createArray dengan beberapa contoh nama jurusan
print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));

?>