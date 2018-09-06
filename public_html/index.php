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

		<!-- jQuery Form, Validate, Additional Methods -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha256-2Pjr1OlpZMY6qesJM68t2v39t+lMLvxwpa8QlRjJroA=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js" integrity="sha256-F6h55Qw6sweK+t7SiOJX+2bpSAa3b/fnlrVCJvmEj1A=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js" integrity="sha256-0Yg/eibVdKyxkuVo1Qwh0DspoUCHvSbm/oOoYVz32BQ=" crossorigin="anonymous"></script>

		<!--font awesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

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

		<!--Favicon-->
		<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<title>Jude's Portfolio</title>
	</head>
	<body data-spy="scroll" data-target="#navigation-bar" data-offset="90">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light border-bottom border-secondary shadow-sm bg-light fixed-top" id="navigation-bar" >
				<div class="navbar-brand text-secondary"><span class="myName"> Jude Baca-Miller</span> <br>Web Developer</div>
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
			<a aria-hidden="true" id="about-me">about</a>
			<div class="container-fluid  py-5">
				<div class="row">
					<div class="col-md-8 align-self-center">
						<h1 class="pb-3">About Me</h1>
						<p>I am a web developer living in downtown Albuquerque, NM. I completed the Deep Dive Full Stack Web Development
							bootcamp in 2018.	I am excited to join the growing tech industry in Albuquerque because it ties together my prior
							experience as a designer and educator.</p>

						<p>I am drawn to coding because I am a tinkerer at heart. In my free time I enjoy taking on projects that allow
							me to build things and learn about their inner workings. Coding fills my desire to tinker using a new set of tools,
							lines of code. Please check out my portfolio and LinkedIn and GitHub profiles. Please use the contact form below if
							you would like to get in touch.</p>
					</div>
					<div class="col-md-4 align-self-center text-center">
						<img src="images/mypic.jpg" alt="photo" class="rounded">
					</div>
				</div>
			</div>
			<!--Portfolio-->
			<a aria-hidden="true" id="portfolio">portfolio</a>
			<div class="container-fluid  py-5 portfolio-section">
				<h1 class="pb-4">Portfolio</h1>
				<div class="row text-center">
					<div class="col-lg-3 col-sm-6">
						<a href="#lostpaws-gallery"  data-toggle="modal" data-slide-to="1"><img src="./images/lost-paws-mobile.jpg" alt="lost-paws screenshot" class="rounded-circle border border-secondary shadow-sm"/></a>
						<h2 class="p-1">Lost-Paws</h2>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a href="#professional-gallery"  data-toggle="modal" data-slide-to="1"><img src="./images/bootstrap-chall-thumb.jpg" alt="bootstrap screenshot" class="rounded-circle border border-secondary shadow-sm"/></a>
						<h2 class="p-1">Professional Work</h2>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a href="#personal-gallery" data-toggle="modal" data-slide-to="1"><img src="./images/gears.jpg" alt="open transmission" class="rounded-circle border border-secondary shadow-sm"/></a>
						<h2 class="p-1">Personal Projects</h2>
					</div>
					<div class="col-lg-3 col-sm-6 align-self-center pb-5">
						<p class="text-center">Please check out my LinkedIn and GitHub Accounts</p>
						<a href="https://github.com/judeamiller" target="_blank"><img src="images/github-mark-dark.png" alt="github" class="px-1 gh-logo"/></a>
						<a href="https://www.linkedin.com/in/judeamiller/" target="_blank"><img src="images/linkedin-logo-dark.png" alt="linkedin" class="px-1 li-logo"/></a>
					</div>
				</div>
			</div>
			<!--	modal carousel used in the first gallery-->
			<div id="lostpaws-gallery" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<a href="#" role="button" data-dismiss="modal" ><i class="far fa-times-circle pb-3"></i></a>
							<div class="carousel slide" data-ride="carousel" tabindex="-1" id="carousel1">
								<ol class="carousel-indicators">
									<li data-target="#carousel1" data-slide-to="0" class="pointer active"></li>
									<li data-target="#carousel1" data-slide-to="1" class="pointer"></li>
									<li data-target="#carousel1" data-slide-to="2" class="pointer"></li>
									<li data-target="#carousel1" data-slide-to="3" class="pointer"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="./images/lost-paws-screenshot.png" alt=""/>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="./images/lost-paws-mobile-slide.jpg" alt=""/>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="./images/lost-paws-wireframe.png" alt=""/>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="./images/lost-paws-post-screenshot.png" alt=""/>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="modal-footer px-3 py-3 pt-0">
							<p class="modal-title text-light mr-auto">Lost Paws is a project created by a team of 4 Deep Dive Coding bootcamp students. Lost Paws is a mobile-first web application that is designed
								to help reunite lost pets with their owners. Lost Paws is built using PHP, mySQL, BootStrap, and Angular 6. <a href="https://github.com/jisbell347/lost-paws" target="_blank"><i class="fab fa-github"></i></a></p>
						</div>
					</div>
				</div>
			</div>
			<!--	modal carousel used in center gallery-->
			<div id="professional-gallery" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<a href="#" role="button" data-dismiss="modal" ><i class="far fa-times-circle pb-3"></i></a>
							<div class="carousel slide" data-ride="carousel" tabindex="-1" id="carousel2">
								<ol class="carousel-indicators">
									<li data-target="#carousel2" data-slide-to="0" class="pointer active"></li>
									<li data-target="#carousel2" data-slide-to="1" class="pointer"></li>
									<li data-target="#carousel2" data-slide-to="2" class="pointer"></li>
									<li data-target="#carousel2" data-slide-to="3" class="pointer"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="./images/miata-bootstrap-challenge.png" alt="Bootstrap Challenge"/>
										<div class="carousel-caption d-none d-lg-block">
											<p>This is a class project I was assigned during the Deep Dive bootcamp to become acquainted with Bootstrap 4. I went overboard and dedicated the page to my favorite car. <a href="https://github.com/judeamiller/bootstrap-challenge" target="_blank"><i class="fab fa-github"></i></a></p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="./images/dvorak-drumkit.png" alt="Dvorak Keyboard Drumkit"/>
										<div class="carousel-caption d-none d-lg-block">
											<p><strong>Dvorak Drumkit</strong> I have been working on sharpening my JavaScript skill set and using Wes Bos' JavaScript 30 tutorials. I had to modify his JavaScript Drumkit to match my Dvorak Keyboard layout. <a href="https://github.com/judeamiller/JavaScript-Drumkit" target="_blank"><i class="fab fa-github"></i></a></p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="./images/planning-portfolio.jpg" alt="Planning work"/>
										<div class="carousel-caption d-none d-lg-block">
											<p>I worked as a planner at WHPacific from 2008-2010 producing planning documents, renderings, and architectural programs.</p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="./images/marketing-graphics.jpg" alt=""/>
										<div class="carousel-caption d-none d-lg-block">
											<p>I worked as a marketing graphics coordinator for WHPacific from 2010-2011 helping assemble marketing proposals, posters, and other marketing materials.</p>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="modal-footer px-3 py-3 pt-0">
							<p class="modal-title text-light mr-auto">This gallery includes an assortment of my professional work.</p>
						</div>
					</div>
				</div>
			</div>
			<!--	modal carousel used in third gallery-->
			<div id="personal-gallery" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<a href="#" role="button" data-dismiss="modal" ><i class="far fa-times-circle pb-3"></i></a>
							<div class="carousel slide" data-ride="carousel" tabindex="-1" id="carousel3">
								<ol class="carousel-indicators">
									<li data-target="#carousel3" data-slide-to="0" class="pointer active"></li>
									<li data-target="#carousel3" data-slide-to="1" class="pointer"></li>
									<li data-target="#carousel3" data-slide-to="2" class="pointer"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="./images/tinkerer.jpg" alt="tinkerer"/>
										<div class="carousel-caption d-none d-lg-block">
											<p>I am a tinkerer at heart. In my free time, I enjoy taking on projects that are outside of my comfort zone and challenge me to learn new skills. My career change to coding is an extension of this drive.</p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="./images/miata-rehab.jpg" alt="93LE Miata"/>
										<div class="carousel-caption d-none d-lg-block">
											<p>In spring of 2105 I picked up a 93LE Miata that was mostly complete, but needed some help. This this is the first black that I have painted in my garage. After a thorough DIY cosmetic and mechanical refresh, I have a classic car that I am proud of.</p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="./images/kitchen-renovation.png" alt="Kitchen renovation"/>
										<div class="carousel-caption d-none d-lg-block">
											<p>I share a small mid-century house in downtown Albuquerque with my wife, Britt. Owning an old house has provided many learning experiences. Pictured is my kitchen renovation project. Taking on DIY projects has allowed me to learn carpentry, plumbing, tilework, and painting.</p>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="modal-footer px-3 py-3 pt-0">
							<p class="modal-title text-light mr-auto">In my personal time, I enjoy taking on projects that are challenging and help me learn new skills.</p>
						</div>
					</div>
				</div>
			</div>
			<!--Contact Form Section-->
			<a aria-hidden="true" id="contact">contact</a>
			<div class="container-fluid py-5">
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