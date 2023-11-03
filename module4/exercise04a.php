<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Example 04a</title>
</head>
<body>
	<?php
		$number1 = 20.20;
		$number2 = "20.20";

		echo "<p>number1 = $number1";
		echo "<p>number2 = $number2";
		echo "<p>number1 type is ", gettype($number1);
		echo "<p>number2 type is ", gettype($number2);
	?>
</body>
</html>