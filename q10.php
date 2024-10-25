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
<h2>calculating body mass index</h2>
        <?php
        
        $W=59;
        $H=1.68;
        $BMI=$W/$H;
        $v;
        if ($BMI<18.5){
         $v="underweight";
        }
        elseif(18.5<=$BMI&&$BMI<24.9){
         $v="normal weight";

        }
        elseif(25<=$BMI&&$BMI<29.9){
         $v="overweight";
        }
        elseif($BMI>=30) {
         $v="obese";
        }
        echo "the BMI is showing that i am:".$v;
        ?>
</body>
</html>