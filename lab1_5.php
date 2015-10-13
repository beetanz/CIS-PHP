<!Doctype html>
<html>
    <body>
        <?php
        echo "This is the firstline.<br>", // <br> - line breaker
        "<b>This line is bold-faced.</b><br>", // <b> bold
        "<u>This line is underlined.</u><br>", // <u> underline
        "<i>This line is italic.</i><br>", // <i> italic
        "<s>This line is striked out.</s><br>", // <s> strike out
        "A individual paragraph....</p>", // <p> paragraph
        "<hr size='1' width='90%'>"; // <hr> horizontal line

        echo "Fruit:<ul><br>", // <ul> unordered list
        "<li>apple</li><li>banana</li></ul>"; // <li> list item
        echo("smartphone:<ol><li>HTC</li><li>Samsung</li></ol>"); // <ol> ordered list

        print("<table border='1'>"); // <table> - define a table 
        print("<tr><td>A</td><td>B</td></tr>"); // <tr> - define a row 
        print("<tr><td>C</td><td>D</td></tr>"); // <td> - define a cell 
        print("</table>");
        ?>

    </body>
</html>