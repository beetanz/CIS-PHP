<!Doctype html>
<html>
    <body>
        Method 1: if<br> <?php
        $hour = date("h"); // 12-hour format of an hour (01 to 12)  
        if ($hour == "01") {
            echo "It's One o'clock now!";
        } if ($hour == "02") {
            echo "It's Two o'clock now!";
        } if ($hour == "03") {
            echo "It's Three o'clock now!";
        } if ($hour == "04") {
            echo "It's Four o'clock now!";
        } if ($hour == "05") {
            echo "It's Five o'clock now!";
        } if ($hour == "06") {
            echo "It's Six o'clock now!";
        } if ($hour == "07") {
            echo "It's Seven o'clock now!";
        } if ($hour == "08") {
            echo "It's Eight o'clock now!";
        } if ($hour == "09") {
            echo "It's Nine o'clock now!";
        } if ($hour == "10") {
            echo "It's Ten o'clock now!";
        } if ($hour == "11") {
            echo "It's Eleven o'clock now!";
        } if ($hour == "12") {
            echo "It's Twelve o'clock now!";
        }
        ?> 

        <p>Method 2: if ... then<br>

            <?php
            $x = date("w"); //number of the day of the week; 0 for sunday

            if ($x == 0) : echo "Sunday";
            elseif ($x == 1) : echo "Monday";
            elseif ($x == 2) : echo "Tuesday";
            elseif ($x == 3) : echo "Wednesday";
            elseif ($x == 4) : echo "Thursday";
            elseif ($x == 5) : echo "Friday";
            elseif ($x == 6) : echo "Saturday";
            else : echo "No such option!";

            endif;
            ?>
        <p>Method 2: alternative structure<br>
            <?php
            $M = date("M");

            if ($M == "Jan") { $month = "January";
            }
            elseif ($M == 'Feb') { $month = "February";
            }
            elseif ($M == 'Mar') { $month = "March";
            }
            elseif ($M == 'Apr') { $month = "April";
            }
            elseif ($M == 'May') { $month = "May";
            }
            elseif ($M == 'Jun') { $month = "June";
            }
            elseif ($M == 'Jul') { $month = "July";
            }
            elseif ($M == 'Aug') { $month = "August";
            }
            elseif ($M == 'Sep') { $month = "September";
            }
            elseif ($M == 'Oct') { $month = "October";
            }
            elseif ($M == 'Nov') { $month = "November";
            }
            elseif ($M == 'Dec') { $month = "December";
            }
            

            echo "It is $month.";
            ?>
    </body>
</html>