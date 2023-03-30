<?php
    $ipk = 3.2 ;
    $lamaStudi = 4 ;
    $predikat = " - ";

    if ($lamaStudi <= 4) {

        if ($ipk >= 3.5) {
            $predikat = "Cumlaude";
        } elseif  ($ipk > 3) {
            $predikat = "Sangat Memuaskan";
        }elseif ($ipk == 3){
            $predikat = "Memuaskan";
        }

    } elseif ($lamaStudi < 6){
        if ($ipk >= 3) {
            $predikat ="Memuaskan" ;
        }
    }

    echo "IPK : ".$ipk;
    echo "<br/>Lama Studi : ".$lamaStudi ;
    echo "<br/>Predikat  : ".$predikat  ;
?>
