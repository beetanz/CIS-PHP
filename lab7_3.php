<?php
date_default_timezone_set("America/Los_Angeles");

echo "Today is <b>" , date("F d, Y") , "</b>.<br>";
echo "Current time is <b>" , date("H:i:s a") , "</b>.<br>";

$s = date("s");

$m = date("n"); # number of month (1-12)
$d = date("j"); # day of the month 1-31
$h = date("H");
$y = date("Y"); // 4 digit year valu;e

$j = date('z'); // the day of the year (0-365)

$cmas = 359;

$isLeap = checkLeap($y);

if ($isLeap == 1)
{
    $cmas = 360;
}

$days_left = $cmas - $j -1;
$hours_left = 24 - $h - 1;
$minutes_left = 60 - $h -1;
$seconds_left = 60 - $s;

Echo "<hr size = '1'>";

echo "There are <b>$days_left</b> days, "
        . "<b>$hours_left</b> hours,"
        . "<b>$minutes_left</b> minutes,"
        . "and <b>$seconds_left</b> seconds left to Christmas.";
echo "<hr size ='1'>";

echo showDays($y);
function checkLeap($y)
{
    return ((($y % 4) == 0) && ((($y % 100) != 0) || (($y %400) == 0))) ? 1 : 0;
}
function showDays($y)
{
    $n = cal_days_in_month(CAL_GREGORIAN, 2, $y);
return "February of $y has <b>$n</b> days!<br>";
}
            
?>