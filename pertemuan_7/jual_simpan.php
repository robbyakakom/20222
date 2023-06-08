<?php
include("sesi.php") ;
include("menu.php") ;
include('config_db.php') ;

$tgl = $_POST['tgl'] ;
$customer = $_POST['customer'] ;
$kode_brg = $_POST['kode_brg'] ;
$jumlah = $_POST['jumlah'] ;

mysqli_autocommit($konek,FALSE);

for($i=0;$i<2;$i++){
    // simpan data ke tabel jual
    $sql_simpan = "insert into jual (tgl_jual,customer,kode_brg,jumlah_jual) values ('".$tgl."','".$customer."','".$kode_brg[$i]."','".$jumlah[$i]."') " ;
    $query_simpan = mysqli_query($konek,$sql_simpan) ;

    // baca tabel barang ambil stok
    $sql_stok = "select stok from barang where kode_brg='".$kode_brg[$i]."'" ;
    $query_stok = mysqli_query($konek,$sql_stok) ;
    $row_stok = mysqli_fetch_assoc($query_stok) ;
    if($row_stok['stok']-$jumlah[$i] < 0){
        echo "Stok barang habis";
        exit() ;
    } 

    //update data stok di tabel barang
    $sql_update = "update barang set stok=stok-".$jumlah[$i]." where kode_brg='".$kode_brg[$i]."'" ;
    $query_update = mysqli_query($konek,$sql_update) ;

}

if (!mysqli_commit($konek)) {
    echo "Commit transaction failed";
    exit();
}else{
    echo "Simpan data jual berhasil" ;
}


  

?>