<?php

$x = 9;
$y = 10;

echo '$x & $y: <b>' . ($x & $y) . "</b><br>";
echo '$x | $y: <b>' . ($x | $y) . "</b><br>";
echo '$x ^ $y: <b>' . ($x ^ $y) . "</b><br>";

echo '~$x: <b>' . (~$x) . "</b><br>";

echo ('A' & 'B'), "<br>"; # @
echo ('A' | 'B'), "<br>"; # C
echo ('A' ^ 'B'), "<br>"; # 
echo (~'A'), "<br>"; # 3/4

echo ('A' & 5), "<br>"; # 0
echo ('A' | 5), "<br>"; # 5
echo ('A' ^ 5), "<br>"; # 5

echo (9 << 0), "<br>";
echo (9 << 1), "<br>";
echo (9 << 2), "<br>";
echo (9 << 3), "<br>";
echo (9 << 4), "<br>";

echo (9 >> 0), "<br>";
echo (9 >> 1), "<br>";
echo (9 >> 2), "<br>";
echo (9 >> 3), "<br>";
echo (9 >> 4), "<br>";

echo "<hr size='1' width=100%>";

$str = "This is a secret.";
echo $str . "<br>";

$cipher = ~$str;

echo $cipher . "<br>";

$descript = ~$cipher;

echo $descript . "<br>";
?>