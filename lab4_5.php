<?php
//CHinese Zodiac

if ($_POST) { //if form is filled out
    $y = $_POST["yr"] % 12;

    switch ($y) {
        case 0:
            $z = "Monkey";
            break;
        case 1:
            $z = "Rooster";
            break;
        case 2:
            $z = "Dog";
            break;
        case 3:
            $z = "Pig";
            break;
        case 4:
            $z = "Rat";
            break;
        case 5:
            $z = "Cow";
            break;
        case 6:
            $z = "Tiger";
            break;
        case 7:
            $z = "Rabbit";
            break;
        case 8:
            $z = "Dragon";
            break;
        case 9:
            $z = "Snake";
            break;
        case 10:
            $z = "Horse";
            break;
        case 11:
            $z = "Goat";
            break;
    }
    echo "You were born in a <b>$z</b> year, and it is ";
    echo ((($y % 4 == 0) && ((($y % 100) != 0) || (($y % 400) == 0)))) ? "a leap year." : "not a leap year";
} else { // otherwise display the form
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        What year were you born? <i>y</i>:
        <input type="text" name="yr" size="5">
        <input type="submit" value="Check">
    
    </form></p>

<?php } ?>
