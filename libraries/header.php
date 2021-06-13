
<html lang="en" class="full-height">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="YourCoach">
		<meta name="author" content="Patrick Pulfer">
		<meta name="theme-color" content="#2E2E2E">
	
		<script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
		<link rel="stylesheet" href="./static/mdb482/css/bootstrap.min.css">
		<link rel="stylesheet" href="./static/mdb482/css/mdb.css">
		<link rel="stylesheet" href="./static/main.css">

		<link rel="apple-touch-icon" sizes="180x180" href="./static/pwa/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./static/pwa/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./static/pwa/favicon-16x16.png">
		<link rel="manifest" href="site.webmanifest">
		<link rel="mask-icon" href="./static/pwa/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="./static/pwa/favicon.ico">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="msapplication-config" content="./static/pwa/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

	  <!--[if lt IE 9]>
	  <script src="https://cdnjs.cloudflare.om/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
	  <![endif]-->
  
	  <title>
		  YourCoach.ie
	  </title>
  
	  <style>
  		.navbar {
	  		background-color: transparent;
  		}
  
		.top-nav-collapse {
			background-color: #2E2E2E;
		}
  
  @media only screen and (max-width: 768px) {
	  .navbar {
		  background-color: #2E2E2E;
	  }}

	  </style>
  </head>
	  
  <body style="background-color:white;">
  
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
  <div class="container">
	  <a href="https://<?php echo $_SERVER['HTTP_HOST'];?>/" class="navbar-brand"><strong>&nbsp;YourCoach.ie</strong></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav mr-auto">
			  <li class="nav-item dropdown">
				  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
				  <div class="dropdown-menu dropdown" aria-labelledby="navbarDropdownMenuLink">
					  <a class="dropdown-item" href="./?p=business">Business Coaching</a>
					  <a class="dropdown-item" href="./?p=career">Career Coaching</a>
					  <a class="dropdown-item" href="./?p=life">Life Coaching</a>
				  </div>
			  </li>
			  <li class="nav-item dropdown">
				  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tools</a>
				  <div class="dropdown-menu dropdown" aria-labelledby="navbarDropdownMenuLink2">
					  <a class="dropdown-item" href="./?p=ciq">CIQ®</a>
					  <a class="dropdown-item" href="./?p=mindsonar">MindSonar®</a>
					  <a class="dropdown-item" href="./?p=values">Values</a>
				  </div>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="./?p=testimonials">Testimonials</a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="./?p=events">Events</a>
			  </li>
				<li class="nav-item">
					<a class="nav-link" href="https://theinterviewmasterdeck.com/" target="_blank">Interview Master Deck</a>
				</li>
			  <li class="nav-item">
				  <a class="nav-link" href="./?p=media">Media</a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="#" data-toggle="modal" data-target="#modalContactForm">Contact</a>
			  </li>
		  </ul>
	  </div>
  </div>
  </nav>
  
  <script src="./static/pwa/upup.min.js"></script>
	<script>
	  UpUp.start({
		'content': '<html><body><h1>Please connect to the Internet to continue.</h1></body></html>'
	  });
	</script>