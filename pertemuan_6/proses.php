<?php
$nama_file = $_FILES["file_upload"]["name"] ;
$tipe_file = $_FILES["file_upload"]["type"] ;
$ukuran_file = $_FILES["file_upload"]["size"] ;
$temp_file = $_FILES["file_upload"]["tmp_name"] ;

echo "Meta Data <br>" ;

echo "Nama File : " . $nama_file . "<br>" ;
echo "Tipe File : " . $tipe_file . "<br>" ;
echo "Ukuran File : " . $ukuran_file . " byte <br>" ;
echo "Temporary File : " . $temp_file . " <br>" ;


$nama_simpan = str_replace(" ","_",$nama_file) ;
move_uploaded_file($temp_file, "upload/".$nama_simpan) ;

?>
