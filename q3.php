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
<h2>calculating the road tax </h2>
        <?php


       $cost=700000;
       $tax;
       if($cost>100000){
         $tax=($cost*15)/100;
       }
      else if($cost>500000 & $cost<=1000000){
         $tax=($cost*10)/100;
       }
      else if($cost<=100000){
         $tax=($cost*5)/100;
       }
       else{
         $tax="no money paid mentioned";
       }
       echo "$cost FRW  your road tax is $tax";
      
        ?>
</body>
</html>