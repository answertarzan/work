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
<h2>printing if anumber is divisible by 2 or 3</h2>
        <?php
        $eric=5;
        $rich;
        if($eric%2==0 || $eric%3==0){
         echo "this is divisible by two or three:".$eric;
        }
       
        else{
        echo "this number is not divisible by two or three:".$eric;
        }
        
        ?>
</body>
</html>