<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">radius:</label>
    <input type="text" name="radius" id="">
    <input type="submit" value="calculate">
  </form>
  
</body>
</html>
 
<?php
  //$total = abs($x);
  //$total = round($x);
  //$total = floor($x);
  //$total = ceil($x);
  //$total = pow($x, $y);
  //$total = sqrt($x);
  //$total = max($x, $y, $z);
  //$total = min($x, $y, $z);
  //$total = pi();
  //$total = rand(1, 4);

  $radius = $_POST["radius"];
  $circumference = null;

  $circumference = 2 * pi() * $radius;
  $circumference = round($circumference, 2);
  echo "Circumference is: {$circumference}cm <br>";

  $area = null;
  $area = pi() * pow($radius, 2);
  $area = round($area, 2);
  echo "Area is: {$area}cm^2 <br>"; 


  $volume = null;
  $volume = 4/3 * pi() * pow($radius, 3);
  $volume = round($volume, 2);
  echo "Volume is: {$volume}c^3";

  
?>

