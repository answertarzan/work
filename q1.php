<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>answers of the assessment</title>
    <style>

      body{
         background-color:rgb(143, 40, 104);
         color: rgb(123, 227, 230);
      }
      h2{
         color:chartreuse;
      }
    </style>
</head>
<body>
    <center>
        <h2>electricity bill
        </h2>
        <?php

         $unit=300;
         if($unit<=100){
            echo "No charge";

         }  
         elseif($unit<=200){
            echo " the bill paid is 1500frw";
         }          
         elseif($unit<=300){
            echo " the bill paid is 2500frw";
         }
         else{
            echo "invalid bill";
         }

        ?>        
    </center>
</body>
</html>