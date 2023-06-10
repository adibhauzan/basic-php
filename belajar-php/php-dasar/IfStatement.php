<?php 

$nilai = 50;
$absen = 63;

if($nilai >=84  && $absen >=84){
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >=74 && $absen >=74) {
    echo "Nilai Anda B" . PHP_EOL;
} else if ($nilai >=64 && $absen >=64) {
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilai >=50 && $absen >=50) {
    echo "Nilai Anda D" . PHP_EOL;
}else {
    echo "Nilai Anda E" . PHP_EOL;
}
 
?>