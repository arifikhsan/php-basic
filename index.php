<?php

/*
    Deret Fibbonaci

    // 1 2 3 5 8 13 21
    // angka selanjutnya didapat dari penjumlahan dua angka sebelumnya
*/

echo 'Angka maksimal 50<br>';

// buat dua angka awal
$awal = 0;  
$akhir = 1;
$maksimal = 50;
echo "$awal $akhir";

for ($i=0; $i <= 10; $i++) { 
    // tambahkan angka awal dengan angka akhir
    $selanjutnya = $awal + $akhir;
    if ($selanjutnya > $maksimal) {
        die();
    } else {
        echo ' ' . $selanjutnya . ' ';
    }
    // nilai angka awal diganti dengan angka akhir
    $awal = $akhir;
    // nilai angka akhir diganti dengan hasil penjumlahan sebelumnya
    $akhir = $selanjutnya;
}


// // buat dua angka awal
// $awal = 0;  
// $akhir = 1;
// echo "$awal $akhir";


// for ($i=0; $i <= 10 ; $i++) { 
//     // tambahkan angka awal dengan angka akhir
//     $selanjutnya = $awal + $akhir;
//     echo ' ' . $selanjutnya . ' ';

//     // nilai angka awal diganti dengan angka akhir
//     $awal = $akhir;
//     // nilai angka akhir diganti dengan hasil penjumlahan sebelumnya
//     $akhir = $selanjutnya;
// }


?>