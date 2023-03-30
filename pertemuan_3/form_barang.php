<form action="" method="post">
    Kode <br>
    <input type="text" name="kode"> <br>
    Nama Barang <br>
    <input type="text" name="nama_brg"> <br>
    <button type="submit">Tampilkan</button>
</form>

<?php

if(isset($_POST['kode']) and isset($_POST['nama_brg'])){
    echo "Kode : " . $_POST['kode'] . "<br>" ;
    echo "Nama Barang : " . $_POST['nama_brg'] . "<br>" ;
}

?>