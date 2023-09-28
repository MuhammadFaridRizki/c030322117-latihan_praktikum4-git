<?php 
$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus']; 
$mobil = ['Toyota', 'Vios', 2016]; 
$merge = array_merge($kendaraan, $mobil);
echo '<pre>'; print_r($merge);
/*
Hasil:
Array
(
    [0] => Mobil
    [1] => Motor
    [2] => Sepeda
    [3] => Truk
    [4] => Bus
    [5] => Toyota
    [6] => Vios
    [7] => 2016
)
*/

$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus']; 
$mobil = ['Toyota', 'Vios', 2016]; 
$merge = $kendaraan + $mobil;
echo '<pre>'; print_r($merge);

/*
Hasil:
Array
(
    [0] => Mobil
    [1] => Motor
    [2] => Sepeda
    [3] => Truk
    [4] => Bus
)
*/