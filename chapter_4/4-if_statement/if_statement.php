<html>
    <head>
        <title>html0308</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <h3>IF STATEMENT</h3>
        <?php
            $name=$_POST['name'];
            $birthyear=$_POST['birthyear'];
            $current_year=date('Y');
            $age= $current_year - $birthyear;
            print"Your name is $name and your are $age years old";
            if($age>50)
            {
                print"you better plan for your retirement<br>";
            }
            print"-END-";
        ?>
    </body>
</html>
    