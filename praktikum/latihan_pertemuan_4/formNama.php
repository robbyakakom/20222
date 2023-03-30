<?php
    $arr_jurusan = array("TI"=>"Teknik Informatika","SI"=>"Sistem Informasi","MI"=>"Manajemen Informatika","KA"=>"Komputer Akuntansi","TK"=>"Teknik Komputer") ;
?>
<h2>Nama Mahasiswa</h2>
<form action="mahasiswa.php" method="post">
    <ol>
        <?php
            for($a=1;$a<=9;$a++){
                ?>
                    <li>
                        <input type='text' placeholder='NIM' name='mahasiswa_nim[<?= $a ?>]'>
                        <input type='text' placeholder='Nama Mahasiswa' name='mahasiswa_nama[<?= $a ?>]'>
                        <select name='mahasiswa_jurusan[<?= $a ?>]'>
                            <option value="">Pilih Jurusan</option>
                            <?php
                                foreach($arr_jurusan as $kode => $nama_jurusan){
                                    ?>
                                        <option value='<?= $kode ?>'><?= $nama_jurusan ?></option>
                                    <?php
                                }
                            ?>                        
                        </select>
                    </li>
                <?php
            }
        ?>
    </ol>
    <input type="submit" value="TAMPILKAN" />
</form>

