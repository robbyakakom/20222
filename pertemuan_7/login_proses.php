<?php
session_start() ;

$akun = array('user'=>'budi','pass'=>'12345') ;

// $user = $_POST['user'] ;
// $pass = $_POST['pass'] ;

if(isset($_POST['user'])){
    $user = $_POST['user'] ;
}elseif(isset($_COOKIE['user'])){
    $user = $_COOKIE['user'] ;
}else{
    $user = null ;
}

if(isset($_POST['pass'])){
    $pass = $_POST['pass'] ;
}elseif(isset($_COOKIE['pass'])){
    $pass = $_COOKIE['pass'] ;
}else{
    $pass = null ;
}

$valid = false ;
if($user == $akun['user']){
    $valid = true ;
}else{
    $valid = false;
}

if($pass == $akun['pass']){
    $valid = true ;
}else{
    $valid = false;
}

if($valid){
    $_SESSION['user'] = $user ;
    if($_POST['ingat']=="ingat"){
        setcookie('user',$user,time()+604800);
        setcookie('pass',$pass,time()+604800);
    }
    header("Location: read.php") ;
}else{
    echo "USER dan PASSWORD salah..." ;
}
?>