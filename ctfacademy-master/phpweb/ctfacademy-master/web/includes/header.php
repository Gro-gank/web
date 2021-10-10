<!DOCTYPE html>
<html  lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>CTF Academy : Web Application Exploitation</title>
			<meta name="description" content="Web pages, just like the one you are reading now, are generally made of three components, HTML, CSS, and JavaScript. Each of these components have a different role in providing the functions and format of a webpage. The structure of a webpage can be compared to a human body: the HTML is the bone structure, CSS being the appearance, and JavaScript being the muscles.">
			
			<meta name="author" content="CTF Academy">			
			<link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">	
				<!--[if lt IE 9]>
				<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
				<![endif]-->
				<link rel="stylesheet" href="../src/font-awesome-4.7.0/css/font-awesome.min.css" />				
				<script src="../src/jquery-3.4.1.min.js"></script>
				<script src="../src/popper.min.js"></script>				
				<script src="../src/bootstrap/js/bootstrap.min.js"></script>		
				<link href="../style.css" rel="stylesheet" />				
				<script src="../src/jquery.md5.min.js"></script>
				<script src="../src/hashCheck.js"></script>				
				<link rel="icon" href="../src/HVKTMM.ico" />
		</head>				
				
				<body>
				
				
				
				<!-- Header -->
				<header id="top">					
					<div class="container-fluid ctfaLogo">
				<div class="row">				
					<div class="col-md-12">
						<div class="myLogo ">						
						<a href="../index.php">						
						<img src="../src/HVKTMM.jpg" alt="CTFA Logo">											
						</a>
						</div>						
						<div class="floatText">						
						<h2 class="display-4">						
						<span class = "mainblue">						
						<a href="../index.php">						
						CTF Academy
						</a>						
						</span>						
						<br class="break">						
						<span class = "headerDash">
						- 
						</span>						
						<span class = "mainorange"> 
						<a href="index.php">
						Web App Exploitation
						</a>
						</span>						
						</h2>
						</div>						
						</div>
						</div>						
					  </div>					
				</header>
				
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark"  id="myNav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavAltMarkup">
    <div class="navbar-nav">
		<ul class="nav navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="../index.php"><i class="fa fa-home homepageSize" aria-hidden="true"></i></a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="../crypto/index.php">Cryptography</a>
			</li>
			
			
			
			<li class="nav-item">
				<a class="nav-link" href="../osint/index.php">Open-Source Intel</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="../web/index.php">Web App Exploitation</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="../network/index.php">Network Forensics</a>
			</li>								
		</ul>
    </div>
  </div>
</nav>

							
<!-- Main container -->
<div class="container-fluid" >

<div id="myBody">
  <div class="row">						

<!-- Column Navigation -->
<div class="col-md-3 order-2 order-md-1" >

<div class="list-group-flush myLightBox mb-4">
  <div class="list-group-item contents" >Table of Contents</div>
    <a href="index.php#WebAppExploitation" class="list-group-item list-group-item-action">1. Web App Exploitation</a>

  <a href="index.php#html" class="list-group-item list-group-item-action lvl2">1.1 Html</a>
  <a href="index.php#css" class="list-group-item list-group-item-action lvl2">1.2 CSS</a>

    <a href="index.php#javascript" class="list-group-item list-group-item-action lvl2">1.3 JavaScript</a>
	
  <a href="index.php#database" class="list-group-item list-group-item-action lvl2">1.4 Databases</a>
  
  <a href="index.php#SecurityVulnerabilities" class="list-group-item list-group-item-action">2. Security Vulnerabilities</a>
  
    <a href="index.php#htmlVulnerabilities" class="list-group-item list-group-item-action lvl2">2.1 html Vulnerabilities</a>
  <a href="index.php#CSSVulnerabilities" class="list-group-item list-group-item-action lvl2">2.2 CSS Vulnerabilities</a>
  <a href="index.php#JavaScriptVulnerabilities" class="list-group-item list-group-item-action lvl2">2.3 JavaScript Vulnerabilities</a>
    <a href="index.php#DatabaseVulnerabilities" class="list-group-item list-group-item-action lvl2">2.4 Database Vulnerabilities</a>
  <a href="index.php#Summary" class="list-group-item list-group-item-action">3. Summary</a>
  

</div>




<div class="list-group-flush myLightBox mb-3">

  <div class="list-group-item contents" >Challenges</div>
  <a href="index1.php" class="list-group-item list-group-item-action">Challenge 1</a>
  <a href="index2.php" class="list-group-item list-group-item-action">Challenge 2</a>
  <a href="index3.php" class="list-group-item list-group-item-action">Challenge 3</a>

</div>

</div>

<!-- End column -->	