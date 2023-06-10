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
    <title>Latihan 1</title>
</head>

<body>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="Latihan2.php?nama=<?= $mhs["nama"];?>&npm=<?= $mhs["npm"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&image=<?= $mhs["image"]; ?>"><?php echo $mhs["nama"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>