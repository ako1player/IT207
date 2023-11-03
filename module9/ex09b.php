<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Example 09a</title>
</head>
<body>

<?php
	$count = 1;
	$file = fopen("ex9b.csv", "r");
	do{
	print_r(fgetcsv($file));
	}while (!feof($file));
	fclose($file);
?>

</body>
</html>