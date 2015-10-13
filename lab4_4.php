<!Doctype html>
<html>
    <body>
        <?php
        //Programmer: Ben Tanzer

        if ($_POST) {
            $choice = $_POST["myurl"];

            switch ($choice) {
                case 'a':
                case 'A':
                    $url = "http://www.ibm.com";
                    break;
                case 'b':
                case 'B':
                    $url = "http://www.att.com";
                    break;
                case 'c':
                case 'C':
                    $url = "http://www.cnn.com";
                    break;
                default:
                    $url = $_SERVER['PHP_SELF'];
                    break;
            }
            echo $error;
            header("Location: " . $url);
            exit;
        } else {
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                A. IBM<br>
                B. ATT<br>
                C. CNN<br>
                Enter your choice [A-C]:

                <input type="text" name="myurl" size="2">
                <input type="submit" value="submit">
            </form>
        <?php } ?>

    </body>
</html>

