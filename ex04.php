<?php
//File name: ex04.php
//Student: Ben Tanzer
if ($_POST)
{
    $x = $_POST["num"];
    
    if ($x > 100 || $x <0) : $response = "??: Are you nuts?";
    elseif ($x>=90 || $x==100) : $response = "A: Very good work.";
    elseif ($x>=80) : $response = "B: You did well.";
    elseif ($x>=70) : $response = "C: You did OK.";
    elseif ($x>=60) : $response = "D: You just passed.";
    elseif ($x<60) : $response = "F: You failed.";
    endif;
    echo $response;
}
else
{
        ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Please enter a number <i>here</i>:
        <input type="text" name="num" size="5">
        <input type="submit" value="GO!">
    
    </form></p>

<?php } ?>
