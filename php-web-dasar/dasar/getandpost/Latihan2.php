<?php 

if( !isset($_GET["nama"]) ||
    !isset($_GET["npm"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["image"]) ){
        //redirect
    header("Location: Latihan1.php");
    exit;
}

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
    <ul>
        <li><img src="image/<?php echo $_GET["image"]?>"></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["npm"]; ?></li>
        <li><?php echo $_GET["jurusan"]; ?></li>
    </ul>

    <a href="Latihan1.php
    "> Kembali ke latihan 1</a>
</body>
</html>