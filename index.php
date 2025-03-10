<?php

echo "<h1>Welcome PHP!</h1>";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-43</title>
</head>
<body>
  
<h3>Hellow Hypertext pre prossecor.....</h3>

<?php

echo  "This is our First class on PHP.....";

echo  "<h3>Do sum with PHP</h3>";
$x = 15;
$y = 25;

$result = $x+$y;

echo "<h3>15+25</h3> ";

echo "The sum is = ".$result;


echo '<h3>Do sub with PHP </h3>';

$a = 25;
$b = 15;
$result = $a-$b;

echo "<h3> 25-15 </h3>";
echo "The sub is = ".$result;

echo "<h3> Do Multiplication with PHP </h3>";

$j = 25;
$k = 15;

$result = $j*$k;

echo "<h3> 25*15 </h3>";
echo "The mul is = ".$result;
echo "<h3> Do Division with PHP </h3>";

$m = 25;
$n = 5;

$result = $m/$n;

echo "<h3> 25/5 </h3>";
echo "The div is = ".$result."<br><br>";


///Loop///

for ($i=0; $i<5; $i++){
    echo "Hellow PHP! <br>";
}



?>

</body>
</html>