<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Example 10a</title>
</head>
<body>

<?php
	$lakes = array("Superior", "Huron", "Michigan", "Erie", "Ontario");
	print_r($lakes);
	echo "<br>";
	array_splice($lakes, 3, 0, array("Lake Tahoe", "Iliamna Lake"));
	print_r($lakes);
	echo "<br>";
	array_splice($lakes, -2, 2);
	print_r($lakes);
	echo "<br>";
	$lakes2 = array_slice($lakes, 0, 3);
	print_r($lakes2);
?>

</body>
</html>