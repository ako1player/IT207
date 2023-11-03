<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Example 05a</title>
</head>
<body>

<?php
	$days = cal_days_in_month(CAL_GREGORIAN, 9, 2020);
	($days > 29) || ($days < 29) ? $output = "September has $days days and is a normal month." : $output = "September has $days days and is a leap month.";
	echo $output;
?>

</body>
</html>