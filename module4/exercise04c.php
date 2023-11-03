<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Example 04c</title>
</head>
<body>

<?php
	echo "postfix";
	$bank = 5;
	echo "<p>Balance: $bank";
	$a = $bank++;
	echo "<p>Deposited 1 dollar, Balance: $bank";

	$b = $bank++;
	echo "<p>Deposited 1 dollar before checking Balance.";
	echo "<p>New Balance: $bank";

	echo "<p>prefix";
	$bank2 = 5;
	echo "<p>Balance: $bank2";
	$c = ++$bank;
	echo "<p>Deposited 1 dollar, Balance: $bank2";

	$d = ++$bank2;
	echo "<p>Deposited 1 dollar before checking Balance.";
	echo "<p>New Balance: $bank2";
?>

</body>
</html>