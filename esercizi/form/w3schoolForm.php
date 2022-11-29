<!DOCTYPE html>
<html lang="it-IT">

<?php
	$Num1 = "";
	$Num2 = "";
	$Num3 = "";
	
	function isPost(): bool
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			return true;
		} else {
			return false;
		}
	}
	
	function checkInt($Num): int
	{
		if (preg_match("/^[0-9]+$/", $Num)) {
			return $Num;
		} else {
			return 0;
		}
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$Num1 = htmlspecialchars(checkInt(($_POST["num1"])));
		$Num2 = htmlspecialchars(checkInt(($_POST["num2"])));
		$Num3 = intval($Num1) + intval($Num2);
	}

?>

<head>
    <meta charset="UTF-8">
    <title>SumForm</title>
</head>
<body>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    <label>
        <input name="num1" type="number" placeholder="<?php if (isPost()) {
			echo $Num1;
		} else {
			echo "Inserisci il primo numero";
		} ?>">
    </label>
    <br>
    <label>
        <input name="num2" type="number" placeholder="<?php if (isPost()) {
			echo $Num2;
		} else {
			echo "Inserisci il secondo numero";
		} ?>">
    </label>
    <br>
    <label>
        <input name="res1" type="number" placeholder="<?php if (isPost()) {
			echo $Num3;
		} else {
			echo "Qua vedrai il risultato";
		} ?>" readonly>
    </label>
    <br>
    <input type="submit" name="submit" value="Submit">
    <br>
</form>
</body>
</html>
<?php
