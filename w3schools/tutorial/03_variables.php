<!DOCTYPE html>
<html>
<body>
<?php
	// Tipologia di commento: 1
	echo "Il mio secondo script php <br>";
?>

<br>

<?php
	# Tipologia di commento: 2
	$nome = "Francesco";
	echo "Il mio nome è " . $nome . "<br><br>";
	
	function displayAge(): void
	{
		global $Anni1;
		echo "<p> La variabile <i>Anni1</i> all'interno di questa funzione equivale a: $Anni1 <br>";
	}
	
	function sumTestStatic(): void
	{
		static $x = 0;
		echo $x;
		$x++;
	}
	
	$Anni1 = 10;
	$Anni2 = 10;
	displayAge();
	echo "Mentre in questa riga equivale a $Anni1 Anni <br>";
	sumTestStatic();
?>

<?php
	/*
	 * Commenti Multilinea
	phpinfo()
	*/
?>
</body>
</html>
