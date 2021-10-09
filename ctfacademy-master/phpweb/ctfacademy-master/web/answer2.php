<?php include 'includes/header.php';?>					


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="index1.php">Web App Exploitation</a></li>
				  <li class="breadcrumb-item"><a href="index2.php">Challenge 2</a></li>
				  <li class="breadcrumb-item active">Explanation</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 2 Explanation: Cup of JavaScript</h3>

<p>
Using JavaScript for client-side login pages is a very insecure practice; doing so can lead to exposing the usernames and passwords. Because the login form in Challenge 2 is processed client-side, you can view the source code and find the administrator’s password. When building a secure web application, you should always store and process login information on the web server, not on the client’s browser. 
</p>

<p>
Below is a step-by-step guide of how to answer the questions and complete the challenge.
</p>

<p>
Much like the previous challenge, we begin by viewing the page source. Right-click on the page and select “View page source.”
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/web2.1.JPG" alt="Explanation Screenshot 1">
</div>

<p>
Viewing the page source allows us to see the JavaScript function that handles signing in. On line 170, we see a comment indicating the beginning of the sign-in function; this is where we will focus our investigation. 
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/web2.2.JPG" alt="Explanation Screenshot 2">
</div>

<p>
On line 171, we see that the “buttonFunction()” starts. This is the function that processes the sign-in. On lines 181 and 183, we can see the username and password of the administrator, “admin” and “SuperSecretPassword.”
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/web2.3.JPG" alt="Explanation Screenshot 3">
</div>

<p>
On line 262, the “buttonFunction()” is called when a user clicks on the sign-in button. 
</p>

<p>
To complete this challenge, enter the username and password we found in the source and click “Sign In” and the flag will be displayed.
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/web2.4.JPG" alt="Explanation Screenshot 3">
</div>


			
			<div id="backToTop" class="my-3">
<a href="#top">Back to Top</a>
<!-- Takes user to top of home page -->								
</div>

<ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link disabled" href="index2.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	
  <li class="page-item "><a class="page-link" href="index.php">1</a></li>
  <li class="page-item "><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item "><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item active"><a class="page-link" href="answer2.php">5</a></li>
  <li class="page-item"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item"><a class="page-link" href="answer3.php">7</a></li>
    
   <li class="page-item">
      <a class="page-link" href="index3.php" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
</ul>

</div>
<!-- Main End --> </div>
</div>
</div>
</div>
<!-- Main Cotainer End --> 
				
<?php include 'includes/footer.php';?>
