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
        <h1>Entry Data Alamat</h1>
        <form action="tampil.php" method="post">
            <table>
                <tr>
                    <td><label for="id">ID</label> </td>
                    <td><input type="text" name="id" id="id"></td>
                </tr>
                <tr>
                    <td><label for="nama_lengkap">Nama Lengkap</label></td>
                    <td><input type="text" name="nama_lengkap" id="nama_lengkap"></td>
                </tr>
                <tr>
                    <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                    <td>
                        <fieldset id="jenis_kelamin">
                            <input type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki"> <label for="laki-laki">Laki-laki</label>
                            <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan"> <label for="perempuan">Perempuan</label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td><label for="tempat_lahir">Tempat Lahir</label></td>
                    <td><input type="text" name="tempat_lahir" id="tempat_lahir"></td>
                </tr>
                <tr>
                    <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                    <td><input type="date" name="tanggal_lahir" id="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td><label for="agama">Agama</label></td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolih">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghuchu">Konghuchu</option>
                            <option value="Kepercayaan">Kepercayaan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><textarea name="alamat" id="alamat" cols="60" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button type="submit">SUBMIT</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>