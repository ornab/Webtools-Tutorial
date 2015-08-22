<html>
    <head>
        <title>html0308</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <h2>HTML Table</h2>
        <?php
            $apple=$_POST['apple'];
            $pears=$_POST['pears'];
            $totalfruit=$apple+$pears;
            $diff=$apple-$pears;
            $reverse=-$diff;
            $multi=$apple*$pears;
            $divide=$apple/$pears;
            $module=$apple%$pears;
        ?>
        <table border="1">
            <tr>
                <th>Description</th>
                 <th>Calculated amount</th>
            </tr>
            <?php
                print "<tr><td>the number of apple</td><td>$apple</td></tr>/n";
                print "<tr><td>the number of pears</td><td>$pears</td></tr>/n";
                print"<tr><td>The number of apple than pears</td><td>$diff</td></tr>/n";
                print"<tr><td>The reverse of that would be</td><td>$reverse</td></tr>/n";
                print "<tr><td>apples divede between three would get</td><td>$divide</td></tr>/n";
                print"<tr><td>apples left over between would be</td><td>$module</td></tr>/n";
                print"<tr><td>rounded to two decimal places would be</td><td>";
                print number_format($divide, 2);
                print "</td></tr>";
            ?>
        </table>
    </body>
</html>
    