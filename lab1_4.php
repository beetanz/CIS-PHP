<!Doctype html>
<!-- multiple line HTML comment
Course: PHP Programming
Student: Ben Tanzer
File Name: Lab1_4.php
-->
<html>
    <style type="text/css">
        body {background-color: yellow; // this CSS comment}
        </style>
        <body><!-- Single-line HTML comment: HTML tags define the page layout -->
            <?php
            /* Multiple-line PHP comment
             * This the first line.
             * This is the second line.
             * This is the third line.
             */
            echo date("z") . "<br>"; // single line PHP comment
            # another single line PHP comment
            echo date("l");
            ?>
        </body>
    </html>