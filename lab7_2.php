<!Doctype html>
<html>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Enter your birth year: <input type="Text" name="byear" size='4'>
<input type="submit" value="Check">
</form>
        
        <?php
        
        if ($_POST)
        {
            function validation()
            {
                $Y = $_POST['byear'];
                if (!is_numeric($Y))
                {
                    echo "Invalid entry";
                    exit;
                }
                else
                {
                    $Y = $Y % 12;
                    ChineseZodiac($Y); // call the function, pass value of $Y
                }
            }
            function ChineseZodiac($Y) // iuser-defined function with parameter
            {
                if ($Y == 4) { $zodiac = "Rat";}
                elseif ($Y == 5) { $zodiac = "Cow"; }
                elseif ($Y == 6) { $zodiac = "Tiger"; }
                elseif ($Y == 7) { $zodiac = "Rabbit"; }
                elseif ($Y == 8) { $zodiac = "Dragon"; }
                elseif ($Y == 9) { $zodiac = "Snake"; }
                elseif ($Y == 10) { $zodiac = "Horse"; }
                elseif ($Y == 11) { $zodiac = "Goat"; }
                elseif ($Y == 0) { $zodiac = "Monkey"; }
                elseif ($Y == 1) { $zodiac = "Rooster"; }
                elseif ($Y == 2) { $zodiac = "Dog"; }
                else { $zodiac = "Pig"; }
                
               echo "You were born in <b>$zodiac</b> year!";
            }
            validation();
        }
        ?>
    </body>
</html>