<?php
# int / integer
echo 10;
echo "<br>";
gettype(10) . "<br>";

# double / float
echo 3.141592653589;
echo "<br>";
echo gettype(3.141592653589) . "<br>";

# string
echo "Hello world!<br>";
echo gettype("Hello world!<br>") . "<br>";

#bool / boolean
echo (5>3);
echo"<br>";
echo gettype (5>3);

echo "<hr size='1'>";

# no char type 
$c = 'A'; #string
echo gettype ($c) . "<br>";

$c = "A"; #string
echo gettype($c) . "<br>";

$c = "Apple"; #strinmg
echo gettype($c) . "<br>";

# array type
$x[0] = 1;
$x[1] = 2;
echo gettype($x) . "<br>";

?>