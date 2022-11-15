<!DOCTYPE html>
<html>
<body>
<?php
echo "Il mio primo script php <br>";

?>

<br>

<?php
// Esercizio Numeri W3Schools
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_float($x));

$x = 1.9e411;
var_dump($x);

$x = acos(8);
var_dump($x);

$x = 5985;
var_dump(is_numeric($x));

$x = "54321";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

// PHP Cast
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

// PHP Pi
echo pi();
?>

</body>
</html>

