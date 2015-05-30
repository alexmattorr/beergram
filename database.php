<?php
	$host="localhost"; 
	$username="root";
	$password="root"; 
	$db_name="beergram"; 

	$con=mysql_connect("$host", "$username", "$password");

	if(!$con) {
		die("Database connection failed: " . mysql_error());
	}

	mysql_select_db($db_name);

	$sql = " ";
	if(!mysql_query($sql, $con)) {
		die('Error:' . mysql_error());
	}
	header('location: index.php');
	mysql_close($con);
?>
