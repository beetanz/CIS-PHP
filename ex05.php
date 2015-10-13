<!Doctype html>
<!File Name = "ex05.php">
<!Student Name = "Ben Tanzer">

<head><body>

    <?php
    if ($_POST) {
        $lines = $_POST["lines"];
        for ($i = 0; $i < $lines; $i++) {
            if (($i%2)==0) { echo "<hr size=1 width=50% color='black'>";}
            else { echo "<hr size=1 width=100% color='black'>";}

    }
    }
    else {
        ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        How many lines? <input type='text' name='lines'>
        <input type="submit" value="Check">
    </form>
    <?php
    }
    ?>
</body></head>