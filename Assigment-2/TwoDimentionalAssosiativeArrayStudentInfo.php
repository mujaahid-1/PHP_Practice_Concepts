<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $students = array(
        "CA221" => array("Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley "),
        "CA223" => array("Name" => "Ahmed Abdi Jama", "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
        "CA224" => array("Name" => "Amina Nur Adan", "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley"),
    );

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Phone</th><th>Address</th></tr>";

    foreach ($students as $id => $info) {
        echo "<tr>";
        echo "<td>" . $id . "</td>";

        foreach ($info as $student => $name) {
            echo "<td>" . $name . "</td>";
        }

        // Same as above.
        // echo "<td>" . $id . "</td>";
        // echo "<td>" . $info["Name"] . "</td>";
        // echo "<td>" . $info["Phone"] . "</td>";
        // echo "<td>" . $info["Address"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>

</body>
</html>