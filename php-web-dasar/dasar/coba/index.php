<?php


require_once "functions.php";


$mahasiswa = query("SELECT * FROM coba")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <h1>Tambah Data Mahasiswa</h1>
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <a href="tambah.php">Tambah Data Mahasiswa
            </a>
            <tr>
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    <a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('YAKEEENN?');">Hapus</a>
                </td>
                <td><?php echo $mhs["nama"]; ?></td>
                <td><?php echo $mhs["npm"]; ?></td>
                <td><?php echo $mhs["email"]; ?></td>
                <td><?php echo $mhs["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>