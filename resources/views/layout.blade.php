<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="\css\bootstrap.min.css">
	<link rel="stylesheet" href="\css\font-awesome.css">
	<link rel="stylesheet" href="\css\style.css">

</head>
<body >
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<button class="btn">Logout</button>

				</div>

			</div>
		</div>
	</header>
	<div class="navbar navbar-inverse set-radius-zero">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">

					<img src="\img\logo.png" />
				</a>

			</div>

			<div class="left-div">
				<div class="user-settings-wrapper">
					<ul class="nav">

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
								<span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
							</a>
							<div class="dropdown-menu dropdown-settings">
								<div class="media">
									<a class="media-left" href="#">
										<img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
									</a>
									<div class="media-body">
										<h4 class="media-heading">Sanjay Gupta</h4>
										<h5>Developer & Designer</h5>

									</div>
								</div>
								<hr />
								<a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.php" class="btn btn-danger btn-sm">Logout</a>

							</div>
						</li>


					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- LOGO HEADER END-->
	<section class="menu-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="navbar-collapse collapse ">
						<ul id="menu-top" class="nav navbar-nav navbar-right">
							<li><a class="menu-top-active" href="index.html">Dashboard</a></li>
							<li><a href="login.html">Login Page</a></li>
							<li><a href="applicationform.php">Application Form</a></li>
							<li>
											  <a data-toggle="dropdown" class="btn dropdown-toggle">ADD </a>
											  <ul class="dropdown-menu">
												<li><a href="addAdmin.php">Add Admin</a></li>
												<li><a href="AddDepartureDate.php">Add Departure date</a></li>
												<li><a href="AddTour.php">Add tour type</a></li>
												
											  </ul>
							</li>
							<li>
											  <a data-toggle="dropdown" class="btn dropdown-toggle">View </a>
											  <ul class="dropdown-menu">
												<li><a href="#">View Adminlist</a></li>
												<li><a href="#">View Departure-date list</a></li>
												<li><a href="#">View tour list</a></li>
												<li><a href="viewprofitreport.html">View Report</a></li>
												
											  </ul>
							</li>
							<li><a href="generatepdf.html">Generate pdf</a></li>

						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>


@yield('content')


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4>Copyright &copy; 2015 All Right Reserved,<a href="http://www.traveldostindia.com/" target="_blank"> Traveldost.</a></h4>
				</div>

			</div>
		</div>
	</footer>
	<!-- FOOTER SECTION END-->
	<!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
	<!-- CORE JQUERY SCRIPTS -->
	<script src="\js\jquery-1.11.1.js"></script>
	<!-- BOOTSTRAP SCRIPTS  -->
	<script src="\js\bootstrap.js"></script>
</body>
</html>
