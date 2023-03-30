<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Form</title>
</head>
<body>
    <div class="container">
            
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
    </div>
</body>
</html>        