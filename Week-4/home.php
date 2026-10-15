<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function sum () {
        $t = 0;
        $t++;
        echo $t . "<br>";
    }

    sum();
    sum();
    sum();

    // Using static keyword makes the function not to reset t value so the result can be {1,2,3}
    function sum1 () {
        static $t = 0;
        $t++;
        echo $t . "<br>";
    }

    sum1();
    sum1();
    sum1();
    ?>
</body>
</html>