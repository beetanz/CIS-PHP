<!DOctype html>

<html>
    <style type="text/css">
        td{
            width:30px;
        }
        table{
            font-size:14px;
            font-family:arial;
            text-align: center;
        }
    </style>
    <?php
    date_default_timezone_set("America/Los_Angeles");

    $d = date("j"); // date of month without leading zeros
    $m = date("n"); // number of month
    $Y = date("Y"); // 4 digit year
    //determine what weekday the 1st day of the month is 0 - Sun
    $w = date("w", mktime(0, 0, 0, $m, 1, $Y));

    //determine the total number of days in that month
    $days_of_month = cal_days_in_month(CAL_GREGORIAN, $m, $Y);

    $M = date('F'); // full month literal
    ?>

    <table>
        <caption>
            <?php date_default_timezone_set("America/Los_Angeles");
            echo "$M $d $Y";
            ?>, Los Angeles
        </caption>

        <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
            <th>Sun</th>
        </tr>

        <?php
        date_default_timezone_set("America/Los_Angeles");
        if ($w != 0) {
            $k = 0;
            while ($k < $w) {
                echo "<td></td>";
                $k++;
            }
        }
        $i = 1;
        while ($i <= $days_of_month) {
            if (($i + $w - 1) % 7 == 0) {
                /* take current date ($i), add the day of the week the month starts ($w),
                 * and subtract 1 beacuse we want the number of days skipped, 
                 * not the day of the week the month started on */
                echo "</tr><tr><td>$i</td>";
            } elseif ($i == $d) {
                echo "<td bgcolor=\"red\"><b>$i</b></td>";
            } else {
                echo "<td>$i</td>";
            }
            $i++;
        }
        ?>
    </tr>
</table>
<p>

        <?php
        date_default_timezone_set("America/Los_Angeles");
        echo date("D M d, Y g:iA T") . "</br>";
        ?>
</p> 
</html>