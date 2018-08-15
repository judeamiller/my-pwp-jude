<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

		<!--bootstrap-->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!--fancybox-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!--	fonts	-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<!--local stylesheet-->
		<link rel="stylesheet" href="css/style.css"/>

		<title>Jude's Portfolio</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light border-bottom border-secondary shadow-sm bg-light">
				<a class="navbar-brand text-secondary" href="#"><span class="myName"> Jude Baca-Miller</span> <br>Web Developer</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#aboutMe">AboutMe<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item d-none d-lg-block">
							<p class="nav-link text-muted">|</p>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item d-none d-lg-block">
							<p class="nav-link text-muted">|</p>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact Me</a>
						</li>
						<li class="nav-item d-none d-lg-block">
							<p class="nav-link text-muted">|</p>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="images/Baca-Miller-Resume.pdf" target="_blank">Resume</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
		<!--About Me-->
			<div class="container-fluid  pt-5 px-5">
				<h1 class="p-3" id="aboutMe">About Me</h1>
			</div>
			<div class = "container pb- 5 px-5 pb-5">
				<div class="row">
					<div class="col-lg-8 align-self-center">
						<p>Delicious fettuccine penne tomatoes basil al dente ravioli al dente angel hair, carbonara rotelle lasagna lasagna. Cavatelli sorprese cheesy capellini carbonara, lasagna linguini al dente tripoline al dente penne cheesy basil delicious. Ravioli spaghetti tripoline basil carbonara tripoline pastina carbonara, tomatoes ravioli spaghettini sauce. Ziti pasta angel hair rotelle, cavatelli delicious spaghetti ditalini delicious macaroni ditalini. Sorprese spaghettini pasta cavatelli, sauce tomatoes basil basil rotelle ziti.</p>
					</div>
					<div class="col-lg-4 text-center">
						<img src="https://www.fillmurray.com/g/200/300" alt="photo" class="rounded">
					</div>
				</div>
			</div>

			<!--Portfolio-->
			<div class="container-fluid  p-5 portfolio-section">
				<h1 class="p-3" id="portfolio">Portfolio</h1>
				<div class="row text-center">
					<div class="col-lg-3 col-sm-6">
						<a href="https://picsum.photos/200/300" data-fancybox data-caption="this is a picture of a beach">
							<img src="https://picsum.photos/200/300" alt="photo" class="rounded-circle">
						</a>
						<h2 class="p-1">Beach</h2>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a href="https://www.fillmurray.com/g/200/300" data-fancybox data-caption="meet bill">
							<img src="https://www.fillmurray.com/g/200/300" alt="photo" class="rounded-circle">
						</a>
						<h2 class="p-1">Bill</h2>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a href="https://picsum.photos/400/400" data-fancybox data-caption="This is a picture of a lightouse. I built this lighthouse myself.">
							<img src="https://picsum.photos/400/400" alt="photo" class="rounded-circle">
						</a>
						<h2 class="p-1">Lighthouse</h2>
					</div>
					<div class="col-lg-3 col-sm-6 align-self-center pb-5">
						<p class="text-center">Please check out my LinkedIn and GitHub Accounts</p>
						<a href="https://github.com/judeamiller" target="_blank"><img src="images/github-mark-dark.png" alt="github" class="px-1" height="70px"/></a>
						<a href="https://www.linkedin.com/in/judeamiller/" target="_blank"><img src="images/linkedin-logo-dark.png" alt="linkedin" class="px-1" height="70px"/></a>
					</div>
				</div>
			</div>
			<!--Contact Form-->
			<div class="container-fluid p-5">
				<h1 class="pb-5" id="contact">Contact Me</h1>
				<div class="col-md-6">
					<div class="form-area">
						<form>
							<label class="sr-only">Name</label>
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="name" placeholder="Email Address" required>
							</div>
							<div class="form-group">
								<textarea class="form-control"  id="message" placeholder="Leave Me A Message" maxlength="250" rows="10"></textarea>
							</div>

							<!-- reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="--YOUR RECAPTCHA SITE KEY--"></div>

							<div class="pt-3">
								<button class="btn btn-success mr-3" type="submit">Send</button>
								<button class="btn btn-warning" type="reset">Reset</button>
							</div>
						</form>

						<!--empty area for form error/success output-->
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--Footer Section-->
		<footer class="page-footer text-light">
			<div class="text-center pt-3">
				<a href="images/Baca-Miller-Resume.pdf" target="_blank"><img src="images/resume-icon.png" alt="resume icon" class="px-2" width="50px"/></a>
				<a href="https://github.com/judeamiller" target="_blank"><img src="images/github-mark-light.png" alt="github logo" class="px-2" width="50px"/></a>
				<a href="https://www.linkedin.com/in/judeamiller/" target="_blank"><img src="images/linkedin-logo-light.png" alt="linkedin logo" class="px-2" width="50px"/></a>
			</div>
			<div class=" text-center pt-2 pb-3">Jude Baca-Miller ©2018</div>
		</footer>
	</body>
</html>
