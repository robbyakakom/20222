<?php
include("sesi.php") ;
include("menu.php") ;

$kode_brg = $_GET["kode_brg"] ;

include("config_db.php") ;

$sql_tampil_update = "select * from barang where kode_brg='".$kode_brg."'" ;

$query_tampil_update = mysqli_query($konek,$sql_tampil_update);

$row_tampil_data = mysqli_fetch_assoc($query_tampil_update) ;

?>

<form action="update.php" method="post" enctype=""multipart/form-data">
    Insert Data ke Tabel Barang<br>
    Kode Barang <br>
    <input type="text" name="kode_brg" id="kode_brg" value="<?php echo $row_tampil_data["kode_brg"] ?>" readonly> <br>
    Nama Barang <br>
    <input type="text" name="nama_brg" id="nama_brg" value="<?php echo $row_tampil_data["nama_brg"] ?>"> <br>
    Harga <br>
    <input type="text" name="harga" id="harga" value="<?php echo $row_tampil_data["harga"] ?>"> <br>
    Stok <br>
    <input type="text" name="stok" id="stok" value="<?php echo $row_tampil_data["stok"] ?>"> <br> 
    Gambar Barang <br>
    <img src="gambar/<?php echo $row_tampil_data["fot"] ?>" > <br> 
    <input type="file" name="foto" id="foto">
    <br>
    <button type="submit">Update</button>
</form>