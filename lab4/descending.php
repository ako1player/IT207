<!--This webpage is made by Adrian Garcia Rios-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Posted Comments</title>
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
		<h1>Posted Comments</h1>
		<?php
			if (!empty($_POST["delete"])) {
				$file = file("comments.txt");
				$count = count($file);
				//echo $count;
				$delete = $_POST["delete"]-1;
				if($count < $delete){
					echo "Comment number $delete does not exist.";
				}else{
					unset($file[$delete]);
					array_values($file);
					$write = fopen("comments.txt", "w");
					fwrite($write, implode($file));
				}

			}
		?>
		<?php


			$file = file("comments.txt");
			//print_r($file);
			$count = count($file);
			$index = 1;
			rsort($file);
			for ($i=0; $i < $count; $i++) { 
				$data = explode(",", $file[$i]);
				echo "$index. ";
				echo "Name: <a href='mailto:$data[1]'>$data[0]</a><br>";
				echo "Comments: $data[2]<br>";
				$index++;
			}
		?> 
		<a href="index.php"><b>Add New Comment</b></a><br>
		<a href="ascending.php"><b>Sort Comments A-Z (by name)</b></a><br>
		<a href="descending.php"><b>Sort Comments Z-A (by name)</b></a><br>
		<form action="" method="post">
			Delete Comment Number <input type="text" name="delete">
			<input type="submit" name="" value="Delete">
		</form>
	</div>	
	<div id="copyright">
		<footer id="footer">Copyright Content, <a href="https://oai.gmu.edu/mason-honor-code/" target="_blank">GMU Honor Code</a></footer>
	</div>
	</div>
</body>
</html>