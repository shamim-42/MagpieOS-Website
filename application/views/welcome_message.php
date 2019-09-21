<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>" />

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<title>Magpie OS | Get a fresh experience of Arch Linux</title>
</head>
<body>

<!-- <div class="container-fluid top-narrow-header"></div> -->

<!--Navbar-->
<nav class="navbar navbar-expand-lg">

<!-- Navbar brand -->
<a class="navbar-brand font-weight-normal" href="<?php echo base_url()?>">Magpie OS</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse " id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav ml-auto font-weight-normal animated zoomInRight">

 	<li class="nav-item">
	  <a class="nav-link" href="#">Docs</a>
	</li>

	<!-- Dropdown -->
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">Source Code</a>
		<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
			<a class="dropdown-item" href="https://github.com/Rizwan-Hasan/MagpieOS">MagpieOS Gnome</a>
			<a class="dropdown-item" href="https://github.com/magpie-linux/archiso-xfce">MagpieOS Xfce</a>
			<a class="dropdown-item" href="https://github.com/Rizwan-Hasan">MagpieOS Others</a>
		</div>
	</li>
	
	<li class="nav-item">
	  <a class="nav-link" href="https://sourceforge.net/projects/magpieos/files/">Download
		<span class="sr-only">(current)</span>
	  </a>
	</li>
	
  </ul>
  <!-- Links -->	
</div>
<!-- Collapsible content -->
</nav>
<!--/.Navbar-->


<div class="container-fluid">
	<div class="row justify-content-center align-items-center">
		<div class="col main-attractive-view py-5 d-flex align-items-start justify-content-center">
			<!-- This div is for the background	 -->
		</div>
		<div class="main-attractive-view-content-overlay py-5 d-flex align-items-start justify-content-center">
			<div>
				<p class="magpieos-headline text-center animated fadeInDown">Magpie OS</p>
				<p class="tagline text-center animated fadeInUp">Get a fresh experience of Arch Linux !</p>
			</div>
		</div>
	</div>
	<div class="row bg-white py-5 px-sm-1 px-md-2 px-lg-3">
		<div class="col">
			<div class="p-5 d-flex align-items-center justify-content-center">
				<div>
					<img class="animated zoomIn" src="<?php echo base_url('assets/img/magpieos_logo.png') ?>" alt="Magpie OS logo" height="200px">
				</div>			
			</div>
		</div>
		<div class="col">
			<div class="p-lg-5 p-md-3 p-sm-1 d-flex align-items-center justify-content-center">
				<div class="animated fadeIn">
					<h3 class="text-info font-weight-normal mb-4 text-center">What MagpieOS is ?</h3>
					<p class="font-weight-normal text-center">
						MagpieOS is an Arch based linux operating system that is very simple, easy to use and smooth in experience.
						It is fit in any kind of modern machines as well as the earlier versions of hardware.
					</p>
				</div>				
			</div>
		</div>
	</div>
	<div class="row bg-light p-5">
		<div class="col-12">
			<h3 class="font-weight-normal mb-4 text-center">Key Features</h3>
		</div>
		<div class="col-md-4 p-4 d-flex flex-column align-items-center justify-content-center">
			<div class="feature-simple-container d-flex flex-column justify-content-center align-items-center bg-white animated fadeInDown">
				<div class="feature-simple">
					<i class="fas fa-laptop fa-5x feature-simple-icon"></i>
				</div>					
			</div>
			<h4 class="font-weight-bold feature-simple-text">Simple</h4>
			<p class="text-center text-dark font-weight-normal">Design is kept very simple keeping in mind the end user's experience ! </p>	
		</div>
		
		<div class="col-md-4 p-4 d-flex flex-column align-items-center justify-content-center">
			<div class="feature-simple-container d-flex flex-column justify-content-center align-items-center bg-white animated fadeInDown">
				<div class="feature-simple">
					<i class="fas fa-umbrella-beach fa-5x feature-easy-icon"></i>					
				</div>					
			</div>
			<h4 class="font-weight-bold feature-easy-text">Easy</h4>
			<p class="text-center text-dark font-weight-normal">Easy to use. New user can also be adopted very easily. </p>	
		</div>

		
		<div class="col-md-4 p-4 d-flex flex-column align-items-center justify-content-center">
			<div class="feature-simple-container d-flex flex-column justify-content-center align-items-center bg-white animated fadeInDown">
				<div class="feature-simple">					
					<i class="fas fa-lock-open fa-5x feature-open-icon"></i>					
				</div>					
			</div>
			<h4 class="font-weight-bold feature-open-text">Open</h4>
			<p class="text-center text-dark font-weight-normal">All the source code is Open ! Anyone can get the code instantly and can also contribute the project. </p>	
		</div>
	</div>
	<div class="row screenshot-portion p-5">
		<div class="col-12">
			<h3 class="text-white text-center font-weight-normal mb-4 animated fadeIn">Take a look on</h3>
		</div>
		<div class="col-md-4 p-4">
			<div class="card animated zoomInLeft">
			  <img class="card-img-top" src="<?php echo base_url('assets/img/screenshot/1.jpg')?>" alt="">
			  <div class="card-body p-1">
				<h5 class="card-title text-center">Text Editor</h5>				
			  </div>
			</div>
		</div>

		<div class="col-md-4 p-4">
			<div class="card animated zoomInDown">
			  <img class="card-img-top" src="<?php echo base_url('assets/img/screenshot/5.jpg')?>" alt="">
			  <div class="card-body p-1">
				<h5 class="card-title text-center">About Gnome</h5>				
			  </div>
			</div>
		</div>

		<div class="col-md-4 p-4">
			<div class="card animated zoomInRight">
			  <img class="card-img-top" src="<?php echo base_url('assets/img/screenshot/7.jpg')?>" alt="">
			  <div class="card-body p-1">
				<h5 class="card-title text-center">Applications</h5>				
			  </div>
			</div>
		</div>

		<div class="col-md-4 p-4">
			<div class="card animated zoomInLeft">
			  <img class="card-img-top" src="<?php echo base_url('assets/img/screenshot/8.jpg')?>" alt="">
			  <div class="card-body p-1">
				<h5 class="card-title text-center">File Manager</h5>				
			  </div>
			</div>
		</div>

		<div class="col-md-4 p-4">
			<div class="card animated zoomInUp">
			  <img class="card-img-top" src="<?php echo base_url('assets/img/screenshot/11.jpg')?>" alt="">
			  <div class="card-body p-1">
				<h5 class="card-title text-center">Gnome Terminal</h5>				
			  </div>
			</div>
		</div>

		<div class="col-md-4 p-4">
			<div class="card animated zoomInRight">
			  <img class="card-img-top" src="<?php echo base_url('assets/img/screenshot/12.jpg')?>" alt="">
			  <div class="card-body p-1">
				<h5 class="card-title text-center">Setting</h5>				
			  </div>
			</div>
		</div>
	</div>
	<div class="row bg-white p-5 justify-content-center">
		<div class="col-12 mb-2">
			<h3 class="font-weight-normal text-center">Getting Started with MagpieOS</h3>
		</div>

		<div class="col-md-10">
			<div class="row getting-started-component my-4 p-3 justify-content-center align-items-center rounded">
				<div class="col-md-5">
					<h5 class="font-weight-bold">Download</h5>
					<p>Download the lastest verion of our OS and get it flashed onto a USB drive to get started, or run it from a VM environment!</p>
				</div>
				<div class="col-md-5 d-flex align-items-center justify-content-center">
					<div class="download-icon-container d-flex align-items-center justify-content-center">
						<i class="fas fa-download fa-5x text-danger"></i>
					</div>
				</div>
			</div>

			<div class="row getting-started-component my-4 p-3 justify-content-center align-items-center rounded">
				<div class="col-md-5">
					<h5 class="font-weight-bold">Install</h5>
					<p>After downloading you can try MagpieOS to give it a test drive before installing to see if you like it, after that get going with our guide if you need help with the install procedure</p>
				</div>
				<div class="col-md-5 d-flex align-items-center justify-content-center">
					<div class="download-icon-container d-flex align-items-center justify-content-center">
						<i class="fas fa-cogs fa-5x text-info"></i>						
					</div>
				</div>
			</div>

			<div class="row getting-started-component my-4 p-3 justify-content-center align-items-center rounded">
				<div class="col-md-5">
					<h5 class="font-weight-bold">Start Using</h5>
					<p>After installing feel free to MagpieOS in your days. If you find something complex please see the doc.</p>
				</div>
				<div class="col-md-5 d-flex align-items-center justify-content-center">
					<div class="download-icon-container d-flex align-items-center justify-content-center">
						<i class="fas fa-business-time fa-5x text-primary"></i>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="row justify-content-center developer-section px-sm-1 px-md-2 px-lg-3">
		<div class="col-md-12">
			<h3 class="font-weight-normal text-center white-text">Developer</h3>
		</div>
		<div class="col-md-8">
			<h5 class="text-center developer-name">Rizwan Hassan</h5>
		</div>
	</div>

	<div class="row py-5 px-sm-1 px-md-2 px-lg-3 bg-dark text-light footer">
		<div class="col-md-4">
			<h6 class="font-weight-normal">About Magpie:</h6>
			<p>MagpieOS is a derivative distribution of Arch Linux and it is the Bangladeshi made linux distribution. </p>
		</div>

		<div class="col-md-4">
			<h6 class="font-weight-normal">Contact Me</h6>
			<ul>
				<a href="#"><li class="link">Email: rizwan.hasan486@gmail.com</li></a>
				<a href="https:/facebook.com/rizwan.hasan.106"><li>Facebook: Rizwan Hasan</li></a>
				<a href="https://twitter.com/Linux_Saikat"><li>Twitter: @Linux_Saikat</li></a>
				<a href="href=https://desktop.telegram.org/"><li>Twitter: @RizwanHasan</li></a>

			</ul>
		</div>

		<div class="col-md-4">
			<h6 class="font-weight-normal text-center">Join our mailing list</h6>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Type your mail id" />
				<button class="btn btn-sm btn-info ml-0 text-center">Submit</button>
				<p class="d-flex align-items-center justify-content-start">Stay in Touch on facebook - &nbsp;<a href="https://www.facebook.com/magpieos/"><i class="text-primary fa-2x fab fa-facebook"></i></a></p>
			</div>
		</div>
	</div>
	<div class="row dark blue p-1">
		<div class="col">
			<div class="text-center small"><i class="fas fa-1x fa-copyright"></i> 2019 Copyright: MagpieOS</div>
		</div>
	</div>
</div>


<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>	
</body>
</html>