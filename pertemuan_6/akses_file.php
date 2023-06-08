<?php
$file = fopen("data.txt","a+") ;
if($file)
{
    echo "sukses akses file" ;
}
fputs($file,"\n\nini data yang di isi berikutnya.") ;
fclose($file) ;
?>