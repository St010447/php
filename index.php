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
	<div style="display:flex;width:1600px">

		<div class="leftDiv" style="position:relative;border:grey solid;width:50%">

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
			echo "<br>";
			echo '"one two three four "';
			echo "strLength=";
			echo strlen("one two three four");  //  strlen=18
			echo "<br>";
			echo "'one two three four' is " . str_word_count('one two three four') . " word";

			echo '<br>';
			echo '"abcde" reverse is ';
			echo strrev("abcde"); //  out put "edcba"
			echo '<br>';
			echo " 'ld' is start at";
			echo strpos("hello world!", "ld"); //output =9    #   h=0
			echo '<br>';
			echo str_replace("world", "Peko", "hello world!");
			echo '<br>';
			echo PHP_INT_SIZE; // int 8 bytes
			echo '<br>';
			$a = "123";
			$b = 123;
			echo is_int($a);
			echo '<br>';
			echo is_int($b);

			?>
		</div>
		<div class="rightDiv" style="position:relative;color:gray;width:50%;height:100%;">
			<img src="/Gura.jpg" alt="cute Gura">

			<a href="https://www.youtube.com/watch?v=qNIhngowViI" target="_blank">
				點我
				<img src="https://i.ytimg.com/vi/qNIhngowViI/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAcjxycKMWCOURGNSzH43GXZio9sw" alt="king">
			</a>
			<form action="sql.php" method="post">
				<label>username
					<input type="text" name="username">
				</label>
				<label>password
					<input type="password" name="password">
				</label>
				<input type="submit" value="login">
			</form>

		</div>
	</div>
</body>

</html>