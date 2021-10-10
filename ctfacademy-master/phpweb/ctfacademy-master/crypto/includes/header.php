<!DOCTYPE html>
<html  lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>CTF Academy : Cryptography</title>
			<meta name="description" content="In this lesson we will cover a few cryptographic concepts along with the related fields of digital forensics and steganography. Cryptography is the process of encoding or decoding messages and data. In this lesson we will learn about cryptography in three broad sections, ciphers, encryption, and hashing. Although cryptography is widely used in computer systems today, mostly in the form of encryption and hashes, some cryptographic techniques have been in use since the days of Julius Caesar and the Roman Empire.">
			
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
						Cryptography
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
    <a href="index.php#Cryptography" class="list-group-item list-group-item-action">1. Cryptography</a>

  <a href="index.php#Ciphers" class="list-group-item list-group-item-action lvl2">1.1 Ciphers</a>

  
  <a href="index.php#DigitalForensics" class="list-group-item list-group-item-action">2. Digital Forensics</a>

  <a href="index.php#Steganography" class="list-group-item list-group-item-action">3. Steganography</a>
  
   <a href="index.php#FileSteganography" class="list-group-item list-group-item-action lvl2">3.1 File Steganography</a>
   
   
   <a href="cyberchef.php" class="list-group-item list-group-item-action">CyberChef</a>
  

</div>




<div class="list-group-flush myLightBox mb-3">

  <div class="list-group-item contents" >Challenges</div>
  <a href="index1.php" class="list-group-item list-group-item-action">Challenge 1</a>
  <a href="index2.php" class="list-group-item list-group-item-action">Challenge 2</a>
  <a href="index3.php" class="list-group-item list-group-item-action">Challenge 3</a>

</div>

</div>

<!-- End column -->						