<?php

include("sesi.php") ;
include("menu.php") ;


$kode = htmlspecialchars($_POST['kode_brg']) ;
$nama_brg = htmlspecialchars($_POST['nama_brg']) ;
$harga = htmlspecialchars($_POST['harga']) ;
$stok = htmlspecialchars($_POST['stok']) ;
$file = $_FILES["foto"] ;

// 1 membuat koneksi ke database
include("config_db.php") ;

// 2 menyiapkan perintah sql
$sql = "insert into barang (kode_brg, nama_brg, harga, stok, foto) values ('".$kode."','".$nama_brg."','".$harga."','".$stok."', '".$file['name']."')" ;

// 3 menjalankan sql query
$hasil = mysqli_query($konek,$sql) ;

if($hasil){
    echo "Data berhasil di simpan" ;
    move_uploaded_file($file['tmp_name'],"gambar/".$file['name']) ;
}else{
    echo "Data gagal dsimpan" ;
}

// 4 tutup koneksi ke database
mysqli_close($konek) ;



?>