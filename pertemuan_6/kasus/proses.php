<?php
$kode = $_POST["kode"] ;
$nama_barang = $_POST["nama_barang"] ;
$gambar_barang = $_FILES["gambar_barang"] ;

$ektensi = substr($gambar_barang["name"],-4);

$ukuran_file = $gambar_barang["size"] ;

//validasi ekstensi harus gambar .jpg atau .png
if($ektensi != ".jpg" || $ektensi != ".png"){
    echo "salah file...." ;
    exit() ;
}

//validasi ukuran file maksimal 2 MB
if($ukuran_file <= 2097000) {
    echo "ukuran file lebih dar 2MB...." ;
    exit() ;
}

$nama_barang_simpan = "gambar/".$kode.$ektensi ;

echo "<h1>Data Barang</h1>" ;
echo "Kode : " . $kode . "<br>" ;
echo "Nama Barang : " . $kode . "<br>" ;
echo "Gambar Barang : <br>" ;

move_uploaded_file($gambar_barang["tmp_name"],$nama_barang_simpan) ;

echo "<img src='$nama_barang_simpan' height='100'>" ;

//menyimpan data dalam file teks

$file = fopen("data_barang.csv","a+") ;
fputs($file, $kode.",".$nama_barang.",".$nama_barang_simpan."\n");
fclose($file) ;

?>