<!Doctype html>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Enter an integer: <input type="text" name="n1">
            <input type="submit" value="Check"></form>
        <?php
        if ($_POST) {
            $n = $_POST["n1"];
            $f = 1;
            // factorial
            for ($i = 1; $i < $n; $i++) {
                $f *= $i;
            }
            echo "Factorial ($n!) = $f<br>";
// harmonic numbers 1/1 + 1/2 + 1/3 +... + 1/n
            $h = 0;
            $i = 1;
            while ($i <= $n) {
                $h += 1 / $i;
                $i++;
            } echo "Sum of harmonic numbers (&#8721;1/n) = $h<br>";
//sum of first n squares: 1^2 + 2^2 + 3^2 +........n^2
            $s = 0;
            $i = 1;
            do {
                $s += $i * $i;
                $i++;
            } while ($i <= $n);
            echo "Sum of first n squares: (&#8721;n^n) = $s<br>";
        }
        ?>
    </body> </html>