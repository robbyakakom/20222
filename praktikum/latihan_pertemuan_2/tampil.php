<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Tampil</title>
</head>
<body>
    <div class="container">
    <h1>Tampil Data Alamat</h1>
        <table class="table">
            <tr>
                <td>ID</td>
                <td><?= $_POST["id"] ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><?= $_POST["nama_lengkap"] ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $_POST["jenis_kelamin"] ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?= $_POST["tempat_lahir"] ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?= $_POST["tanggal_lahir"] ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><?= $_POST["agama"] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= $_POST["email"] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $_POST["alamat"] ?></td>
            </tr>
        </table>
    </div>
</body>
</html>