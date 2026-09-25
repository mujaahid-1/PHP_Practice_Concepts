<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

$num = 12345;
$reversed = 0;
$temp = $num;

while ($temp > 0) {
    $digit = $temp % 10;
    $reversed = $reversed * 10 + $digit;
    $temp = (int)($temp / 10);
}

echo "$reversed <br>";
?>
</body>
</html>