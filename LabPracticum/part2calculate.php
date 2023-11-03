<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<title>Calculate</title>
</head>
<body>
<div class='title'>
	<h2>Passenger Distribution Results</h2>
</div>
<div class="form">
<?php

	function visual($value){
		for($x=0; $x<$value; $x++){
			echo "o";
	}
}

	function calculate(){
		$passengers = $_POST['Passengers'];
		$bus = 30;
		$car = 4;
		$buscal = floor($passengers/$bus);
		$modbus = $passengers % $bus;
		$modcar = $modbus % $car;
		$carcal = floor($modbus/$car);

		echo "$buscal buses needed<br>","<div class='output'>",visual($buscal),"</div><br>";
		echo "$carcal cars needed<br>", "<div class='output'>",visual($carcal),"</div><br>";
		echo "$modcar Passengers left over<br>", "<div class='output'>",visual($modcar),"</div><br>";
}
	$passengers = $_POST['Passengers'];
	echo "$passengers passengers need transportation:<br><br>";
	echo calculate();
?>
</div>
	<div class="legend">
		<p><b>Passengers per Bus = 30 | per Car = 4</b></p>
	</div>
	<div class="modify">
		<?php include("lastmodify.php"); ?>
		<a href="part2.html">Return to form page.</a>
	</div>

</body>
</html>