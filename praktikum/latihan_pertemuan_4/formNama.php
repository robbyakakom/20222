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
    </div>
</body>
</html>