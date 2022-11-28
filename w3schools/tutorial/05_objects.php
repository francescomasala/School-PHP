<!DOCTYPE html>
<html>
<body>
<?php
	// Tipologia di commento: 1
	echo "Il mio quinto script php <br>";
?>

<br>
<?php
	
	class Car
	{
		public $color;
		public $model;
		
		public function __construct($color, $model)
		{
			$this->color = $color;
			$this->model = $model;
		}
		
		public function message()
		{
			return "My car is a " . $this->color . " " . $this->model . "!";
		}
	}
	
	$myCar = new Car("black", "Volvo");
	echo $myCar->message();
	echo "<br>";
	$myCar = new Car("red", "Toyota");
	echo $myCar->message();
?>
</body>
</html>
