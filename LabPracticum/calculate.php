<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<title>Calculate</title>
</head>
<body>
<div class="title">
	<h2>Total Shipping Cost</h2>
</div>
<div class="form">
<?php
	function calculate(){
		$weight = $_POST['Weight'];
		$train = $_POST['Train'];
		$truck = $_POST['Truck'];
		$car = $_POST['Car'];

		echo "For a $weight pound package, it is estimated that:<br><br>";

		$bytrain = ($train * .01) * $weight;
		echo "$$bytrain Train <i>freight</i> cost<br>";

		$bytruck = ($truck * .02) * $weight;
		echo "$$bytruck Truck <i>freight</i> cost<br>";

		$bycar = ($car * .05) * $weight;
		echo "$$bycar Car <i>freight</i> cost<br>";

		$total = $bycar + $bytruck + $bytrain;

		echo "<div class='total'>Total shipping charges: $$total</div>";
	}

	echo calculate();
?>
	</div>

	<div class="modify">
		<?php include("lastmodify.php"); ?>
		<a href="index.html">Return to form page.</a>
	</div>

</body>
</html>