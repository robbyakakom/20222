<?php
$array_mahasiswa_nim = $_POST['mahasiswa_nim'] ;
$array_mahasiswa_nama = $_POST['mahasiswa_nama'] ;
$array_mahasiswa_jurusan = $_POST['mahasiswa_jurusan'] ;
?>

<h2>Menampilkan Daftar Nama Mahasiswa</h2>
<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Jurusan</th>
    </tr>
    <?php
        for($a=1;$a<=9;$a++){
            echo "<tr>" ;
            echo "   <td>".$a."</td>";
            echo "   <td>".$array_mahasiswa_nim[$a]."</td>";
            echo "   <td>".$array_mahasiswa_nama[$a]."</td>";
            echo "   <td>".$array_mahasiswa_jurusan[$a]."</td>";
            echo "</tr>" ;
        }
    ?>    
</table>