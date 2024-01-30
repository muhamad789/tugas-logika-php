<?php

// Array untuk menyimpan informasi tentang barang yang dibeli
$barang = [
    ['nama_barang' => 'Pasta Gigi', 'harga_barang' => 18000, 'jumlah_beli' => 1],
    ['nama_barang' => 'Sabun Mandi', 'harga_barang' => 5000, 'jumlah_beli' => 3],
    ['nama_barang' => 'Aloe Vera Sheet Mask', 'harga_barang' => 15000, 'jumlah_beli' => 5],
];

// Variabel untuk menyimpan total pembayaran
$total_pembayaran = 0;

// Melakukan iterasi pada setiap item dalam array $barang
foreach ($barang as $item) {
    // Menghitung total biaya untuk setiap item
    $total_barang = $item['harga_barang'] * $item['jumlah_beli'];
    // Menambahkan total biaya ke total pembayaran keseluruhan
    $total_pembayaran += $total_barang;

    // Menampilkan informasi tentang barang yang dibeli
    echo "Andi membeli " . $item['jumlah_beli'] . " " . $item['nama_barang'] . " seharga Rp " . $total_barang . "\n";
    echo "<br>";
}

// Menampilkan total pembayaran yang harus dibayar oleh Andi
echo "\nTotal uang yang perlu dibayar oleh Andi adalah Rp " . $total_pembayaran . "\n";

?>
