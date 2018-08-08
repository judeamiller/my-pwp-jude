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

		<!--	fonts	-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<!--local stylesheet-->
		<link rel="stylesheet" href="public_html/css/style.css"/>

		<title>Jude's Portfolio</title>
	</head>
	<body>
		<head>
			<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
				<a class="navbar-brand" href="#"><span class="myName"> Jude Baca-Miller</span> <br>Web Developer</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#aboutMe">AboutMe<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact Me</a>
					</li>
									<li class="nav-item">
						<a class="nav-link" href="images/Baca-Miller-Resume.pdf" target="_blank">Resume</a>
					</li>
				</ul>
			</div>
			</nav>
		</head>
		<main>
			<div class="container-fluid p-5">
				<h1 id="aboutMe">About Me</h1>
				<p>Delicious fettuccine penne tomatoes basil al dente ravioli al dente angel hair, carbonara rotelle lasagna lasagna. Cavatelli sorprese cheesy capellini carbonara, lasagna linguini al dente tripoline al dente penne cheesy basil delicious. Ravioli spaghetti tripoline basil carbonara tripoline pastina carbonara, tomatoes ravioli spaghettini sauce. Ziti pasta angel hair rotelle, cavatelli delicious spaghetti ditalini delicious macaroni ditalini. Sorprese spaghettini pasta cavatelli, sauce tomatoes basil basil rotelle ziti.</p>
			</div>
			<div class="container-fluid p-5 bg-secondary">
				<h1 id="portfolio">Portfolio</h1>
				<div class="row">
					<div class="col-md-3">
						<img src="https://picsum.photos/200/300" alt="photo" class="rounded-circle" width="230px" height="230px">
						<h2 class="p-1">Beach</h2>
					</div>
					<div class="col-md-3">
						<img src="https://picsum.photos/150/150" alt="photo" class="rounded-circle" width="230px" height="230px">
						<h2 class="p-1">Feet</h2>
					</div>
					<div class="col-md-3">
						<img src="https://picsum.photos/400/400" alt="photo" class="rounded-circle" width="230px" height="230px">
						<h2 class="p-1">Lighthouse</h2>
					</div>
					<div class="col-md-3">
						<p class="text-center">Please check out my LinkedIn and GitHub Accounts</p>
						<img src="images/linkedin-logo-dark.png" alt="linkedin"/>
						<img src="images/github-mark-dark.png" alt="github"/>
					</div>
				</div>

				<!--Contact Form-->
				</div>
				<div class="container-fluid p-5">
					<h1 id="contact">Contact Me</h1>
					<div class="container">
						<div class="col-md-5">
							<div class="form-area">
								<form>
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="email" name="name" placeholder="Email Address" required>
									</div>
									<div class="form-group">
										<textarea class="form-control"  id="message" placeholder="Leave Me A Message" maxlength="250" rows="10"></textarea>
									</div>
								</form>
								<button type="button" class="btn btn-success">Submit</button>
								<button type="button" class="btn btn-danger">Reset</button>
							</div>
						</div>
					</div>
				</div>




		</main>
		<!--Footer Section-->
		<footer class="page-footer text-light">
			<div class="text-center pt-5">
				<img src="images/resume-icon.png"alt="resume icon" width="50px"/><img src="images/linkedin-logo-light.png" alt="linkedin logo" width="50px"/> <img src="images/github-mark-light.png" alt="github logo" width="50px"/>
			</div>
			<div class=" text-center pb-5">Jude's PWP FillerFooterText.</div>
		</footer>
	</body>
</html>
