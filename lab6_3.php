<?php
$x[0]= 5.14;
$x[1] = 31;
$x[2] = true;
$x[3] = "Apple";

$k = array_keys($x);
$v = array_values($x);

for ($i = 0 ; $i < count($x); $i++)
{
    echo "$k[$i] : $v[$i]<br>";
}

echo "<hr size='1'>";

//create an array with 2 elements
$subject = Array("Earth Science", "Physics");

//add new elements
$subject[2] = "Management";
$subject[3] = "Marketing";

// add new associative element
$subject["Bio"] = "Biology";
$subject["Chem"] = "Chemistry";
$subject["Acct"] = "Accounting";

echo '$subject[0] is ' . $subject[0] . "!!<br>";
echo '$subject[1] is ' . $subject[1] . "!!<br>";
echo '$subject[2] is ' . $subject[2] . "!!<br>";
echo '$subject[3] is ' . $subject[3] . "!!<br>";

echo '$subject["Bio"] is ' . $subject["Bio"] . "!!<br>";
echo '$subject["Chem"] is ' . $subject["Chem"] . "!!<br>";
echo '$subject["Acct"] is ' . $subject["Acct"] . "!!<br>";

echo "<hr size='1'>";

$state = array('AL' => "Alabama", 'AK' => "Alaska", 'AZ' => "Arizona", 'AR' => "Arkansas");

# add 3 new elements

$state['CA'] = "California";
$state['CO'] = "Colorado";
$state['CT'] = 'Connecticut';

$k = array_keys($state); # array of keys
$v = array_values($state); # array of values

for ($i = 0; $i< count($state); $i++)
{
    echo "$k[$i] : $v[$i]<br>";
}
?>