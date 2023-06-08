<?php

include("sesi.php") ;
include("menu.php") ;

// membuat koneksi
include("config_db.php") ;

//sql string
$sql = "delete from barang where kode_brg='".$_GET['kode_brg']."'" ; 

//jalankan fungsi query
$query = mysqli_query($konek,$sql) ;
if($query)
    echo "Data berhasil dihapus";
else
    echo "Data gagal dihapus" ;

//tutup koneksi
mysqli_close($konek) ;

?>