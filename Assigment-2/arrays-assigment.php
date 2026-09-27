<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Assigment 2</title>
</head>
<body>
    <?php
    $singleDimentionArr = Array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

    echo "Print each value <br>";
    foreach ($singleDimentionArr as $el) {
        echo "$el <br>";
    }

    echo "<br>";
    echo "Printing total of all elements <br>";
    $count = 0;
    for ($i = 0; $i < 12; $i++) {
        $count += $singleDimentionArr[$i];
    }
    echo $count . "<br>";

    echo "<br>";
    echo "Printing total of even elements <br>";
    $evenCount = 0;
    for ($i = 0; $i < 12; $i++) {
        if ($singleDimentionArr[$i] % 2 == 0) {
            $evenCount += $singleDimentionArr[$i];
        }
    }
    echo $evenCount . "<br>";

    echo "<br>";
    echo "Printing total of odd elements <br>";
    $oddCount = 0;
    for ($i = 0; $i < 12; $i++) {
        if ($singleDimentionArr[$i] % 2 != 0) {
            $oddCount += $singleDimentionArr[$i];
        }
    }
    echo $oddCount . "<br>";

    echo "<br>";
    echo "Pring max num and it's position <br>";
    $maxNum = $singleDimentionArr[0];
    for ($i = 0; $i < 12; $i++) {
        if ($singleDimentionArr[$i] > $maxNum) {
            $maxNum = $singleDimentionArr[$i];
        }
    }
    echo "MaxNum: $maxNum" . "<br>";

    for ($i = 0; $i < 12; $i++) {
        if ($singleDimentionArr[$i] == $maxNum) {
            echo "Position: $i <br>" . " ";
        }
    }

    echo "<br>";
    echo "Pring min num and it's position <br>";
    $minNum = $singleDimentionArr[0];
    for ($i = 0; $i < 12; $i++) {
        if ($singleDimentionArr[$i] < $minNum) {
            $minNum = $singleDimentionArr[$i];
        }
    }
    echo "minNum: $minNum" . "<br>";

    for ($i = 0; $i < 12; $i++) {
        if ($singleDimentionArr[$i] == $minNum) {
            echo "Position: $i <br>" . " ";
        }
    }
    ?>
</body>
</html>