<html>
<head>
    <meta charset="UTF-8">
    <title>RegExForm</title>
</head>
<body>
<?php
	function is_valid_mail($email)
	{
		$pattern = "/[a-zA-Z0-9]*@[a-zA-Z0-9-]*\.[A-Za-z]{2,5}/";
		if (preg_match($pattern, trim($email))) return true;
		else return false;
	}
?>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (is_valid_mail($_POST["txtEmail"])) {
	        $Email = htmlspecialchars($_POST['txtEmail']);
            echo $Email." viene considerata come email valida";
        } else {
            echo "Email non valida";
        }
    } else {
            ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="application/x-www-form-urlencoded">
                <label>
                    <input type="email" name="txtEmail" placeholder="Inserisci la tua email">
                </label>
                <br>
                <input type="submit" name="submit" value="Submit">
            </form>
            <?php
        }
?>
</html>