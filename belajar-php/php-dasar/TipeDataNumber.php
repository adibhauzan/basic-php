<?php 


//integer
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111111);




//Floating point

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating Point dengan E Notation minus : (1.7 x 0.001) : ";  
var_dump(1.7e-3);


//Integer Overflow

echo "Integer Overflow 32 Bit : ";
var_dump(2147483648);

echo "Integer Overflow 64 Bit : ";
var_dump(9223372036854775807);
?>