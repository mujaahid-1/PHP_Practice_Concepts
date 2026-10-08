<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $singleDimentionArr = Array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

    // Two dimentional array.
    $student = array(
        array("Mohamed", "Mohamud", 20),
        array("Xasan", "Cali", 23)
    );

    foreach($student as $s) {
        foreach($s as $v) {
            echo "$v" . "<br>";
        }
    }

    // is_array function
    if(is_array($student)) {
         echo "It's an array";
    }
    else {
        echo "It's not an array";
    }

    echo "<br>";
    // in_array function.
    $inArray = array("Mohamed", 2);

    if (in_array("Mohamed", $inArray)) {
        echo "Mohamed is here <br>";
    }
    else {
        echo "Mohamed is not here <br>";
    }

    if (in_array("Mohamed", $student[0])) {
        echo "Mohamed is found <br>";
    }
    else {
        echo "Mohamed is not found! <br>";
    }

    // Display size of an array using count.
    echo "The size of array is count($singleDimentionArr) <br>";
    echo 'The size of an array is count($singleDimentionArr) <br>';
    echo "The size of an array is " . count($singleDimentionArr) . "<br>";


    // Default parameter.
    function sum($x, $y=100) {
        $z = $x+$y;
        echo $z;
    }
    sum(200);
    ?>
</body>
</html>