<!-- <?php
// buatlah urutan perkalian 1 x 1 = 1 dampai dengan 3 x 10 = 30 
for ($i=1; $i < 2 ; $i++) {
    for ($x=1; $x < 10; $x++) {
        echo "$x x $i = " . $x * $i . " | ";
    }
    echo "<br>";
}
?> -->



<!-- <?php

$array = array(1, 2, 3, 4, 5, 6);

var_dump($array);
//echo $array;
echo "<br>";
print_r($array);
echo"<br>";
//kalau panggil item arr pake echo, harus ada didalam loop
for ($i=0; $i < count($array); $i++) {
     echo $array[$i];
}
echo "<br>";
foreach ($array as $key => $value) {
echo "index ke-$key = " . $value . "<br>";
}
?> -->




<?php
$array = ["nama" => "Muhamad Fazri Ramdani", "rombel" => "PPLG XI-6", "rayon" => "Cisarua 5"];
echo $array['nama'] ;
echo "<br>";
echo $array['rombel'] ;
echo "<br>";
echo $array['rayon'] ;
echo "<br>";
?>


<!-- <?php

$array = array(
   array(
     "nama" => "Fazri",
     "romebel" => "PPLG",
   ),
   array(
     "nama" => "Ramdani",
     "romebel" => "PPLG",
   )
);

// Menggunakan foreach untuk menampilkan nilai 'nama' dari setiap elemen dalam array
foreach ($array as $key => $value) {
    echo $value['nama'] . "<br>";
}

?> -->