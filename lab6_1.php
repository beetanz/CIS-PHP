<?php
$x;

$x[0] = 5;
$x[1] = 9;
$x[2] = 4;
$x[3] = 7;

echo "data type: ". gettype($x) . "<br>"; #array
$i = 0;

foreach ($x as $j)
{
    echo '$x[' . $i . '] is ' . $j . "<br>";
    ++$i;
}
echo "<hr size ='1'>";

//array of numbers
$n = Array (1,3,5,7);

echo "data type: ", gettype($n) , "<br>";
$i =0;
foreach ($n as $u)
{
    echo $u . ' is $n[' . $i . '] <br>';
    ++$i;
}

echo "<hr size='1'>";

//array of strings
$jw;

$jw[0] = "Konnichiwa.";
$jw[1] = "Gakusei desu ka.";
$jw[2] = "Yoroshiku.";
$jw[3] = "Sumimasen.";

$i = rand(0, 3);
echo "Greet in Japanese: <b>" , $jw[$i] , "</b><br>";

$tip = Array ("Right click the moues!",
        "Double click the mouse!",
    "Double right click the mouse!",
    "Press F8 and F12!");
echo "Tip of the day is: <b>" . $tip[rand(0,3)] . "</b>";

echo "<hr size='1'>";

$m[0] = 5.12;
$m[1] = 9;
$m[2] = 'nine';
$m[3] = true;

echo '$m is ' , gettype($m) , "<br>";

for ($i = 0; $i <= 3; $i++)
{
    echo '$m[' . $i . '] is ' . gettype($m[$i]) . ". Value is " . $m[$i] . "<br>";
}

echo "<br size='1'>";

//Associative Array
$major['c'] = "Computer Information Systems";
$major['m'] = "Management Informaiton Systems";
$major['a'] = "Accounting Information Systems";
$major['h'] = "Health Information Systems";

echo $major['a'] , "<br>";
echo $major['m'] , "<br>";
echo $major['h'] , "<br>";
echo $major['m'] , "<br>";

$school = Array("UCI"=>"University of California, Irvine",
        "UCSD"=>"University of California, San Diego",
    "UCLA"=>"University opf California, Los Angeles",
    "UCD"=>"University of California, Davis");

echo "<br size='1'>";

echo $school["UCI"] , "<br>";
echo $school["UCLA"] , "<br>";
echo $school["UCD"] , "<br>";
echo $school["UCSD"] , "<br>";
?>