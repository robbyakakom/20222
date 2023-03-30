<?php
//mendefiniskan array
// array numeric
$nama = array("Budi","Amir","Mira","Rani","Dika") ;

// var_dump($nama) ;

echo "asalanya " . $nama[0] ;

echo "<br>" ;

$nama[0] = "Banu" ;

echo "skrng " . $nama[0] ;

echo "<br>" ;

$nama[5] = "Juki" ;

print_r($nama) ;

exit() ;

echo "<hr>" ;

// array assosiatif
// $array_assosiatif = array(key=>value, ... , key=>value) ;
$namaMhs = array("0877"=>"Amir","0878"=>"Budi","0879"=>"Reni","0970"=>"Carlie") ;

var_dump($namaMhs) ;

?>