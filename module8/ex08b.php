<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Example 08b</title>
</head>
<body>

<?php
	$gpa = 3.72;
	$msg1 = "I have a 3.72";
	$msg2 = sprintf("I have a %d GPA",$gpa);

	if(strcmp($msg1, $msg2)){
		echo "msg1 is bigger than msg2";
	}else{
		echo "msg2 is bigger than msg1";
	}
	?>
</body>
</html>