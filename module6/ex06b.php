<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Exercise 06b</title>
</head>
<body>

<?php
	//while example into for loop
	for($count = 1; $count <= 10; $count++){
		echo "The number is $count </br>";
		$count *= 3;
	}

	//do while into foreach
	$MonthsOfYear = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
	foreach($MonthsOfYear as $temp){
		echo $temp, "</br>";
	}
?>

</body>
</html>