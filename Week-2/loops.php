<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
  print "While loop <br>";
  $count = 1;
  while ($count <= 5) {
    echo "$count <br>";
    $count++;
  }


  print "Do While Loop8 <br>";
   $result = 1;
   $n = 5;

   do {
    $result *= $n;
    echo "$n <br>";
    $n--;
   } while ($n > 0);
   echo "$result <br>";

   print "For Loop <br>";
   for ($i = 1; $i <= 10; $i++) {
    echo "$i <br>";
   }
  ?>
</body>
</html>