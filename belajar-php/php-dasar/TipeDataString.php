<?php 

// menggunakan petik 1
echo 'nama : ';
echo 'Adib Hauzan Sofyan';

// menggunakan petik 2
echo"\n";

echo "nama : ";
echo "Adib \t Hauzan \t Sofyan\n";;

echo <<<ADIB
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
ADIB;

echo <<<'ADIB'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
ADIB;



?>