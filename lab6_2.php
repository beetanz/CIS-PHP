<?php
date_default_timezone_set("America/Los_Angeles");

$w = date("w"); // dayu opf the week; 0 for sunday

$wd[0] = "Sunday";
$wd[1] = "Monday";
$wd[2] = "Tuesday";
$wd[3] = "Wednesday";
$wd[4] = "Thursday";
$wd[5] = "Friday";
$wd[6] = "Saturday"; 

echo "Today is <b>$wd[$w]</b>. <br>";
$m = date("n");
$month = array(1=>"January", "February", "March", 
    "April", "May", "June", "July", "August", 
    "September", "October", "Novembner", "December");

echo "Current month is <b>$month[$m]</b>.<br>";

$y = date("Y"); # 4 digit year value

$y = $y % 12; #/modulus

$zodiac = array ("MOnkey", "Rooster", "Dog", "Pig" , "Rat" , "Cow", "Tiger", "Rabbit" , "Dragon" , "Snake" , "Horse" , "Goat");

echo "This year is a <b>$zodiac[$y]</b> year.<br>";

$season = array("Spring", "Summer", "Fall", "Winter");

switch(11)
{
    case 12:
    case 1:
    case 2:
        $s = $season[3]; break;
    
    case 3:
    case 4:
    case 5:
        $s = $season[0]; break;
    
    case 6:
    case 7:
    case 8:
        $s = $season[1]; break;
    case 9:
    case 10:
    case 11:
        $s = $season[2]; break;
}
echo "Current season is <b>$s</b>.<br>";

?>