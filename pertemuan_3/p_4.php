<?php
//menyeleksi nama kota
$jk = "C" ;
switch($jk) {
    case  "A" :
        $ket = "Ambon" ;
        break ;
    case  "B" :
        $ket = "Bandung" ;
        break;
    case  "C" :
        $ket = "Cimahi" ;
        break;
    case  "D" :
        $ket = "Denpasar" ;
        break;
        ;
    default :
        $ket ="tidak ada pilihan" ;
}
echo $ket ;
?>