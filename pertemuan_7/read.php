<?php
include("sesi.php") ;
include("menu.php") ;

// 1 membuat koneksi
include("config_db.php") ;

// 2 menyiapkan sql : select
$sql = "select * from barang" ;

// 3 menjalankan sql query
$hasil = mysqli_query($konek,$sql) ;

?>
Data Barang
<table border="1">
    <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Stok Barang</th>
        <th>Gambar Barang</th>
        <th colspan='2'>Operasi</th>
    </tr>
<?php

// 4 fetch data hasil menjadi array
while($row = mysqli_fetch_assoc($hasil)) {

    // // 5 tampilkan data
    echo "<tr> " ;
    echo "    <td>" . $row['kode_brg'] ."</td>" ;
    echo "    <td>" . $row['nama_brg'] ."</td>" ;
    echo "    <td>" . $row['harga'] ."</td>" ;
    echo "    <td>" . $row['stok'] ."</td>" ;
    echo "    <td> <img src='" . $row['foto'] ."'></td>" ;
    echo "    <td> <a href='update_form.php?kode_brg=".$row['kode_brg']."'>Update</a></td>" ;
    echo "    <td> <a href='delete.php?kode_brg=".$row['kode_brg']."'>Delete</a></td>" ;
    echo "</tr>" ;

}

?>

</table>

<?php

// 6 tutup koneksi
mysqli_close($konek) ;

?>




