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
		<?php
			function createentry(){
				$fname = $_POST["fname"];
				$lname = $_POST["lname"];
				$email = $_POST["email"];
				$pnumber = $_POST["pnumber"];
				$address = $_POST["address"];
				$city = $_POST["city"];
				$state = $_POST["state"];
				$zip = $_POST["zip"];
				$entry = array("First Name" => $fname, "Last Name" => $lname, "Email" => $email, "Phone Number" => $pnumber,"Address" => $address, "City" => $city, "State" => $state, "Zip" => $zip);
				$file = "people.txt";
				$openfile = fopen($file, "a");
				flock($openfile, LOCK_EX && LOCK_NB);
				//use fwrite?
				foreach ($entry as $element) {
					fwrite($openfile, $element."\n");
				}
				flock($openfile, LOCK_UN);
				fclose($openfile);
				/*if(is_writable($file)){
					if(!$openfile){
						echo "File Does Not Exist.";	
					}
					if (file_put_contents($file, $entry, FILE_APPEND)) {
						echo "Your Entry has been created!<br>";
					}else{
						echo "Cannot Write to Entry.";
					}
					fclose($openfile);
				}else{
					echo "File is not writable.";
				}*/
			}

			if (isset($_POST["addentry"])) {
				createentry();
				echo "Your Entry has been created!";
			}
		?>
		<div id="directory">
				<a href="index.php">Return To Directory</a>
		</div>
	</div>	
	<div id="copyright">
		<footer id="footer">Copyright Content, <a href="https://oai.gmu.edu/mason-honor-code/" target="_blank">GMU Honor Code</a></footer>
	</div>
	</div>
</body>
</html>