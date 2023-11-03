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
		<h2>Comment Added</h2>
		<?php
			if(isset($_POST["name"])){
				$name = $_POST["name"];
			}
			if(isset($_POST["email"])){
				$email = $_POST["email"];
			}
			if(isset($_POST["comments"])){
				$comments = $_POST["comments"];
			}
			if(isset($_POST["sign"])){
				if (empty($name) || empty($email) || empty($comments)) {
					echo "Please insert Your Name, Email, Or Comments.<br>";
				}else{
					$connect = @mysql_connect("helios.vse.gmu.edu","agarciar","psorta") or die("Error accessing database.");
					mysql_query("USE agarciar");
					mysql_query("INSERT INTO USER VALUES ('$name','$email','$comments')");
					echo "Name: <a href='mailto:$email'>$name</a><br>";
					echo "Comments: $comments<br>";
					mysql_close($connect);
				}
			}
		?>
		<a href="addcommentsdb.php"><b>Someone Else Want to Comment?</b></a><br>
		<a href="postedcommentsdb.php"><b>View Posting Comments</b></a><br>
	</div>	
	<div id="copyright">
		<footer id="footer">Copyright Content, <a href="https://oai.gmu.edu/mason-honor-code/" target="_blank">GMU Honor Code</a></footer>
	</div>
	</div>
</body>
</html>