<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Exercise 06b</title>
</head>
<body>

<?php
	$time = date("i:s");
	echo "Current Minute and Seconds: $time<br>";
	
	switch($time){
		case ($time >= "00:00" && $time <= "14:59"):
			echo "We are currently in the first quarter of the hour";
			break;
		case ($time >= "15:00" && $time <= "29:59"):
			echo "We are currently in the second quarter of the hour";
			break;
		case ($time >= "30:00" && $time <= "45:59"):
			echo "We are currently in the third quarter of the hour";
			break;
		case ($time >= "46:00" && $time <= "59:59"):
			echo "We are currently in the fourth quarter of the hour";
			break;
		default:
			echo "You are not in any hour.";
}
?>

</body>
</html>