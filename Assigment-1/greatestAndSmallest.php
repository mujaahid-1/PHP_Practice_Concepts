<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
$num1 = 15;
$num2 = 42;
$num3 = 28;

$greatest = $num1;
if ($num2 > $greatest) {
    $greatest = $num2;
}
if ($num3 > $greatest) {
    $greatest = $num3;
}

$smallest = $num1;
if ($num2 < $smallest) {
    $smallest = $num2;
}
if ($num3 < $smallest) {
    $smallest = $num3;
}

echo "Greatest: $greatest <br>";
echo "Smallest: $smallest <br>";
?>
</body>
</html>