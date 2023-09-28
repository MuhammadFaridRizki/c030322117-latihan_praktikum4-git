<?php
$kendaraan 	= ['Mobil ', ' Motor', ' Sepeda '];
$trimmed = array_map('trim', $kendaraan);
echo '<pre>'; print_r($kendaraan); print_r($trimmed);
/* Hasil:
Array
(
    [0] => Mobil 
    [1] =>  Motor
    [2] =>  Sepeda 
)
Array
(
    [0] => Mobil
    [1] => Motor
    [2] => Sepeda
)*/