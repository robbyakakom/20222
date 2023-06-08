<?php
// function setNilai ()
// {
//     global $nilai ;
//     $nilai = 200 ;
// }

// $nilai = 100 ;
// setNilai() ;
// echo $nilai ;

function data(&$angka){
    $angka = $angka + 123 ;
}

$angka = 1000 ;
data($angka) ;
echo $angka ;
?>