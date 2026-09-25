<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$num1 = 18;
$num2 = 24;

$ValueOne = $num1;
$ValueTwo = $num2;

while ($ValueTwo != 0) {
    $temp = $ValueTwo;
    $ValueTwo = $ValueOne % $ValueTwo;
    $ValueOne = $temp;
}

$hcf = $ValueOne;

echo "HCF of $num1 and $num2 = $hcf\n";
?>
</body>
</html>