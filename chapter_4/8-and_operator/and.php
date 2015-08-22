<html>
    <head>
        <title>html0308</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <h3>AND OPERATORS</h3>
        <?php
            $name=$_POST['name'];
            $birthyear=$_POST['birthyear'];
            $current_year=date('Y');
            $age= $current_year - $birthyear;
            $slepthour=$_POST['slepthour'];
            $years_slept=($slepthour/24)*$age;
            print"Your name is $name and your are $age years old<br>";
            print "Your total sleepingtime is $years_slept<br>";
            if($age>50 && $slepthour>15)
            {
                print"you better plan for your retirement<br>";
                print"You sleep too much";
                
            }
            else
            {
                print "time is on your side!really.<br>";
                print "i mean it to you too<br>";
            }
        ?>
    </body>
</html>
    