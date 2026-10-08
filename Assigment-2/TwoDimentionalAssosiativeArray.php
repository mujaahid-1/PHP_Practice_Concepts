<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Two dimmentional Assosiative array <br>";
    $colors = array(
    "Light" => array("Red" => "Light Red", "Green" => "Light Green", "Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
    "Dark" => array("Red" => "Dark Red", "Green" => "Dark Green", "Blue" => "Dark Blue")
    );

    echo "<table border='1'>";
    echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";

    foreach ($colors as $row => $values) {
    echo "<tr>";
    echo "<td>" . $row . "</td>";
    
    // foreach ($values as $color => $name) {
    //     echo "<td>" . $name . "</td>";
    // }
    // Same as.
    echo "<td>" . $values["Red"] . "</td>";
    echo "<td>" . $values["Green"] . "</td>";
    echo "<td>" . $values["Blue"] . "</td>";
    echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>