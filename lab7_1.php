<?php
header('refresh: 2'); //refresh the page every two seconds

$r = rand(1,7); # random number from 1 to 7

switch($r){
    case 1:
        $tip="sin(60 is" . sin(6);
        break;
    case 2:
        $tip = "The square root of $r is " . sqrt($r);
        break;
    case 3;
        $tip = "987654321 is formatted to " . number_format('987654321', $r,'.',',');
        break;
    case 4:
        $tip = "Your digital ID is " . uniqid();
        break;
    case 5:
        $tip = "2<sup>$r</sup> is ". pow(2, $r);
        break;
    case 6:
        $tip = "$r in binary format is " . decbin($r);
        break;
    default:
        $tip = "Natural logarithms, <i>e</i>, to the power of $r is " . exp($r);
        break;
}
echo $tip;
echo "<hr size='1'>";

function getDateTime()
{
    date_default_timezone_set("America/Los_Angeles");
    
    echo date('l jS \of F Y h:i:s A');
}
getDateTime();

?>