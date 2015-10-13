<?php
# use null if variable does not have initial value
$name = null;
$Name = null;

# double vs single quotes
echo "This apple costs $1.";
echo "<br>";
echo 'This apple costs $1.';
echo "<br>";

$firstName = "Jennifer";
$lastName = "Lopez";

echo "$lastName, $firstName";
echo "<br>";
echo '$lastName, $firstName';
echo "<br>";

$dog_age=10;
$human_age = $dog_age *7;
echo "Your dog is $human_age years old in human age.<br>";

$a = $b = $c = $d = 3;

echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo $d . "<br>";

$y = ($x = 7);
echo $x . "<br>";
echo $y . "<br>";

$z = ($y = ($x = 7));
echo $x . "<br>";
echo $y . "<br>";
echo $z . "<br>";


$s1 = $s2 = $s3 = $s4 = "University of California";

$s1 = $s1 . ", Los Angeles"; # comma concatination
$s2 = $s2 . ", Berkeley";
$s3 = $s3 . ", Santa Barbara";
$s4 = $s4 . ", San Diego";

echo $s1 . "<br>";
echo $s2 . "<br>";
echo $s3 . "<br>";
echo $s4 . "<br>";
?>