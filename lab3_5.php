<?php

echo ini_get('safe_mode') ? "Safe Mode is on." : "Safe Mode is off.", "<hr>";

$str = "This ";
$str .= "is ";
$str .= "a ";
$str .= "demo ";
$str .= "sentence.";

echo "$str<hr>"; # double quotes
// execution operator

$s = strtolower(PHP_OS); // determine OS type
$os = $s[0] . $s[1] . $s[2];
($os == 'win') ? $cmd = `set` : $cmd = `printenv`;
echo "<pre>$cmd </pre><hr>";    // shell_exec
($os == 'win') ? $cmd = "date /t & time /t" : $cmd = "date";
echo shell_exec($cmd) . "<hr>";    // eval
$str = "\$x = 5;
\$x += 3;          echo \$x;";
eval($str);
?>