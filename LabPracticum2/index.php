<!--This webpage is made by Adrian Garcia Rios-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Lab Practicum 2</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<div id="container"><h2>Online Quiz</h2></div>
	<?php
		$file = file("test.txt");
		//$count = count($file);
		$data = explode(",", $file[0]);
		echo "<form action = ' ' method='post'>$data[0]<br> <input type='radio' name='q1' value='$data[1]'> <label for='q1'>$data[1]</label><br> <input type='radio' name='q1' value='$data[2]'> <label for='q1'>$data[2]</label><br> 
		<input type='radio' name='q1' value='$data[3]'> <label for='q1'>$data[3]</label><br> <input type='radio' name='q1' value='$data[4]'> <label for='q1'>$data[4]</label><br>";
		$data2 = explode(",", $file[1]);
		echo "$data2[0]<br> <input type='radio' name='q2' value='$data2[1]'> <label for='q2'>$data2[1]</label><br> <input type='radio' name='q2' value='$data2[2]'> <label for='q2'>$data2[2]</label><br>";
		$data3 = explode(",", $file[2]);
		echo "$data3[0]<br> <input type='radio' name='q3' value='$data3[1]'> <label for='q3'>$data3[1]</label><br> <input type='radio' name='q3' value='$data3[2]'> <label for='q3'>$data3[2]</label><br>";
		echo "<input type='submit' name='submit' value='Submit Quiz'></form>";
	  ?>

	  <?php
	  	if(isset($_POST["submit"])){
	  		answers();
	  	}

	  	function answers(){
	  		if(isset($_POST["q1"])){
	  			$q1 = $_POST["q1"];
	  		}
	  		if(isset($_POST["q2"])){
	  			$q2 = $_POST["q2"];
	  		}
	  		if(isset($_POST["q3"])){
	  			$q3 = $_POST["q3"];
	  		}
	  		$file = file("answer.txt");
	  		$answer = explode(",", $file[0]);
	  		$correct = 0;
	  		$total = 3;
	  		if($q1 == "$answer[0]"){
	  			$correct++;
	  		}
	  		if ($q2 == "$answer[1]") {
	  			$correct++;
	  		}
	  		if ($q3 == "$answer[2]") {
	  			$correct++;
	  		}
	  		$percentage = ($correct / $total) * 100;
	  		if($percentage < 50){
	  			echo "<p id='q1'>You scored a $percentage on the quiz.</p>";
	  		}
	  		if($percentage > 50 && $percentage < 60){
	  			echo "<p id='q2'>You scored a $percentage on the quiz.</p>";
	  		}
	  		if($percentage > 60 && $percentage <70){
	  			echo "<p id='q3'>You scored a $percentage on the quiz.</p>";
	  		}
	  		if($percentage > 80){
	  			echo "<p id='q4'>You scored a $percentage on the quiz.</p>";
	  		}
	  	}
	  ?>
	  <div id="container"><?php include("lastmodify.php"); ?></div>
</body>
</html>
