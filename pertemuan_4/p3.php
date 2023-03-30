<?php
//membuat array dengan fungsi "array()"
//$nama = array("Budi","Amir","Mira","Rani","Dika") ;

//membuat array dengan penanda [ ... ]
$nama = ["099"=>"Budi","100"=>"Amir","101"=>"Mira","102"=>"Rani","202"=>"Dika"] ;

echo "Daftar Nama <br>" ;
// foreach($varArray as $key=>$value){
//        echo $key : $value ;
// }

foreach($nama as $nim => $namaMhs){
    echo "NIM : " . $nim . " | Nama : " . $namaMhs . "<br>";
}

?>
