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
<h2>calculating the simple interest</h2>
        <?php
        $p=50000;
        $t=12;
        $r=1.5;
        $i=($p*$t*$r)/100;
        echo "the interest is:".$i;
        ?>
</body>
</html>