<!Doctype html>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            How many drawings? <input type="text" name="draw">
            <input type="submit" valie=" Display "</form>
        
        <hr size="1">
        
        <?php
        if ($_POST)
        {
            $draw = $_POST["draw"];
            
            echo "Superlotto numbers:<br>";
            
            for ($i=0; $i<$draw; $i++)
            {
                createNumber(); //call the function
            }
        }
        function createNumber()
        {
            $n1 = Rand(1,49);
           
            do {
                $n2 = Rand(1,49);
            } while ($n2 == $n1);
            
            do {
                $n3 = Rand(1,49);
            } while ($n3 == $n2 || $n3 == $n1);
            
            do {
                $n4 = Rand(1,49);
            } while ($n4 == $n3 || $n4 == $n2 || $n4 == $n1);
            
            do {
                $n5 = Rand(1, 49);
            } while ($n5 == $n4 || $n5 == $n3 || $n5 == $n2 || $n5 == $n1);
            
            $str = "$n1 $n2 $n3 $n4 $n5";
            $str .= " mega: " . Rand(1,27) . "<br>";
            
            echo $str;
        }
        ?>
    </body>
</html>