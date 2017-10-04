<?php

fibonacci(50);

function fibonacci($maksimal = null) {
   echo "Angka maksimal $maksimal<br>";

    // buat dua angka awal
    $awal = 0;  
    $akhir = 1;
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
}