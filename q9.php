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
<h2>solving quadratic equation</h2>
        <?php
        $a=-1;
        $b=1;
        $c=-1;
        $d=$b*$b-4*$a*$c;
        if($d>0){
         echo "Two real solutions"."<br>";
        
        }
        elseif($d==0){
         echo "One real solution";
        }
        elseif($d<0){
         echo "No real solutions";
        }
        
        ?>
</body>
</html>