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
            $slepthour=$_POST['slepthour'];
            $years_slept=($slepthour/24)*$age;
            if(empty($name))
            {
                print"You must enter your name.";
                print"<br>Go back and try again.";
                print"</body></html>";
                exit;
                
            }
            if(empty($slepthour))
            {
                print"You must enter the hours you sleep"; 
                print"<br>Go back and try again.";
                print"</body></html>";
                exit;
                
            }
            else
            {
                if(!is_numeric($slepthour))
                {
                    print"The hours you sleep must be numeric."; 
                    print"<br>Go back and try again.";
                    print"</body></html>";
                    exit; 
                }
            }
            if(empty($birthyear))
            {
                print"You must enter birth year."; 
                print"<br>Go back and try again.";
                print"</body></html>";
                exit;
                
            }
            else
            {
                if(!is_numeric($birthyear))
                {
                    print"The birth year must be numeric."; 
                    print"<br>Go back and try again.";
                    print"</body></html>";
                    exit; 
                }
            
                else
                {
                    $length_year=strlen($birthyear);
                    if($length_year!=4)
                    {
                        print"The birth year must be 4 numbers."; 
                        print"<br>Go back and try again.";
                        print"</body></html>";
                        exit; 
                    }
                }
            }
            
            print"Your name is $name and your are $age years old<br>";
            print "Your total sleepingtime is $years_slept<br>";
            
            if($age>50)
            {
                print"you better plan for your retirement<br>";
                
                if($years_slept>15)
                {
                    
                    print"You sleep too much.";
                }
                else
                    print "i mean it<br>";
            }
            else
            {
                print "time is on your side!really.<br>";
                print "i mean it to you too<br>";
            }
        ?>
    </body>
</html>
    