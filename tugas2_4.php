<?php
$mobil 	= ['merk' => 'Bugatti', 'type' => 'La voiture noire', 'year' => 2023];
$key 	= array_shift($mobil);
echo '<pre>'; print_r($mobil);
/* Hasil:
Array
(
    [type] => La voiture noire
    [year] => 2023
) */