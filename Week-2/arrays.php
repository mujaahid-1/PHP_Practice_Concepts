<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $collection = array();

    $collection[0] = 2;
    $collection[1] = "Mujaahid";
    $collection[2] = 10;
    $collection[3] = 909.50;

    // Display using vardump function.
    var_dump($collection, "<br>");

    // Foreach loop
    foreach($collection as $el) {
        echo "$el <br>";
    }

   $AssosiativeArray = array(
    "id" => "123",
    "name" => "Mujaahid",
    "age" => "30",
   );

   echo "$AssosiativeArray[id] <br>";

   foreach($AssosiativeArray as $key => $el) {
    echo "$key: $el <br>";
   };
    ?>
</body>
</html>