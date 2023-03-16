<?php
    //menangkap data dari form
    $bil1 = $_POST['bil1'] ;
    $bil2 = $_POST['bil2'] ;
    $hasil = $bil1 + $bil2 ;

    //menampilkan hasil
    echo "Bilangan 1 = " . $bil1 . "<br>" ;
    echo "Bilangan 2 = " . $bil2 . "<br>" ;
    echo "Hasil Penjumlahan = " . $hasil . "<br>" ;
?>