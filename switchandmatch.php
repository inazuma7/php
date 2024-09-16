<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    
    $bool = true;
    $a = 1;
    $b = 4;

    $result = match ($a){
        1,3,5 => "Variable is equal to 1",
        2 => "variable equal to 2",
        default => "none were a match",
    };
    echo $result;

    /*switch ($a){
        case 1:
            echo " the first case is correct";
            break;

        case 2:
            echo "the second case is correct";
            break;

        default:
        echo "none of the condition is true";    
    }*/
   

    
    
    
    ?>
</body>
</html>