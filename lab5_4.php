<!Doctype html> <html> <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Principal (PV): <input type='text' name='PV'><br>
            Interest rate (r): <input type='text' name='interest'><br>
            Number of payment (n): <input type='text' name='nop'><br>
            <input type="submit" value="Calculate">  </form>
        <?php
        if ($_POST) {
            $PV = $_POST["PV"];
            $r = $_POST["interest"] / 100;
            $n = $_POST["nop"];
            // Total of load payment
            // // find $x = (1 + $r)^n
            $x = 1;
            $i = 1;
            while ($i <= $n) {
                $x *= (1 + $r);
                $i++;
            } $FV = $PV * $x;
            echo "Total loan payment is \$$FV<br>";
            // Monthly payment
// find $x = (1+r)^n
            $x = 1;
            for ($i = 1; $i <= $n; $i++) {
                $x *= (1 + $r);
            }    // find $x = 1/$x
            $x = 1 / $x;
// find $x = 1-$x
            $x = 1 - $x;
// find $x = $r / $x;
            $x = $r / $x;
            $M = $PV * $x;
            echo "Monthly payment is \$$M<br>";
        }
        ?>
    </body> </html>