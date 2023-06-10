<?php 

$mahasiswa = [
    "Nama" => ["Adib", "Hauzan", "Sofyan"], 
    "Npm" => ["1203017", "1203018", "1203019"], 
    "Jurusan" => ["Teknik Informatika", "Sistem Informasi", "Teknik Elektro"], 
    "Email" => ["adibhauzan48@gmail.com", "hauzansofyan@gmail.com", "sofyan123@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <ul> 
        <?php foreach($mahasiswa as $mhs){ ?>
        <li>Nama    : <?php echo $mahasiswa["Nama"][0]; ?></li>
        <li>Npm     : <?php echo $mahasiswa["Npm"][0]; ?></li>
        <li>Jurusan : <?php echo $mahasiswa["Jurusan"][0]; ?></li>
        <li>Email   : <?php echo $mahasiswa["Email"][0]; ?></li> <br>
        <?php } ?>
       
    </ul>
</body>
</html>