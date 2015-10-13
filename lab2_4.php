<?php

# integral data  
$x = 67;
echo $x . "<br>"; #67
echo gettype($x) . "<br>";

$y = 0126;
echo $y . "<br>"; #86  
echo gettype($y) . "<br>";

$z = 0x1b9;
echo $z . "<br>"; #441

$w = 0X1B9;
echo $w . "<br>"; #441
$a = 1753; # positive
$b = +432; # positive
$c = -46; # negative

echo "$a, $b, $c";

$x1 = 5678; // decimal number  
$x2 = -5678; // a negative number  
$x3 = 0123; // octal number (equivalent to 83 decimal)
$x4 = 0x1A; // hexadecimal number (equivalent to 26 decimal)  

echo "$x1, $x2, $x3, $x4<br>";
echo gettype($x1) . "<br>";
echo gettype($x2) . "<br>";
echo gettype($x3) . "<br>";
echo gettype($x4) . "<br>";

# floating point  
$s = 3.14125; # positive

$t = -3.14125; # negative

$u = 47.895;

echo "$s, $t, $u<br>";

echo gettype($s) . "<br>";
echo gettype($t) . "<br>";
echo gettype($u) . "<br>";

$n1 = 6.25e+15;
$n2 = 6.25E15;
$n3 = 2.74E-23;
$n4 = -1.268e7;
$n5 = -9.317e-14;

echo "$n1<br> $n2<br> $n3<br> $n4<br> $n5<br>";

echo $n1 * 5 . "<br>";

echo 1.268e13 . "<br>";
echo 1.268e14 . "<br>";

echo -1.268e13 . "<br>";
echo -1.268e14 . "<br>";
?> 
