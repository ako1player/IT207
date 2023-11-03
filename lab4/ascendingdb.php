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
		<h1>Posted Comments on Database</h1>
		<?php
		
			if(isset($_POST["delete"])){
				$delete = $_POST["delete"];
			}
			if(!empty($_POST["delete"])){
				$connect = @mysql_connect("helios.vse.gmu.edu","agarciar","psorta") or die("Error accessing database.");
				mysql_query("USE agarciar");
				$remove = mysql_query("DELETE FROM USER WHERE NAME = '$delete'");
				mysql_close($connect);
			}

			$connect = @mysql_connect("helios.vse.gmu.edu","agarciar","psorta") or die("Error accessing database.");
			mysql_query("USE agarciar");
			$rows = mysql_query("SELECT * FROM USER ORDER BY NAME");
			$data = mysql_fetch_row($rows);
			$count = mysql_num_rows($rows);
			$index = 1;
			for ($i=0; $i < $count; $i++) { 
				echo "$index. ";
				echo "Name: <a href='mailto:$data[1]'>$data[0]</a><br>";
				echo "Comment: $data[2]<br>";
				$data = mysql_fetch_row($rows);
				$index++;
			}
			mysql_close($connect);

		?>
		<a href="addcommentsdb.php"><b>Add New Comment</b></a><br>
		<a href="ascendingdb.php"><b>Sort Comments A-Z (by name)</b></a><br>
		<a href="descendingdb.php"><b>Sort Comments Z-A (by name)</b></a><br>
		<form action="" method="post">
			Delete User Name <input type="text" name="delete">
			<input type="submit" name="" value="Delete">
		</form>
	</div>	
	<div id="copyright">
		<footer id="footer">Copyright Content, <a href="https://oai.gmu.edu/mason-honor-code/" target="_blank">GMU Honor Code</a></footer>
	</div>
	</div>
</body>
</html>