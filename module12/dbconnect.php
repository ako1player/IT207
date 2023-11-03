<?php
	$connect = @mysql_connect("helios.vse.gmu.edu","agarciar","psorta") or die("Error accessing database.");
	//echo mysql_get_client_info();
	//echo mysql_get_host_info($connect);
	//echo mysql_get_proto_info($connect);
	//echo mysql_get_server_info($connect);
	mysql_query("USE agarciar");
	$result = mysql_query("SELECT * FROM AUTHOR");
	$row = mysql_fetch_row($result);
	do{
		echo "<table><tr><th>Author Num</th> <th>Author First Name</th> <th>Author Last Name</th></tr>";
		echo "<tr><td>{$row[0]}</td>";
		echo "<td>{$row[1]}</td>";
		echo "<td>{$row[2]}</td></tr></table><br>";
		$row = mysql_fetch_row($result);
	}while ($row);
	echo mysql_num_rows($result);
	mysql_close($connect);
?>