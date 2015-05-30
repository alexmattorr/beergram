<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>beergram</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<header>
		<nav class="nav-wrapper">
			<h1><span>[</span>beergram<span>]</span></h1>
			<div class="modal-btn">upload</div>
		</nav>
	</header>
	<div class="container cf">
		<?php
			$con=mysql_connect("localhost", "root", "root");
			mysql_select_db("beergram");
			$result = mysql_query("SELECT * FROM beers");
			while($row = mysql_fetch_array($result)) {
				echo '<div class="beer cf">
					<div class="beer-wrapper">
						<img class="beer-image" src="data:image;base64,'.$row['beer_image'].'">
						<div class="beer-text">
							<h2>'.$row['beer_name'].'</h2>
							<h4>'.$row['beer_type'].'</h4>
							<h4>'.$row['beer_percent'].'%</h4>
						</div>
					</div>
				</div>';
			mysql_close($con);
			}
		?>
	</div>

<div class="modal-bg">
	<div class="modal-close"><i class="fa fa-times"></i></div>
	<div class="modal">
		<form method="post" action="form_submit.php" enctype="multipart/form-data">
			<h2>Don't see a beer you know? Add it here!</h2>
			<div class="fileUpload">
		    <span>Select a Image</span>
		    <input type="file" class="upload" name="image" />
			</div>
			<input type="text" name="name" placeholder="Name" required />
			<input type="text" name="type" placeholder="Type" required />
			<input type="number" name="percent" placeholder="%" min="1" max="100">
			<input type="submit" name="submit" value="upload" />
		</form>
<!-- 		
		<script>
				$('form').on('submit', function (e) {
          // e.preventDefault();
          $.ajax({
            type: 'POST',
            url: 'form_submit.php',
            data: $('form').serialize(),
            success: function () {
              console.log('The form was submitted successfully');
            }
          });
        });
		</script>
 -->
	</div>
</div>
</body>
</html>