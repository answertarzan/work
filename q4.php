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
<h2>Displaying the days of the week</h2>
        <?php
        $day=3;
        $result;
        switch($day){
         case '1':
            $result="sunday";
            break;
            case '2':
               $result="monday";
               break;
               case '3':
                  $result="tuesday";
                  break;
               case '4':
                  $result="wednesday";
                  break;
                  case '5':
                     $result="thursday";
                     break;
                     case '6':
                        $result="saturday";
              break;
             case '7':
               $result="sunday";
           break;
           default:
           $result="no day mentioned";

        }
        echo $result;
        
        ?>
</body>
</html>