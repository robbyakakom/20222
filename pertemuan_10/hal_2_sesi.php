<?php
session_start() ;

echo $_SESSION['nama'] ;

$_SESSION['nama'] = "Bani" ;

echo "<br>" ;

echo $_SESSION['nama'] ;
?>