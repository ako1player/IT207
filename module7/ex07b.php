<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Example 07b</title>
</head>
<body>

<?php
	$From = $_POST['from'];
	$To = $_POST['to'];
	$Subject = $_POST['subject'];
	$Message = $_POST['message'];

	$response = mail($To, $Subject, $Message, "From: <agarciar@gmu.edu>");
	if($response == 1){
		echo "Your Message was sent!";
	}
	else {
		echo "Your Message was not sent!";
	}	
?>

</body>
</html>