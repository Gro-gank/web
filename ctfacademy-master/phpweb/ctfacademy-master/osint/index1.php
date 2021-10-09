<?php include'includes/header.php';?>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="../index.php">Open Source Intelligence</a></li>
				  <li class="breadcrumb-item active">Challenge 1</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<h3>Challenge 1: Attention to Details</h3>

<p>
Below is a screenshot from a recent interview with the Company CEO. We believe that the CEO’s email and password are located somewhere in the picture. Find his sign-in credentials and try to log in. <a href="challenge1/challenge1.jpg" target="_blank">
Left-click to open the image in a new tab to maginify it.
</a>
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge1/challenge1.jpg" alt="Challenge Picture">
</div>

<div class = "mySignInBox myLightBox my-4">

<form class="text-center">
<div class = "mySignIn p-2">
	
    <p class="h4">Sign in</p>
	
</div>
	
<div class = "mySignInFields p-4">

<div class="mb-3"> 
    <input type="text" id="username" class="form-control mb-3" placeholder="Email" required>
	
    <input type="password" id="password" class="form-control mb-1" placeholder="Password" required>
	
	<span id="loginFeedback"></span>
</div>
    <button onclick="buttonFunction()" class="btn btn-mybutton btn-block mb-2" id = "signin" type="button">Sign in</button>
</div>
</form>
</div>


<div id="flagDiv">

	<span id="successFlag"></span>

</div>


<p>
<b>Challenge 1:</b> Find the flag and input the answer.
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


			
			<div id="backToTop" class="my-3">
<a href="#top">Back to Top</a>
<!-- Takes user to top of home page -->								
</div>

<ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link disabled" href="index.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	
  <li class="page-item "><a class="page-link" href="index.php">1</a></li>
  <li class="page-item active"><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item"><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item"><a class="page-link" href="answer2.php">5</a></li>
    
   <li class="page-item">
      <a class="page-link" href="answer1.php" aria-label="Next">
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
				
<?php include'includes/footer.php';?>