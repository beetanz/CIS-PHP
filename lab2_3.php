<?php
# concatenation
$word1="for";
$word2="ever";
$number1=12;
$number2=57;

//string-to-string concatenation
echo $word1 . $word2 . "<br>";

//string-to-number concatenation (become a new string)
echo $word1 . $number1 . "<br>";

//number to string concatenation (become a new string
echo $number1 . $word1 . "<br>";

// number to number concatenation (a new string?)
echo $number1 . $number2 . "<br>";

# quotes
$ans = 'I\'m fine.<br>';
echo "$ans" . "<br>";
echo '$ans' . "<br>";

echo 'I said \"HI!\" to you.<br>';
echo "I said \"HI!\" to you.<br>";

$age = 24; 
$city = "Cypress";
$state = 'California';

echo "age is $age, city is $city, state is $state". "<br>";
echo 'age is $age, city is $city, state is $state'. "<br>";

$ans = 'I\'m fine.';

echo 'She said, \"How are you?\" to him. He answered, \"$ans\" to her.'. "<br>";
echo "She said, \"How are you?\" to him. He answered, \"$ans\" to her.". "<br>";
$tab = "&#160; &#160; &#160; &#160";
echo "There is a \t$tab here.";

?>

