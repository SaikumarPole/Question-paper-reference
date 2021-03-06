<!DOCTYPE HTML>
<html>
	<head>
		<title>Q-file</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><h2>Q-file</h2></a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="View.html">View</a>
						<a href="login.html">Upload</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Main -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Register here</h2>
					</header>
				</div>
			</section>

								<section class="align2">
									<form action="upload.php" method="post">
										 <!-- <div class="align"> -->
										   		
														<b>ID Number</br></br><input type="text" placeholder="Id no" name="Id"></br></br>
															
														<b>Name</br></br></b><input type="text" placeholder="name" name="Name"></br></br>

														<b>Branch</br></br></b>
															<div class="field">									
																<div class="12u$(xsmall)">
																	<div class="select-wrapper">
																		<select name="branch" id="demo-category">
																			<option value="">- subject -</option>
																			<option value="1">PUC-1</option>
																			<option value="1">PUC-2</option>
																			<option value="1">E1</option>
																			<option value="1">E2</option>
																			<option value="1">E3</option>
																			<option value="1">E4</option>
																		</select>
																	</div>
																</div>
															</div>
														</br>

														<b>Username</br></br></b><input type="text" placeholder="Class" name="username"></br></br>

														<b>password</br></br></b><input type="password" placeholder="password" name="password"></br></br>

													<div class="align3"><button type="submit">submit</button></div>	

													</br></br>

											<!-- </div> -->
										</form>
								</section>
							
						
										
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					<form action="qp.php" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>