<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Example 04b</title>
</head>
<body>

<?php
	$greatlakes1 = array("Superior", "Ontario", "Michigan", "Huron", "Erie");

	$greatlakes2[] = "Superior";
	$greatlakes2[] = "Ontario";
	$greatlakes2[] = "Michigan";
	$greatlakes2[] = "Huron";
	$greatlakes2[] = "Erie";

	echo "<p>greatlakes 1 array: ", print_r($greatlakes1);
	echo "<p>greatlakes 2 array: ", print_r($greatlakes2);
?>
<p>No differences detected.</p>
</body>
</html>