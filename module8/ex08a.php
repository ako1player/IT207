<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Example 08a</title>
</head>
<body>

<?php
	$msg = "This is the sentence that you want to replace.";
	if(isset($_POST['search'])){
		$search = $_POST['search'];
	}
	if(isset($_POST['replace'])){
		$replace = $_POST['replace'];
	}

	echo "$msg<br />";
	echo str_ireplace($search, $replace, $msg);
?>

</body>
</html>