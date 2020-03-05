<!DOCTYPE html>
<html>
<head>
<title>MEN</title>
<!--<basefont size="12"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- external css -->
<link rel="stylesheet" href="fontawesome/css/all.css">
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<!-- internal css -->
<style type="text/css">
	/* Set a background image */
	body {
		background: url('images/image1.png')
		no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		background-size: cover;
		-o-background-size: cover;
	}
</style>

</head>
<body>
<!-- <body style="background-color:; margin:;font-size:;"> -->
<!-- muwonge -->
	<div class="container" style="background-color:skyblue; background: rgba(0, 0, 0, 0.5);padding: 20px;text-align: justify;margin-top: 40px;">
		<!-- <br><br>
		<nav  id="mainmenu" class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">

		</nav>
		<nav id="togglebutton" class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">

		</nav> -->
		<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="sql.php">SQL Injection</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="xss.php">Cross-Site Scripting</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="wanted.php">Wanted</a>
				</li>
			</ul>
		</nav>

		<br><br>
		<div class="row text-white">
			<div class="col-lg-12" style="text-align: center;">
				<h1>Cross-Site Scripting-XSS</h1>				
			</div>
		</div>

		<br>
		<!-- first row -->
		<div class="row text-white">
			<div class="col-lg-6">
				<h4 style="text-align: center;">Vulnerable</h4>
				<h5>Form 2</h5>
				<form method="post" action="vsearch.php">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" placeholder="Enter username" id="username" name="username">
					</div>
						<button type="submit" class="btn btn-primary">Search</button>
				</form> 
			</div>
			<div class="col-lg-6">
				<h4 style="text-align: center;">Secure</h4>
				<h5>Form 2</h5>
				<form method="post" action="ssearch.php">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" placeholder="Enter username" id="username" name="username">
					</div>
						<button type="submit" class="btn btn-primary">Search</button>
				</form> 
			</div>
		</div>


		<!-- footer -->
		<div class="card bg-dark text-white" style="margin-top: 20px;">
			<div class="card-body text-center">
				<p class="card-text">Copyright &copy; Muwonge Emmanuel</p>
			</div>
		</div>
		
	</div>
</body>
</html>