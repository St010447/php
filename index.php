<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Peko</title>
	<link rel="icon" href="/pekoIcon.png">
</head>

<body>
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
			return "My car is " . $this->color . " " . $this->model . "!";
		}
	}
	$myCar = new Car("black", "volvo");
	echo $myCar->message();
	echo "<br>";
	$myCar = new Car("red", "toyota");
	echo $myCar->message();




	?>
</body>

</html>