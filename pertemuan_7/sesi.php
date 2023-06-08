<?php

session_start() ;

if(isset($_COOKIE['user']) && $_COOKIE['user'] != 'budi'){
    echo "Anda dilarang akses......, silahkan " ;
    echo "<a href='login_form.php'>LOGIN</a>";
    exit() ;
}elseif(!isset($_SESSION['user']) || $_SESSION['user'] != 'budi'){
    echo "Anda dilarang akses..., silahkan " ;
    echo "<a href='login_form.php'>LOGIN</a>";
    exit() ;
}
echo "<h1>Pengguna : ".$_SESSION['user']."</h1>" ;
?>
