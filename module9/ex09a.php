<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Example 09a</title>
</head>
<body>

<?php
	if (get_magic_quotes_gpc()) {
		echo "gpc is on<br>";
	}else{
		echo "gpc is off<br>";
	}

	if (get_magic_quotes_runtime()) {
		echo "runtime is on";
	} else{
		echo "runtime is off";
	}
?>

</body>
</html>