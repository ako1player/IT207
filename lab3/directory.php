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
		//make the textfields editable. Maybe create textfields with php code inside getting the information for that specific textfield

			function update(){
				$fname1 = $_POST["fname1"];
				$lname1 = $_POST["lname1"];
				$email = $_POST["email1"];
				$pnumber = $_POST["pnumber1"];
				$address = $_POST["address1"];
				$city = $_POST["city1"];
				$state = $_POST["state1"];
				$zip = $_POST["zip1"];
				$entry = array($fname1, $lname1, $email, $pnumber, $address, $city,$state, $zip);
				$file = file_get_contents("people.txt");
				$lines = explode("\n", $file);
				//print_r($lines);
				$merged = array_replace($lines, $entry);
				//print_r($merged);
				$fileopen=fopen("people.txt", "w");
				foreach ($merged as $data) {
					fwrite($fileopen, $data."\n");
				}
				fclose($fileopen);
				echo "Directory Has Been Updated.";
			}

			function search($firstname, $lastname){
				//$fname = implode(" ", array($firstname));
				//$lname = implode(" ", array($lastname));
				$file = file_get_contents("people.txt");
				$lines = explode("\n", $file);
				if(in_array($firstname, $lines) && in_array($lastname, $lines)){
					$data = array_search($firstname, $lines);
					$data2 = array_search($lastname, $lines);
					$data3 = array_search($lastname, $lines) + 1;
					$data4 = array_search($lastname, $lines) + 2;
					$data5 = array_search($lastname, $lines) + 3;
					$data6 = array_search($lastname, $lines) + 4;
					$data7 = array_search($lastname, $lines) + 5;
					$data8 = array_search($lastname, $lines) + 6;
					echo "<form action = 'directory.php' method='post'> First Name: <input type='text' name='fname1' value='$lines[$data]'>";
					echo "Last Name: <input type='text' name='lname1' value='$lines[$data2]'><br><br>";
					echo "Email: <input type='email' name='email1' required='required' value='$lines[$data3]'><br><br>";
					echo "Phone Number: <input type='tel' name='pnumber1' placeholder='703-333-3333' pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}'' required='required' value='$lines[$data4]'><br><br>";
					echo "Address: <input type='text' name='address1' required='required' value='$lines[$data5]'>";
					echo "City: <input type='text' name='city1' required='required' value='$lines[$data6]'><br><br>";
					echo "<label>State:</label>
			<select name='state1' required='required' value='$lines[$data7]'>
				<option value='AL'>AL</option>
				<option value='AK'>AK</option>
				<option value='AR'>AR</option>	
				<option value='AZ'>AZ</option>
				<option value='CA'>CA</option>
				<option value='CO'>CO</option>
				<option value='CT'>CT</option>
				<option value='DC'>DC</option>
				<option value='DE'>DE</option>
				<option value='FL'>FL</option>
				<option value='GA'>GA</option>
				<option value='HI'>HI</option>
				<option value='IA'>IA</option>	
				<option value='ID'>ID</option>
				<option value='IL'>IL</option>
				<option value='IN'>IN</option>
				<option value='KS'>KS</option>
				<option value='KY'>KY</option>
				<option value='LA'>LA</option>
				<option value='MA'>MA</option>
				<option value='MD'>MD</option>
				<option value='ME'>ME</option>
				<option value='MI'>MI</option>
				<option value='MN'>MN</option>
				<option value='MO'>MO</option>	
				<option value='MS'>MS</option>
				<option value='MT'>MT</option>
				<option value='NC'>NC</option>	
				<option value='NE'>NE</option>
				<option value='NH'>NH</option>
				<option value='NJ'>NJ</option>
				<option value='NM'>NM</option>			
				<option value='NV'>NV</option>
				<option value='NY'>NY</option>
				<option value='ND'>ND</option>
				<option value='OH'>OH</option>
				<option value='OK'>OK</option>
				<option value='OR'>OR</option>
				<option value='PA'>PA</option>
				<option value='RI'>RI</option>
				<option value='SC'>SC</option>
				<option value='SD'>SD</option>
				<option value='TN'>TN</option>
				<option value='TX'>TX</option>
				<option value='UT'>UT</option>
				<option value='VT'>VT</option>
				<option value='VA'>VA</option>
				<option value='WA'>WA</option>
				<option value='WI'>WI</option>	
				<option value='WV'>WV</option>
				<option value='WY'>WY</option>
			</select>";
					echo "Zip:<input type='text' name='zip1' required='required' value='$lines[$data8]'><br><br>";
					echo "<input type='submit' name='update' value='Update'></form>";
				}else{
					echo "This Person does not exist in the directory.";
				}
			}
				//echo "<form> First Name: <input type='text' name='fname' value='$fname'>";
				//echo "Last Name: <input type='text' name='lname' value='$lname'></form>";
				if(isset($_POST["fname"])){
					$fname = $_POST["fname"];
				}
				if(isset($_POST["lname"])){
					$lname = $_POST["lname"];
				}
				if(isset($_POST["search"])){
					if (empty($fname) && empty($lname)) {
						echo "You must enter a value in each field. Click your browsers back button to return to the form.";
					}else{
						search($fname,$lname);
					}
				}
				if (isset($_POST["update"])) {
					update();
				}

		?>
			<div id="directory">
				<a href="index.php">Return To Directory</a>
			</div>
		</form>
	</div>	
	<div id="copyright">
		<footer id="footer">Copyright Content, <a href="https://oai.gmu.edu/mason-honor-code/" target="_blank">GMU Honor Code</a></footer>
	</div>
	</div>
</body>
</html>