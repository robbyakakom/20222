<?php
include("sesi.php") ;
include("menu.php") ;
include("config_db.php") ;
?>
<h1>FORM PENJUALAN</h1>
<form action="jual_simpan.php" method="post">
    Tanggal <input type="text" name="tgl" id="tgl" value="<?php echo date("Y-m-d") ?>"> <br>
    Customer <input type="text" name="customer" id="customer"> <br>
    BARANG YG DIJUAL
    <table>
        <tr>
            <td>NAMA BARANG</td>
            <td>JUMLAH</td>
        </tr>
        <?php 
            
            for($i=1;$i<=2;$i++) {
            ?>
            <tr>
                <td>
                    <select name="kode_brg[]" id="kode_brg">
                        <option value="">PILIH BARANG</option>
                        <?php
                            $sql = "select * from barang" ;
                            $query = mysqli_query($konek,$sql) ;
                            while($row = mysqli_fetch_assoc($query)){
                                ?>
                                    <option value="<?php echo $row['kode_brg'] ?>" ><?php echo $row['kode_brg'] ." | " . $row['nama_brg'] ?> </option>
                                <?php
                            }
                        ?>
                    </select>
                </td>
                <td>
                    <input type="text" name="jumlah[]" id="jumlah">
                </td>
            </tr>
            <?php
            } 
        ?>

    </table>
    <br>
    <input type="submit" value="SIMPAN">
</form>