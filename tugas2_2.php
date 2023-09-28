<?php
$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
asort($kendaraan);
echo '<pre>'; print_r($kendaraan);
/* HASIL:
Array
(
    [4] => Bus
    [0] => Mobil
    [1] => Motor
    [2] => Sepeda
    [3] => Truk
)*/