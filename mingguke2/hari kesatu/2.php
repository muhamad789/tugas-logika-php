<?php
// buatlah sebuah fungsi yang akan mengubah sebuah number menjadi format "K" untuk ribuan dam "M" jutaan. misal 9500 menjadi 9,5K atau 1.700.000 menjadi 1,7M
// formatNumber(9500);
// echo "<br>";
// formatNumber(1700000);

function formatNumber($number) {
    if ($number < 1000) {
        echo $number;
    } elseif ($number < 1000000) {
        echo number_format($number / 1000, 1) . 'K';
    } else {
        echo number_format($number / 1000000, 1) . 'M';
    }
}

// Contoh penggunaan
formatNumber(9500);
echo "<br>";
formatNumber(1700000);

?>