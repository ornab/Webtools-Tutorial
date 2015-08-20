<html>
<head> <title> 0301 Using Script Tags </title>
<style> body{font-family: Arial, Helvetica, sans-serif;
              font-size: 16px;
             }
</style>

</head>

<body>
   <h1>0301 Using Script Tags </h1>
   <p> What are script tags & why do we need them to run PHP? </p>
  
   <?php
       $today = date ('Y-m-d h:g:s');
       print "<p><b> Today is $today </b> </p>" ;
   ?>
     <p> Do you want to see that again? </p>

   <?php
      print "<p><b> Today is STILL $today </b> </p>";
   ?>
</body>
 </html>