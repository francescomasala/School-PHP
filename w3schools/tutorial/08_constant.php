<!DOCTYPE html>
<html>
<body>
<?php
	echo "Il mio ottavo script php <br>";

?>

<br>

<?php
	// Esercizio costanti PHP
	define("GREETING", "Benvenuto nella prova di PHP!");
	echo GREETING;
	
	define("planes", [
		"Boeing",
		"Airbus",
		"Embraer"
	]);
	
	echo planes[1];
	
	function testFunction()
	{
		echo planes[2];
	}
	
	testFunction();
?>

</body>
</html>

