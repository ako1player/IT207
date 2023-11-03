<!--This webpage is made by Adrian Garcia Rios-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Office Hour Setup Form</title>
	<link rel="stylesheet" type="text/css" href="calendar.css"/>
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
		<h4>Office Hour Sign Ups</h4>
		<form action="calendar.php" method="post">
			<div class="buttons">
			Student Name: <input type="text" name="student">
			Student Email: <input type="email" name="email">
			<input type="submit" name="submitted" value="Submit">
			<input type="reset" name="" value="Clear">
			<?php
				//Submit
				$to = "adrigar10@gmail.com";//email to my self.
				if (isset($_POST["student"])) {
					$studentname = $_POST["student"];
				}
				if (isset($_POST["email"])) {
					$email = $_POST["email"];
				}
				$message = officehour();
				if(isset($_POST['submitted'])){
					if (empty($email) || empty($studentname)) {
						echo "Insert your name and email.";
					}
					elseif(mail($to, $studentname, $message, $email)) {
						echo "Email successfully sent from $email.";
					}
				}
			?>
			</div>
		<div id="month"><h4><?php echo date('F, Y'); ?></h4></div>
		<div id="calendar">
			<?php
			
			$mon = "monday";
			$tues = "tuesday";
			$wed = "wednesday";
			$thurs = "thursday";
			$fri = "friday";
			$sat = "saturday";
			$sun = "sunday";
			//gets the value of the first day then does a for loop to get the remaining days
			//only works for the month of october to put 00 from Monday-Wednesday because Thursday starts the month
			function getday($value){
				$date = date("2020-10");
				$day = date("d", strtotime("first $value of $date"));
				if($day == 01 || $day == 02 || $day == 03){
					for ($i=$day; $i <= 31;) {
						echo "<div class='value'>$i<br>",gettime($value),"<br></div>";
						echo " ";
						$i = $i+7;
					}
				}elseif ($day != 01 || $day != 02 || $day != 03) {
					echo "<div class='value'>00<br></div>";
					for ($i=$day; $i <= 31;) {
						echo "<div class='value'>$i<br>",gettime($value),"<br></div>";
						echo " ";
						$i = $i+7;
					}
				}
			}
			//gets the submit name from index.php and uses $selected value so that when gettime() gets called
			//on getday() it will get the selected times from monday-friday. EX: getday($mon) would call gettime($mon)
			//and would select all times from monday and create radio buttons for all mondays in the month.
			 function gettime($selected){
				if(isset($_POST["submit"])){
        			if(isset($_POST["$selected"])){ 
        				$hour = $_POST["$selected"];
            			foreach ((array)$hour as $time){  
                			echo "<input type='radio' id='rdbuttons' multiple name='hours' value='$time'>$time</input><br/>";
                			echo "<input type='hidden' value='$time'>";
                		}
        			} 
				}
			}

			function officehour(){
				if (isset($_POST["hours"])) {
					$msg = $_POST["hours"];
					$message = "Office Hour at $msg.";
					return $message;
				}
			}

			echo "<div class='sunday' id='day'>Sunday<br>",getday($sun),"</div>";
			echo "<div class='monday' id='day'>Monday<br>",getday($mon),"</div>";
			echo "<div class='tuesday' id='day'>Tuesday<br>",getday($tues),"</div>";
			echo "<div class='wednesday' id='day'>Wednesday<br>",getday($wed),"</div>";
			echo "<div class='thursday' id='day'>Thursday<br>",getday($thurs),"</div>";
			echo "<div class='friday' id='day'>Friday<br>",getday($fri),"</div>";
			echo "<div class='saturday' id='day'>Saturday<br>",getday($sat),"</div>";
		
		?></div>
		</form>
	</div>	
	<div id="copyright">
		<footer id="footer">Copyright Content, <a href="https://oai.gmu.edu/mason-honor-code/" target="_blank">GMU Honor Code</a></footer>
	</div>
	</div>
</body>
</html>