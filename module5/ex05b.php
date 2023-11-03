<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Example 05b</title>
</head>
<body>

<?php
	function mod($value1=1, $value2=1){
		$output = $value1 % $value2;
		echo "Module: ", $output, "<br />";
	}
	
    function modout($value3, $value4)
	{
		$output = $value3 % $value4;
		return $output;		
	}

	mod(10,4);
	echo "Module: ", modout(21,4);
?>

</body>
</html>