<?php
include("sesi.php") ;
include("menu.php") ;
?>

<form action="create.php" method="post" enctype="multipart/form-data">
    Insert Data ke Tabel Barang<br>
    Kode Barang <br>
    <input type="text" name="kode_brg" id="kode_brg"> <br>
    Nama Barang <br>
    <input type="text" name="nama_brg" id="nama_brg"> <br>
    Harga <br>
    <input type="text" name="harga" id="harga"> <br>
    Stok <br>
    <input type="text" name="stok" id="stok"> <br> 
    Gambar Barang <br>
    <input type="file" name="foto" id="foto"> <br>
    <br>
    <button type="submit">Create</button>
</form>