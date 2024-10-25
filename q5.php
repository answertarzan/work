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
<h2>the months of the year</h2>
        <?php
        $month=8;
        $me;
        if($month==1){
         $me="january";
        }
        elseif($month==2){
         $me="february";
        }
        elseif($month==3){
         $me="march";
        }
        elseif($month==4){
         $me="april";
        }
        elseif($month==5){
         $me="may";
        }
        elseif($month==6){
         $me="june";
        }
        elseif($month==7){
         $me="july";
        }
        elseif($month==8){
         $me="august";
        }
        elseif($month==9){
         $me="september";
        }
        elseif($month==10){
         $me="october";
        }
        elseif($month==11){
         $me="november";
        }
        elseif($month==12){
         $me="december";
        }
        else{
         $me="no month identified";
        }
        echo $me;
        ?>
</body>
</html>