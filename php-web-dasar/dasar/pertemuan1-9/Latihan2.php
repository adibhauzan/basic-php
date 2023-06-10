<?php

$mahasiswa = [
    [
        "nama" => "Adib Hauzan Sofyan",
        "npm" => "1203017",
        "jurusan" => "Teknik Informatika",
        "email" => "adibhauzan48@gmail.com",
        "image" => "adib.jpg"
    ],
    [
        "nama" => "Gilang Aditya Saputra",
        "npm" => "1203010",
        "jurusan" => "Teknik Nuklir",
        "email" => "makgilang@gmail.com",
        "image" => "gilang.jpg"
    ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>

<body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="image/<?php echo $mhs["image"]; ?>">
            </li>
            <li>Nama :<?php echo $mhs["nama"] ?></li>
            <li>Npm : <?php echo $mhs["npm"] ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
            <li>Email : <?php echo $mhs["email"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>