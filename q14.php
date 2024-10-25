<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<h2>calculation of the triangle's Area</h2>
        <?php
        
        $base=7;
        $height=5;
        $area=(1/2)*$base*$height;
        if($area>50){
         echo "$area :Large triangle";
        }
        else {
         echo " $area :Small triangle";
        }
        ?>
</body>
</html>