<?php

/*
 * File Name: ex06.php
 * Student: Ben Tanzer
 */
$genre = array('family', 'drama', 'action', 'romance', 'comedy', "horror");
echo "print unsorted list: ";
print_r($genre);
echo "<br>";
sort($genre);
echo "print sorted list:";
print_r($genre) ;
echo "<br>";
