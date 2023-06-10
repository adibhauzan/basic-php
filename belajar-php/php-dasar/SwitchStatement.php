<?php 

$nilai = "E";

switch($nilai){
    case "A":
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
    echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
}

switch($nilai):
    case "A":
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
endswitch
?>