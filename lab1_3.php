<?php

date_default_timezone_set("America/Los_Angeles");
$weekday = date("l"); /* day of the week */
$year = date("Y"); // get the year
$md = date("M-d");
$d = date("z"); # day of the year
?>
<!Docttype html>
<html>
    <body>
        <p>Today is <?php echo $weekday . ","; ?> <?php echo $md; ?> </p>
        <?php
        echo "It is the $d"
                . "th day "
                . "of $year.\n";
        ?>
    </body>
</html>