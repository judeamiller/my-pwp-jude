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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!--font awesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<!--fancybox-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!--	fonts	-->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

		<!--local stylesheet-->
		<link rel="stylesheet" href="css/style.css"/>

		<!--Local JavaScript-->
		<script src="js/scripts.js"></script>

		<title>Jude's Portfolio</title>
	</head>
	<body data-spy="scroll" data-target="#navigation-bar" data-offset="90">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light border-bottom border-secondary shadow-sm bg-light fixed-top" id="navigation-bar" >
				<div class="navbar-brand text-secondary pl-3" href="#"><span class="myName"> Jude Baca-Miller</span> <br>Web Developer</div>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#about-me">AboutMe<span class="sr-only">(current)</span></a>
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
			<a id="about-me"></a>
			<div class="container-fluid  p-5">
				<div class="row">
					<div class="col-md-8 align-self-center">
						<h1 class="pb-3">About Me</h1>
						<p>Delicious fettuccine penne tomatoes basil al dente ravioli al dente angel hair, carbonara rotelle lasagna lasagna. Cavatelli sorprese cheesy capellini carbonara, lasagna linguini al dente tripoline al dente penne cheesy basil delicious. Ravioli spaghetti tripoline basil carbonara tripoline pastina carbonara, tomatoes ravioli spaghettini sauce. Ziti pasta angel hair rotelle, cavatelli delicious spaghetti ditalini delicious macaroni ditalini. Sorprese spaghettini pasta cavatelli, sauce tomatoes basil basil rotelle ziti.</p>
					</div>
					<div class="col-md-4 align-self-center text-center">
						<img src="images/mypic.jpg" alt="photo" class="rounded">
					</div>
				</div>
			</div>
			<!--Portfolio-->
			<a id="portfolio"></a>
			<div class="container-fluid  p-5 portfolio-section">
				<h1 class="pb-4">Portfolio</h1>
				<div class="row text-center">
					<div class="col-lg-3 col-sm-6">
						<a href="https://picsum.photos/200/300" data-fancybox="gallery" data-caption="Caption #1">
							<img src="https://picsum.photos/200/300" alt="bla" class="rounded-circle"/>
						</a>
						<a href="documentation/images/mobilesite.png" data-fancybox="gallery" data-caption="Caption #2"></a>
						<a href="documentation/images/desktopgallery.png" data-fancybox="gallery" data-caption="Caption #3"></a>
						<a href="documentation/images/desktopscrolldown.png" data-fancybox="gallery" data-caption="Caption #4"></a>
						<h2 class="p-1">Beach</h2>
					</div>
					<div class="col-lg-3 col-sm-6">
<!--						commented out fancybox images-->
<!--						<a href="https://www.fillmurray.com/g/200/300" data-fancybox data-caption="meet bill">-->
<!--							<img src="https://www.fillmurray.com/g/200/300" alt="photo" class="rounded-circle">-->
<!--						</a>-->

						<a href="#lightbox"  data-toggle="modal" data-slide-to="1"><img src="https://www.fillmurray.com/g/200/300" alt="" class="rounded-circle"/></a>

						<h2 class="p-1">Bill</h2>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a href="https://picsum.photos/400/400" data-fancybox data-caption="This is a picture of a lighthouse. I built this lighthouse myself.">
							<img src="https://picsum.photos/400/400" alt="photo" class="rounded-circle">
						</a>
						<h2 class="p-1">Lighthouse</h2>
					</div>
					<div class="col-lg-3 col-sm-6 align-self-center pb-5">
						<p class="text-center">Please check out my LinkedIn and GitHub Accounts</p>
						<a href="https://github.com/judeamiller" target="_blank"><img src="images/github-mark-dark.png" alt="github" class="px-1 gh-logo"/></a>
						<a href="https://www.linkedin.com/in/judeamiller/" target="_blank"><img src="images/linkedin-logo-dark.png" alt="linkedin" class="px-1 li-logo"/></a>
					</div>
				</div>
			</div>
			<!--	modal carousel used in center gallery this is an experiment-->
			<div id="lightbox" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<a href="#" role="button" data-dismiss="modal" ><i class="far fa-times-circle pb-3"></i></a>
							<div class="carousel slide" data-ride="carousel" tabindex="-1" id="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel" data-slide-to="0" class="pointer active"></li>
									<li data-target="#carousel" data-slide-to="1" class="pointer"></li>
									<li data-target="#carousel" data-slide-to="2" class="pointer"></li>
									<li data-target="#carousel" data-slide-to="3" class="pointer"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="http://www.miata93le.com/DSC_3942.JPG" alt=""/>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="http://www.miata93le.com/IMG_1352.jpg" alt=""/>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="http://www.miata93le.com/DSC_3930.JPG" alt=""/>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="http://www.miata93le.com/DSC_3928.JPG" alt=""/>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="modal-footer px-3 py-3 pt-0">
							<p class="modal-title text-light mr-auto">This was a project. I make the best projects. Look at these projects.</p>
						</div>
					</div>
				</div>
			</div>
			<!--Contact Form-->
			<a id="contact"></a>
			<div class="container-fluid p-5">
				<h1 class="pb-5">Contact Me</h1>
				<div class="col-md-6">
					<form id="contact-form" action="php/mailer.php" method="post" >
						<label for="name" class="sr-only">Name</label>
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<div class="input-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
							</div>
						</div>
						<div class="form-group">
							<label for="subject" class="sr-only">Subject</label>
							<div class="input-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<div class="input-group">
								<textarea class="form-control"  id="message" name="message" placeholder="Leave Me A Message" maxlength="250" rows="10"></textarea>
							</div>
						</div>

							<!-- reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6LdhX2oUAAAAADliOsNsY3llJJiE5HR_3y0QSbsp"></div>
						<div class="pt-3">
							<button class="btn btn-success mr-3 px-2" type="submit"><i class="fas fa-paper-plane pr-2"></i>Send</button>
							<button class="btn btn-warning px-2" type="reset"><i class="fas fa-trash pr-2"></i>Clear</button>
						</div>
					</form>

						<!--empty area for form error/success output-->
					<div class="row">
						<div class="col-xs-12 pt-5">
							<div id="output-area"></div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--Footer Section-->
		<footer class="page-footer text-light">
			<div class="text-center pt-4">
				<a href="images/Baca-Miller-Resume.pdf" target="_blank"><img src="images/resume-icon.png" alt="resume icon" class="px-2 footer-icon"/></a>
				<a href="https://github.com/judeamiller" target="_blank"><img src="images/github-mark-light.png" alt="github logo" class="px-2 footer-icon"/></a>
				<a href="https://www.linkedin.com/in/judeamiller/" target="_blank"><img src="images/linkedin-logo-light.png" alt="linkedin logo" class="px-2 footer-icon"/></a>
			</div>
			<div class=" text-center pt-2 pb-3">Jude Baca-Miller ©2018</div>
		</footer>
	</body>
</html>
