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
<h2>when checking the positive number or negative number</h2>
        <?php
                     $name=-2;
                     if($name>=0){
                        echo "is a positive number:".$name;
                     }
                     else{
                        echo "is a negative number:".$name;
                     }
        ?>
</body>
</html>