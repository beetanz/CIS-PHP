<?php
$x = 7;
$y = 3;

echo ($x + $y) . "<br>";
echo ($x - $y) . "<br>";
echo ($x * $y) . "<br>";
echo ($x / $y) . "<br>";
echo ($x % $y) . "<br>";

echo "<hr size='1'>";

$h = 1; // finding 1+2+3+4+5 = ??
$h = $h + 2;
$h = $h + 3;
$h = $h + 4;
$h = $h + 5;

echo $h , "<br>";

echo "<hr size = '1'>";

echo (9.54 /4.31) . "<br>";
echo (9.54 / 4) . "<br>";
echo (9 / 4.31) . "<br>";
echo (9 / 4) . "<br>";
echo (int) (9 / 4) . "<br>";

echo "<hr size='1'>";

echo (9 % 4) . "<br>"; # 1
echo (10 % 4) . "<br>"; # 2
echo (11 % 4) . "<br>"; # 3
echo (12 % 4) . "<br>"; # 0

echo "<hr size='1'>";

echo (5 % 3) . "\n"; # 2
echo (5 % -3) . "\n"; # 2
echo (-5 % 3) . "\n"; # -2
echo (-5 % -3) . "\n"; # -2

$k = rand(0, 99999);

echo "<hr size='1'>";

echo ($k %2 == 0) ? "$k is an even number." : "$k is an odd number.", "<br>";
?>