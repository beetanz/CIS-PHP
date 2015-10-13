<?php
date_default_timezone_set("America/Los_Angeles");

//using array() function
$tip = array (
    "The secret of life is...It's a secret.",
    "Good advice jars the ear.",
    "Bloom where you are planted.",
    "The greatest danger could be your stupidity.",
    "Your heart desires to give money to the poor.",
    "Work hard and happiness will come your way.",
    "Love is coming your way."
);

$w = date("w"); // Number of the day of the week # 0 for sunday

echo "Tip of the day: <b>$tip[$w]</b><br>"; // $tip value is subject to $w

echo "<hr size='l'>";

//associate array with identifier
$goal['Jan'] = "<a href=http://www.ibm.com>IBM</a>";
$goal['Feb'] = "<a href=http://www.hp.com>HP</a>";
$goal['Mar'] = "<a href=http://www.novell.com>Novell</a>";
$goal['Apr'] = "<a href=http://www.cnn.com>CNN</a>";
$goal['May'] = "<a href=http://www.apple.com>Apple</a>";
$goal['Jun'] = "<a href=http://www.seagate.com>Seagate</a>";
$goal['Jul'] = "<a href=http://www.motorola.com>Motorola</a>";
$goal['Aug'] = "<a href=http://www.nokia.com>Nokia</a>";
$goal['Sep'] = "<a href=http://www.toshiba.com>Toshiba</a>";
$goal['Oct'] = "<a href=http://www.cisco.com>Cisco</a>";
$goal['Nov'] = "<a href=http://www.oracle.com>Oracle</a>";
$goal['Dec'] = "<a href=http://www.amazon.com>Amazon</a>";

$m = date("M");
echo "The goal for this month is to review the $goal[$m] site!<br>";

echo "<hr size='1'>";

echo "TV List: ";

$site = array("hbo", "cnn", "cbs", "abc", "nbc", "fox", "tnt", "tbs", "mtv");

foreach ($site as $key => $url)
{
    echo "<a href=\"http://www.$url.com\">$url</a> | ";
}

echo "<hr size = '1'>";

$x; //declare array

for($i = 0; $i < 50; $i++)
{
    $x[$i] = $i +1;
}

echo "Original list: <br>";

for($i = 0; $i < sizeof($x); $i++)
{
    echo $x[$i] . " ";
}

echo "<br>Shuffled list: <br>";

$size = sizeof($x);
$last = $size -1;

for ($j =0; $j < $last; $j++)
{
    $r = Rand(0, $size-1);
    $temp = $x[$r];
    $x[$r] = $x[$last];
    $x[$last] = $temp;
    
    $last--;
}

for($i = 0; $i < sizeof($x); $i++)
{
    echo $x[$i] . " ";
}
?>