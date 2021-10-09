<?php include 'includes/header.php' ; ?>
<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item active">Home</li>
				  
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="other/enable_javascript.php">click here</a>.				
				</noscript>

<p>
Welcome to Cyber Training Force Academy (CTFA). CTFA is an elite training platform for tomorrow’s cyber-defenders. Through the course of four modules, you will learn some of the basics of the cybersecurity world. In module 1, we dive into the realm of cryptography and learn about ciphers, file forensics, and steganography. For module 2, we will study the investigative tactics of open-source intelligence. Module 3 introduces the world of web application exploitation as we explore the many ways that web security can be breached. Finally, in module 4, we will swim in the waters of network forensics as we learn to analyze network traffic using Wireshark. 
</p>


	<!-- <div class="myVideo my-3">
<div class="embed-responsive embed-responsive-16by9">
    <video  class="embed-responsive-item" controls>
        <source src="Intro_v3.mp4" type="video/mp4">
		Your browser does not support the video tag.
    </video>
</div>
</div> -->





	<div class="container my-3">
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CkFyQmXL0bA" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
	  
	  </iframe>
	</div>
	</div>
	
	



	
	

<p>
Our mission at CTF Academy is to help you learn about cybersecurity through an immersive and entertaining course. We hope this curriculum will give you an understanding of a few cybersecurity fundamentals and spark a passion for cybersecurity. The world needs more cyber-defenders, and after this course, we hope you will answer the call to defend the world from cyber-threats. 
</p>

<p>
CTFA draws inspiration for its challenge-based learning exercises from cyber capture-the-flag (CTF) competitions. A cyber CTF is a competition where competitors are challenged with finding flags in files or computer systems. In a cyber-CTF, a flag is represented by a string of text, usually including a prefix and curly brackets ({ }). CTFA’s flags will always have the prefix “ctfa” followed by text contained in curly brackets, like so “ctfa{example_flag}”. In this curriculum, we have adapted the cyber-CTF concept to provide you with an interactive learning experience. At the end of each module, there will be a few CTF-style challenges that relate to the concepts presented in the preceding lesson; along with write-ups explaining how to solve the challenges. These challenges are designed to engage students in hands-on learning and allow them to explore the creative ways each challenge can be solved. 
</p>

<p>
To demonstrate how answers and flags are submitted, below is an example flag input bow. Try it out by entering the following flag: ctfa{example_flag}
</p>

<!-- Flag input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Input Flag</p>	
</div>	
<div class = "mySignInFields p-4">	
	<div class="mb-3">    
    <input type="text" id="flag" class="form-control">	
	<span id="flagFeedback"></span>
	</div>
	
    <!-- Submit button -->
    <button onclick="myFlag()" class="btn btn-mybutton btn-block mb-2" id = "submit" type="button">Submit</button>

    </div>
</form>
</div>
<!-- Flag form End -->

<p>
If you enter the flag correctly, you should see a completion message, like in the example form below. This is how you will know if you submitted the correct answer as you complete the challenges. 
</p>


<!-- Q1 input form -->
<div class = "mySignInBox myLightBox my-4 exampleForm">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Input Flag</p>	
</div>	
<div class = "mySignInFields p-4">	
	<div class="mb-3">    
    <input type="text" class="form-control" value="ctfa{example_flag}">	
	<span>Good job!</span>
	</div>
	
    <!-- Submit button -->
    <button class="btn btn-mybutton btn-block mb-2" type="button">Submit</button>

    </div>
</form>
</div>
<!-- Flag form End -->

<p>
CTFA is designed to run entirely on your local computer system with no internet connection. The curriculum uses local webpage technologies to create an interactive learning experience. If you want to use CTF Academy in an offline environment, <a href="https://github.com/ctfacademy/ctfacademy.github.io/archive/ctfacademy.zip">right-click to download the CTF Academy zip file</a> or <a href="https://github.com/ctfacademy/ctfacademy.github.io" target="_blank">click here to go to the GitHub page</a>.
</p>

<p>
For a guide on how to unzip the file and get started <a href="other/quick_start.php">click here</a>.
</p>

<p>
By using and/or downloading Cyber Training Force Academy, you are agreeing to the terms and conditions found <a href="other/terms-of-use.php">here</a>. Also, cybersecurity ethics is crucial when learning cybersecurity techniques, <a href="other/ethics.php">so please click here to read about cybersecurity ethics</a>.
</p>

<p>
Thank you for joining CTF Academy!
</p>

<p>
<a href="crypto/index.php">Click here to get started with the first lesson.</a>
</p>


<p>
Why you should choose a career in cybersecurity.
</p>



	<div class="myVideo my-3">
<div class="embed-responsive embed-responsive-16by9">
    <video  class="embed-responsive-item" controls>
        <source src="Why_Choose_cyber.mp4" type="video/mp4">
		Your browser does not support the video tag.
    </video>
</div>
</div>



<!--

<div class="container my-3">
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/muOReBVc6AY" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
	  
	  </iframe>
	</div>
	</div>


	
	-->


			
			<div id="backToTop" class="my-3">
<a href="#top">Back to Top</a>
<!-- Takes user to top of home page -->								
</div>

</div>
<!-- Main End --> </div>
</div>
</div>
</div>
<!-- Main Container End --> 
<?php include'includes/footer.php';?>				
