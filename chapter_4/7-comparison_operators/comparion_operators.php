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
            
            
            if($name=='ornab')
            {
                print"You are the instructor<br>";
            }
            else
            {
                if($name > "M")
                {
                    print"<p>You are $name,and your name comes after L in the alphabet</p>";
                }
                else
                {
                    print"<p>You are $name,and your name comes befkore M in the alphabet</p>";
                }
            }

            if($birthyear>1950)
            {
                print"You born after 1950.";
            }
            elseif($birthyear==1950)
            {
                print"You born in 1950.";
            }
            else
            {
                print"You born before 1950";
            }
            print"-END-";
        ?>
    </body>
</html>
    