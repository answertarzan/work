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
<h2>percentage marks display</h2>
        <?php
       $marks=30;
       if($marks>90){
         echo "A";
       }
       elseif($marks>80 &&$marks<=90){
         echo "B";
       }
       elseif ($marks>=60 && $marks<=80) {
         echo "C";

       }
       else{
         echo "D";
       }
        ?>
</body>
</html>