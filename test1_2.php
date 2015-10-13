<?php
//First Number
$n1 = rand(1,47);
//echo "<b>" . $n1 . "</b><br>" ;


//Second Number
do {
    $n2 = rand(1, 47);
  //  echo $n2 . "<br>";
} while ($n2 == $n1);
//echo "<b>" . $n2 . "</b><br>" ;

//Third Number
do {
    $n3 = rand(1,47);
  //  echo $n3 . "<br>";
} while (($n3 == $n2) || ($n3 == $n1));
//echo "<b>" . $n3 . "</b><br>" ;

//Fourth Number
do {
    $n4 = rand(1,47);
  //  echo $n4 . "<br>";
} while (($n4 == $n3) || ($n4 == $n2) || ($n4 == $n1));
//echo "<b>" . $n4 . "</b><br>" ;

//Fifth Number
do {
    $n5 = rand(1,47);
  //  echo $n5 . "<br>";
} while (($n5 == $n4) || ($n5 == $n3) || ($n5 == $n2) || ($n5 == $n1));
//echo "<b>" . $n5 . "</b><br>" ;

//Mega Number
$mega = rand(1, 27);


echo $n1 . " " . $n2 . " " . $n3 . " " . $n4 . " " . $n5 . " Mega " . $mega;
?>



