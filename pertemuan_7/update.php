<?php

include("sesi.php") ;
include("menu.php") ;

$kode_brg = $_POST["kode_brg"] ;
$nama_brg = $_POST["nama_brg"] ;
$stok = $_POST["stok"] ;
$harga = $_POST["harga"] ;
$file = $_FILES["foto"] ;

//membuat koneksi
include("config_db.php") ;

//membuat string sql
$sql = "update barang set nama_brg='".$nama_brg."', stok='".$stok."', harga='".$harga."', foto='".$file['name']."' where kode_brg='".$kode_brg."'" ;

//jalankan fungsi query
$query = mysqli_query($konek,$sql) ;
if($query){
    echo "Data berhasil di simpan" ;
    move_uploaded_file($file['tmp_name'],"gambar/".$file['name']) ;
}else{
    echo "Data gagal dsimpan" ;
}

//tutup koneksi
mysqli_close($konek) ;

?>