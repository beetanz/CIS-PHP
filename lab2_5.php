<?php

$x = "2351";
echo gettype($x) . "<br>";

$x = (int) $x;
echo gettype($x) . "<br>";

$y = "2.314e12";
echo gettype($y) . "<br>";

$y = (double) $y;
echo gettype($y) . "<br>";
echo $y . "<br>"; # 2314000000000  

$z = false;
echo gettype($z) . "<br>";

$z = (int) $z;
echo gettype($z) . "<br>";
echo $z . "<br>";

$w = "(3 < 4)";
echo gettype($w) . "<br>";

$w = (int) $w;
echo gettype($w) . "<br>";

echo $w . "<br>";

echo "<h2>I see you</h2>";
echo "<b>Script Name</b>: " . $_SERVER['PHP_SELF'] . "<br>";
echo "<b>Your Browser</b>: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "<b>Your IP address</b>:" . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "<b>Server Host Name</b>:" . $_SERVER['SERVER_NAME'] . "<br>";
echo "<b>Web Server Software</b>: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "<b>Transmission Protocol</b>: " . $_SERVER['SERVER_PROTOCOL'];

echo getenv('PHP_SELF') . "<br>";
echo getenv('HTTP_USER_AGENT') . "<br>";
echo getenv('REMOTE_ADDR') . "<br>";
echo getenv('REQUEST_METHOD') . "<br>";
echo getenv('SERVER_NAME') . "<br>";
echo getenv('SERVER_SOFTWARE') . "<br>";
echo getenv('SERVER_PROTOCOL');

?> 
