<?php

// post vs pre increment/decrement
$a = 5;
echo $a++ . "<br>";

$b = 5;
echo ++$b . "<br>";

$c = 5;
echo $c-- . "<br>";

$d = 5;
echo --$d . "<br>";

echo "<hr size='1'>";

//increment and decrement by 1
$x = 4;
$y = 9;

$x++; //post-increment by 1
$y--; //post-decrement by 1

echo "$x, $y <br>"; // display $x and $y after

echo "<hr size='1'>";

//increment and decrement by 2 or larger number
$m = 11;
$n = 6;

$m += 4; //increment by 4
$n -= 3;  //decrement by 3

echo "$m, $n <br>";

echo "<hr size='1'>";

$i = 5;
$i += 2;

$j = 5;
$j = $j + 2;

echo "$i, $j <br>";

echo ($i === $j) ? 1 : 0, "<br>";

$s = 9;
$s -=5;

$t = 9;
$t = $t - 5;
echo "$s, $t <br>";
echo ($s === $t), "<br>";

echo "<hr size='1'>";

// find 1*2*3*4*5 = ??

$h = 1;
$h *=2;
$h *=3;
$h *=4;
$h *=5;

echo $h, "<br>";
?>