<html>
    <head>
        <title>not operators</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <h3>AND OPERATORS</h3>
        <?php
            $name=$_POST['name'];
            $city=$_POST['city'];
            print"hey $name";
            if(!($city=='noakhali' || $city=='dhaka'))
            {
                print"chittagong rocks";
            }
            else
            {
                print"You don't live in the best city";
            }
        ?>
    </body>
</html>
    