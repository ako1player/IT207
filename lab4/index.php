<!--This webpage is made by Adrian Garcia Rios-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Add Comments</title>
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
		<h2>Huh?</h2>
		<p>Kirschner and Karpinski report that:<br>
			Students who used social networking sites while studying scored 20% lower on tests and students who used social media had an average GPA of 3.06 versus non-users who had an average GPA of 3.82.<br>Source: Paul A. Kirschner and Aryn C. Karpinski, "Facebook and Academic Performance," Computers in Human Behavior, Nov 2010</p>
		<h1>Add Comments</h1>
		<form id="index" action="commentsadded.php" method="post">
			Name: <input type="text" name="name"><br>
			E-mail: <input type="email" name="email"><br>
			Comments: <textarea name="comments"></textarea><br>
			<input type="submit" name="sign" value="Sign">
			<input type="reset" name="reset" value="Reset Form">
		</form>
		<a href="postedcomments.php"><b>View Posting Comments</b></a><br>
		<a href="addcommentsdb.php"><b>Add Comments to Database</b></a>
	</div>	
	<div id="copyright">
		<footer id="footer">Copyright Content, <a href="https://oai.gmu.edu/mason-honor-code/" target="_blank">GMU Honor Code</a></footer>
	</div>
	</div>
</body>
</html>