<!Doctype html>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Begin number:
            <input type="text" name="begin" size=5><br />

            End number:
            <input type="text" name="end" size=5><br />

            Increment by:
            <input type="text" name="inct" size=5><br />

            <input type="submit" value="Check">
        </form>

        <?php
        if ($_POST) {
            $begin = $_POST["begin"];
            $end = $_POST["end"];
            $inct = $_POST["inct"];

        echo "<table border='1'><tr>",
        "<th><i>for</i> loop</th>",
        "<th><i>while</i> loop</th>",
        "<th><i>do..while</i> loop</th></tr>";

        echo "<tr><td>";
        // for loop
        for ($i = $begin; $i <= $end; $i += $inct) {
            echo "$i<br />";
        }

        echo "</td><td>";
        // while loop
        $i = $begin;
        while ($i <= $end) {
            echo "$i<br />";
            $i += $inct;
        }
        echo "</td><td>";
// do..while loop
        $i = $begin;
        do {
            echo "$i<br />";
            $i += $inct;
        } while ($i <= $end);
        echo "</td></tr></table>";
        }?>
    </body>
</html>