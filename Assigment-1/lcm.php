<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num1 = 8;
$num2 = 12;

$valueOne = $num1;
$ValueTwo = $num2;

while ($ValueTwo != 0) {
    $temp = $ValueTwo;
    $ValueTwo = $valueOne % $ValueTwo;
    $valueOne = $temp;
}

$gcd = $valueOne;

$lcm = ($num1 * $num2) / $gcd;

echo "LCM of $num1 and $num2 = $lcm <br>";
?>
</body>
</html>