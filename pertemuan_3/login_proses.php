<?php
if(isset($_POST['user']) and isset($_POST['password'])){
    $user = $_POST['user'] ;
    $password = $_POST['password'];
}else{
    echo "Silahkan isi form login dulu...";
    exit();
}
     


//validasi input di sisi server
if($user == ""){
    echo "Inputan user belum diisi" . "<br>" ;
    exit() ;
}

if($password == ""){
    echo "Inputan password belum diisi" . "<br>" ;
    exit() ;
}
?>
SELAMAT DATANG .....