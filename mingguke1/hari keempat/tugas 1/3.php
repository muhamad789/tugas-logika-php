<!-- menu di rumah makan beni
- nasi goreng = 15000
- ayam bakar = 20000
- nasi kebuli = 25000
- aneka jus = 8000
- es teh manis = 3000
- es jeruk = 5000
rumah makan beni mengadakan program jumat berkah dengan memberikan diskon sebesar 5% di hari jumat dan 2% di hari senin. hitunglah haraga ynag harus di bayar
jika dani ingin memberi 2 nasi kebuli, 1 ayam bakar, 2 nasi goreng (gunakan hari secara otomatis dari hari ini) -->

<?php
// Harga masing-masing menu
$nasi_goreng_harga = 15000;
$ayam_bakar_harga = 20000;
$nasi_kebuli_harga = 25000;
$aneka_jus_harga = 8000;
$es_teh_manis_harga = 3000;
$es_jeruk_harga = 5000;

//Diskon
$hari_ini = date('l'); // Mendapatkan hari ini (contoh: Monday, Tuesday, dst.)
$diskon_jumat = 0.05;
$diskon_senin = 0.02;

//Pesanan Dani
$nasi_kebuli_qty = 2;
$ayam_bakar_qty = 1;
$nasi_goreng_qty = 2;

//Menghitung total harga
$total_harga = 0;

//Menghitung harga nasi kebuli
$total_harga += $nasi_kebuli_harga * $nasi_kebuli_qty;

//Menghitung harga ayam bakar
$total_harga += $ayam_bakar_harga * $ayam_bakar_qty;

//Menghitung harga nasi goreng
$total_harga += $nasi_goreng_harga * $nasi_goreng_qty;

//Mengaplikasikan diskon berdasarkan hari
if ($hari_ini == 'Friday') {
    $total_harga -= $total_harga * $diskon_jumat;
} elseif  ($hari_ini == 'Monday') {
    $total_harga -= $total_harga * $diskon_senin;
}
     
//Menampilkan total harga yang harus dibayar
echo "Total harga yang harus dibayar oleh Dani: Rp " . number_format($total_harga, 2);
?>