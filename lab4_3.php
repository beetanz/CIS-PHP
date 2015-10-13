<?php
date_default_timezone_get("America/Los_Angeles");

$hour = date("h"); # 12 hour format
echo "In Los Angeles, ";

switch ($hour)
{
    case "01" : echo "it's One o'clock now!"; break;
    case "02" : echo "it's Two o'clock now!"; break;
    case "03" : echo "it's Three o'clock now!"; break;
    case "04" : echo "it's Four o'clock now!"; break;
    case "05" : echo "it's Five o'clock now!"; break;
    case "06" : echo "it's Six o'clock now!"; break;
    case "07" : echo "it's Seven o'clock now!"; break;
    case "08" : echo "it's Eight o'clock now!"; break;
    case "09" : echo "it's Nine o'clock now!"; break;
    case "10" : echo "it's Ten o'clock now!"; break;
    case "11" : echo "it's Eleven o'clock now!"; break;
    case "12" : echo "it's Twelve o'clock now!"; break;
}

echo "<hr size = '1'>";

$x = date("w"); //number of the day of the week, 0 for sunday

switch ($x)
{
    case 0: echo "Sunday"; break;
    case 1: echo "Monday"; break;
    case 2: echo "Tuesday"; break;
    case 3: echo "Wednesday"; break;
    case 4: echo "Thursday"; break;
    case 5: echo "Friday"; break;
    case 6: echo "Saturday"; break;
    default: echo "No such option!"; break;
}

echo "<hr size='1'>";

$M = date("M"); #A short textual representation of a month, three letters

switch($M)
{
    case"Jan" : $month = "January"; break;
    case"Feb" : $month = "February"; break;
    case"Mar" : $month = "March"; break;
    case"Apr" : $month = "April"; break;
    case"May" : $month = "May"; break;
    case"Jun" : $month = "June"; break;
    case"Jul" : $month = "July"; break;
    case"Aug" : $month = "August"; break;
    case"Sep" : $month = "September"; break;
    case"Oct" : $month = "October"; break;
    case"Nov" : $month = "November"; break;
    case"Dec" : $month = "December"; break;
}
echo $month;
?>