<!--This webpage is made by Adrian Garcia Rios-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Online Contacts Directory</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<div id="wrapper">
	<?php readfile("menu.inc"); ?>
	<div id="information">
		<div id="course">
			<p><b>IT207 DL1 Fall2020</b></p>
			<p>Daniel Garrison</p>
			<p>George Mason University</p>
		</div>
		<div id="name">
			<?php include("name.php"); ?>
			<p><a href="mailto:agarciar@gmu.edu">agarciar@gmu.edu</a></p>
			<?php include("lastmodify.php"); ?>
		</div>
	</div>
	<div id="labcontent">
		<h2>Online Contacts Directory</h2>
		<h4>Search For a Contact</h4>
		<form action="directory.php" method="post">
			First Name: <input type="text" name="fname"><br><br>
			Last Name: <input type="text" name="lname"><br><br>
			<input type="submit" name="search" value="Search">
			<div id="newentry">
				<a href="newentry.php">Add New Contact Entry</a>
			</div>
		</form>
	</div>	
	<div id="copyright">
		<footer id="footer">Copyright Content, <a href="https://oai.gmu.edu/mason-honor-code/" target="_blank">GMU Honor Code</a></footer>
	</div>
	</div>
</body>
</html>