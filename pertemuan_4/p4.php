<?php
//membuat array 2 dimensi (tabel)
$tabelMahasiswa = [
    ["nim"=>"IF-09","nama"=>"Asep","prodi"=>"Informatika"],
    ["nim"=>"IF-10","nama"=>"Budi","prodi"=>"Informatika"],
    ["nim"=>"SI-01","nama"=>"Citra","prodi"=>"Sistem Informasi"],
    ["nim"=>"IF-05","nama"=>"Deni","prodi"=>"Sistem Informasi"],
    ["nim"=>"TK-90","nama"=>"Edy","prodi"=>"Teknik Komputer"],
] ;
?>
<h3>Tabel Mahasiswa</h3>
<table border="1" cellpadding="15" cellspacing="0">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
    </tr>
    <?php
    foreach($tabelMahasiswa as $mahasiswa){
        ?>
        <tr>
            <td><?php echo $mahasiswa["nim"] ?></td>
            <td><?php echo $mahasiswa["nama"] ?></td>
            <td><?php echo $mahasiswa["prodi"] ?></td>
        </tr>  
        <?php
    }
    ?>
</table>