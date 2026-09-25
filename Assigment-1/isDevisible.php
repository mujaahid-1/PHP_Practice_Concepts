<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 5;
    if ($num % 3 == 0 && $num % 5 == 0) 
        echo "Devisible by both";
    elseif ($num % 3 == 0)
        echo "Devisible by 3";
    elseif ($num % 5 == 0) 
        echo "Divisible by 5";
    else 
        echo "Not devisible by both";
    
    ?>
</body>
</html>