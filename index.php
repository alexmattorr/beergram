<!DOCTYPE HTML>
<html>
	<head>
		<title>beergram</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<h1><strong>Beergram</strong>, a expansive collection<br />
				helping you find new brews<br /> 
				or submit your favorite.<br />
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Explore all of your favorite beers or add your own! Beergram is an expansive collection of many different types of beers.</h2>
						</header>
						<p>Maybe you want to try something new, find a beer that some hipster bartender recommended at a local dive, or just interested in the facts? Here at beergram we have all the information you could possibly want, or allow you to submit one you cannot find.</p>
						<ul class="actions">
							<li><a href="#three" class="button">Submit A Beer</a></li>
						</ul>
					</section>

				<!-- Two -->
					<section id="two">
						<h2>Beers</h2>
						<div class="row">
							<?php
								$con=mysql_connect("localhost", "root", "root");
								mysql_select_db("beergram");
								$result = mysql_query("SELECT * FROM beers");
								while($row = mysql_fetch_array($result)) {
									echo '
										<article class="6u 12u$(xsmall) work-item">
											<a href="data:image;base64,'.$row['beer_image'].'" class="image fit thumb">
												<img src="data:image;base64,'.$row['beer_image'].'" alt="'.$row['beer_name'].'" />
											</a>
											<h3>'.$row['beer_name'].'</h3>
											<h5>'.$row['beer_percent'].' %</h5>
											<h4>'.$row['beer_type'].'</h4>
											<p>'.$row['beer_desc'].'</p>
										</article>
									';
									mysql_close($con);
								}
							?>

						</div>
					</section>

				<!-- Three -->
					<section id="three">
						<h2>Can't find a beer?</h2>
						<p>Simply fill out the form below and upload your beer to our database.</p>
						<div class="row">
							<div class="8u 12u$(small)">
								<form method="post" action="form_submit.php" enctype="multipart/form-data">
									<div class="row uniform 50%">
										<div class="12u$">
											<div class="fileUpload">
												<span class="selected-img">Select a Image</span>
												<input type="file" class="upload" name="image" />
											</div>
										</div>

										<div class="12u$">
											<input type="text" name="name" placeholder="Name"  required/>
										</div>

										<div class="6u 12u$(xsmall)">
											<input type="text" name="type" placeholder="Type"  required/>
										</div>

										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="percent" placeholder="%"  required/>
										</div>

										<div class="12u$">
											<textarea name="message" id="message" placeholder="Description" rows="4" required></textarea>
										</div>
									</div>
									
									<input id="submit-btn" type="submit" name="submit" value="upload" />
								</form>
							</div>

							<div class="4u$ 12u$(small)" id="submit-form">
								<ul class="labeled-icons">
									<li>
										<h3 class="icon fa-home"><span class="label">Address</span></h3>
										77 Masonic Ave.<br />
										San Francisco, CA 94110<br />
										United States
									</li>
									<li>
										<h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
										415-314-9497
									</li>
									<li>
										<h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
										<a href="mailto:alexsmander@gmail.com">beergram</a>
									</li>
								</ul>
							</div>

						</div>
					</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://twitter.com/alexmattorr" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://github.com/alexsmander" target="_blank" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="mailto:alexsmander@gmail.com" target="_blank" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; beergram 2015</li><li>
					<a href="http://www.alexmattorr.com">alexmattorr</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>