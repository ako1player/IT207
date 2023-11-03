<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Example 10b</title>
</head>
<body>

<?php
	$mother = array("Uncle1" => "Miguel", "Aunt1" => "Katy", "Grandma1" => "Carmen", "Cousin1" => "Alan");
	$father = array("Uncle" => "Humberto", "Aunt" => "Luz", "Grandma" => "Vilma", "Cousin" => "Bruno");
	$merge = array_merge($mother, $father);
	asort($merge);
	print_r($merge);

?>

</body>
</html>