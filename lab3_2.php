<?php

$x = rand(0, 99); //random number 0 - 99
echo '$x = ' . $x . "<br>";

echo (($x >= 90) ? "True" : "False") . "<br>";

echo (($x >= 80) ? "True" : "False") . "<br>";

echo (($x >= 70) ? "True" : "False") . "<br>";

echo (($x >= 60) ? "True" : "False") . "<br>";

$a = rand(0, 9); // random number 0-9
$b = rand(0, 9);

echo '<p>$a ' . $a . ' and $b = ' . $b . ", so ";
echo (($a == $b) ? "$a = $b" : (($a > $b) ? "$a > $b" : "$a < $b")) . "</p>";

$s = rand(1, 9);
$t = rand(1, 9);

echo '<p>$s = ' . $s . ' and $t = ' . $t . ', so ($s>4 AND $t>4) is ';

echo (($s > 4 AND $t > 4) ? "True" : "False") . "</p>";

$m = rand(1, 9);
$n = rand(1, 9);

echo '<p>$m = ' . $m . ' and $n = ' . $m . ', so ($m>5 OR $n>5 is ';

echo (($m > 5 OR $n > 5) ? "True" : "False") . "</p>";

echo "<hr size=1 width=100%>";

// letter-based logical Operators
$i = 6;
$j = 5;

echo '$i = ' . $i . ' and $j = ' . $j . ', so <ul>';

echo '<li>($i>4 AND $j>4) is ' . (($i>4 AND $j>4) ? "True" : "False") . "<br>"; 
echo '<li>($i>4 OR $j>4) is ' . (($i > 4 OR $j > 4) ? "True" : "False") . "<br>";
echo '<li>($i>4 XOR $j>4) is ' . (($i > 4 XOR $j > 4) ? "True" : "False") . "<br>";

echo "</ul>";

echo "and <ul>";

echo '<li>($i>4 && $j>4) is ' . (($i > 4 && $j > 4) ? "True" : "False") . "<br>";
echo '<li>($i>4 || $j>4) is ' . (($i > 4 || $j > 4) ? "True" : "False") . "<br>";
echo '<li>(!$i>4 && !$j>4) is ' . ((!$i > 4 XOR ! $j > 4) ? "True" : "False") . "<br>";
?> 



