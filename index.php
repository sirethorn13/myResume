<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="icon" href="images/RB_Logo.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<title>Resume_Builder</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="color:#000000;">
		<div class="container" style="font-size:20px;">
			<a class="navbar-brand" href="index.html" style="font-size:32px;"><img src="images/RB.svg" alt=""
					height="45px"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#pageHeader">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Form.html">Create Resume</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#templates">Resume Templates</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="faq.html">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<header class="page-header gradient" id="pageHeader">
		<div class="container">
			<div class="row">
				<div>
					<p style="color: #0a0000; font-weight: bold;">Create Your Professional Resume With Resume Builder
					</p>
					<button type="button" class="btn btn-primary"><a href="Form.html"
							style="text-decoration:none; color:white;"><i
								class="bi bi-file-earmark-person-fill mr-4"></i>Create Your Resume</a></button>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid templates " id="templates">
		<h1>Make a resume that stands out</h1>
		<p>Increase your chances of getting a job by creating your resume with our well designed resume
			templates.</p>
		<div class="row" style="width:90%; margin:auto;">
			<div class="col-md-4">
				<img src="images/T1.PNG" style="width:510px; height:620px;" class="img-thumbnail" alt="...">
			</div>
			<div class="col-md-4">
				<img src="images/T2.PNG" style="width:510px; height:620px;" class="img-thumbnail"
					style="width:520px;height:620px;" alt="...">
			</div>
			<div class="col-md-4">
				<img src="images/T3.PNG" style="width:510px; height:620px;" class="img-thumbnail" alt="...">
			</div>
		</div>
	</div>

	<div class="container features">
		<h1>Features</h1>
		<div class="row">
			<div class="card mb-3" style="max-width: 100%; justify-content:center;">
				<div class="row g-0">
					<div class="col-md-4">
						<img src="images/R1.png" class="img-fluid rounded-start mt-4 ml-4"
							style="height:73%; width:50%;">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h2 class="card-title">Quick and easy resume builder</h2>
							<p class="card-text" style="padding-top:2.5rem;">With our online CV maker, it is simple for
								anyone to quickly create a professional CV. Enter your personal details and begin
								filling out your CV content. Finally, choose one of our available CV layouts, and
								download your CV.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card mb-3" style="max-width: 100%;">
				<div class="row g-0">
					<div class="col-md-4" style="justify-content:center;">
						<img src="images/R2.png" class="img-fluid mt-3 ml-4" style="height:90%; width:60%;">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h2 class="card-title">More likely to land a job</h2>
							<p class="card-text" style="padding-top:2.5rem;">With a representative and professional CV,
								you will stand out amongst all other applicants. You are also up to 65% more likely to
								be invited to an interview.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card mb-3" style="max-width: 100%;">
				<div class="row g-0">
					<div class="col-md-4">
						<img src="images/R3.png" class="img-fluid rounded-start mx-auto mt-2"
							style="width:240px;height:210px;">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h2 class="card-title">Oragnize your applications</h2>
							<p class="card-text">Often, it is important to be able to tailor your CV based on the job
								you wish to apply for. With CV maker, you can create and manage several different CVs in
								an organised way through your own personal account hub.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid page">
		<div class="row">
			<h2 class="page-title">Boost your chances of getting that job you've been dreaming of</h2>
			<p class="page-title-para">With CV maker, you can quickly and easily create a distinctive and professional
				CV within 15 minutes.
			</p>
		</div>
		<div class="row">
			<div class="button-container" style="margin:0rem 0rem 2.5rem 7rem; height:100%;">
				<button type="button" class="btn btn-outline-dark"><a href="Form.html"
						style="text-decoration:none;">Create Your Resume</a></button>
			</div>
		</div>
	</div>
	<div class="container Form">
		<h1>Contact Us</h1>
		<div class="row">
			<form class="row g-3">
				<div class="col-md-6">
					<label for="name" class="form-label">Name</label>
					<input type="text" class="form-control" id="inputEmail4">
				</div>
				<div class="col-md-6">
					<label for="inputEmail4" class="form-label">Email</label>
					<input type="email" class="form-control" id="inputEmail4">
				</div>
				<div class="col-12">
					<label for="inputAddress" class="form-label">Feedback</label>
					<textarea type="text" class="form-control" row="5" id="inputAddress"
						placeholder="Your Feedback"></textarea>
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
	<!--Meet The Developers-->
	<div class="container-fluid page dev" style="overflow:visible; height:700px;">
		<div class="row d-flex justify-content-center align-items-center">
			<h1 class="mt-3 mb-4 p-4" style="font-size: 42px;">Meet the developers</h1>
		</div>
		<center>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" style="height:348px;" src="./images/Ayush.jpg" alt="Card image cap">
						<div class="card-body">
							<p class="card-text text-center" style="font-size:28px;">Ayush Rudani</p>
							<div class="icons">
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="rudaniayush777@gmail.com">
									<a target="_blank" href="mailto:rudaniayush777@gmail.com"><i
											class="far fa-envelope"></i></a>
								</button>
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="r_ayush777">
									<a target="_blank" href="https://www.instagram.com/r_ayush777/"><i
											class="fab fa-instagram"></i></a>
								</button>
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="Ayush Rudani">
									<a target="_blank" href="https://www.linkedin.com/in/ayush-rudani-7a3516204/"><i
											class="fab fa-linkedin"></i></a>
								</button>
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="+91 98257 28182">
									<a href="/"><i class="fas fa-phone-alt"></i></a>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" style="height:348px;" src="./images/Devansh.jpg" alt="Card image cap">
						<div class="card-body">
							<p class="card-text text-center" style="font-size:28px;">Devansh Shah</p>
							<div class="icons">
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="shahdevansh028@gmail.com">
									<a target="_blank" href="mailto:shahdevansh028@gmail.com"><i
											class="far fa-envelope"></i></a>
								</button>
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="devansh_shah28">
									<a target="_blank" href="https://www.instagram.com/devansh_shah28/"><i
											class="fab fa-instagram"></i></a>
								</button>
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="Devansh Shah">
									<a target="_blank" href="https://www.linkedin.com/in/devansh-shah-13050420b/"><i
											class="fab fa-linkedin"></i></a>
								</button>
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="+91 94845 98267">
									<a href="/"><i class="fas fa-phone-alt"></i></a>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" style="height:348px;" src="./images/Murtaza.JPG" alt="Card image cap">
						<div class="card-body">
							<p class="card-text text-center" style="font-size:28px;">Murtaza Mister</p>
							<div class="icons">
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="murtazamister1@gmail.com">
									<a target="_blank" href="mailto:murtazamister1@gmail.com"><i
											class="far fa-envelope"></i></a>
								</button>
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="_murtazamister_">
									<a target="_blank" href="https://www.instagram.com/_murtazamister_/"><i
											class="fab fa-instagram"></i></a>
								</button>
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="murtazamister">
									<a target="_blank" href="https://www.linkedin.com/in/murtazamister/"><i
											class="fab fa-linkedin"></i></a>
								</button>
								<button type="button" class="btn" data-toggle="tooltip" rel="tooltip"
									data-placement="bottom" title="+91 94291 52969">
									<a href="/"><i class="fas fa-phone-alt"></i></a>
								</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</center>
	</div>
	<footer class="page-footer font-small black">
		<div class="footer-copyright text-center py-3">© 2021 Copyright
			<!-- <a href="...">Resume_Builder</a> -->
		</div>
	</footer>
</body>
<script>
	$(function () {
		$("[rel='tooltip']").tooltip();
	});
</script>

</html>
