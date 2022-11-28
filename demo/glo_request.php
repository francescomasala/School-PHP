<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?prova=ciccio">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// collect value of input field
		$name = htmlspecialchars($_REQUEST['fname']);
		$prova = htmlspecialchars($_REQUEST['prova']);
		if (empty($name)) {
			echo "Name is empty";
		} else {
			echo $name;
			echo "<br>";
			echo "$prova";
		}
	}
?>

</body>
</html>