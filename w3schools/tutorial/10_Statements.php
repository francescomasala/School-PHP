<!DOCTYPE html>
<html>
<body>
<?php
echo "Il mio primo script php <br>";

?>

<br>

<?php
// Esercizio statement PHP
$t = date("H");

if ($t < "10") {
    echo "Have a good day!";
} elseif ($t < "20") {
    echo "Have a good night!";
} else {
    echo "Have a good day!";
}
?>

</body>
</html>