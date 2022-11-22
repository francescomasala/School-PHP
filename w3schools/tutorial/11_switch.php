<!DOCTYPE html>
<html>
<body>
<?php
echo "Il mio primo script php <br>";

?>

<br>

<?php
// Esercizio Switch PHP

$favcolor = "Blu";

switch ($favcolor) {
    case "Rosso":
        echo "Il tuo colore preferito è il rosso!";
        break;
    case "Verde":
        echo "Il tuo colore preferito è il verde!";
        break;
    case "Blu":
        echo "Il tuo colore preferito è il blu!";
        break;
    default:
        echo "Il tuo colore preferito non è rosso, verde o blu!";
}
?>

</body>
</html>