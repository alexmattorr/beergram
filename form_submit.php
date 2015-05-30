<?php
	function input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	if(isset($_POST['submit'])) {
		$name = input($_POST['name']);
		
		// $image = getimagesize($_FILES['image']['tmp_name'])
		$image = addslashes($_FILES['image']['tmp_name']);
		$image = file_get_contents($image);
		$image = base64_encode($image);

		$type = input($_POST['type']);
		$percent = input($_POST['percent']);
		$desc = input($_POST['message']);
		
		saveData($name, $image, $type, $percent, $desc);
	}
	function saveData($name, $image, $type, $percent, $desc) {
		$con=mysql_connect("localhost", "root", "root");
		mysql_select_db("beergram", $con);

		$qry = "INSERT INTO beers (beer_name, beer_image, beer_type, beer_percent, beer_desc) VALUES ('$name', '$image', '$type', '$percent', '$desc')";
		$result = mysql_query($qry, $con);
		header("Location: index.php");
		die();
	}
?>
