<?php include'includes/header.php';?>
<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Web App Exploitation</a></li>
				  <li class="breadcrumb-item active">Challenge 1</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 1: Commit to Comments</h3>
<!-- Page developed by “Sir Code-a-lot” in April 2019 -->
<p>
It looks like this page may have some useful information hiding in its source code. See if you can answer these questions and find the flag.
</p>
<!-- To-Do: Make the “Admin.html” page and uncomment this link
<a href="Admin.html"> Click here for the Admin page!</a> -->

<p>
<b>Hint:</b> Right click the page and select “View Page Source” or input “Ctrl+U” to view the HTML code and find the comments!
</p>
<!-- Great Job! Here’s your flag: ctfa{Quest_for_Comments} -->
<p>
<b>Question 1:</b> What is the developer’s nickname?
</p>

<!-- Q1 input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Question 1</p>	
</div>	
<div class = "mySignInFields p-4">	
	<div class="mb-3">    
    <input type="text" id="flag1" class="form-control">	
	<span id="flagFeedback1"></span>
	</div>
	
    <!-- Submit button -->
    <button onclick="q1()" class="btn btn-mybutton btn-block mb-2" id = "submit1" type="button">Submit</button>

    </div>
</form>
</div>
<!-- Flag form End -->



<p>
<b>Question 2:</b> What month of the year was this webpage written in?
</p>

<!-- Q2 input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Question 2</p>	
</div>	
<div class = "mySignInFields p-4">	
	<div class="mb-3">    
    <input type="text" id="flag2" class="form-control">	
	<span id="flagFeedback2"></span>
	</div>
	
    <!-- Submit button -->
    <button onclick="q2()" class="btn btn-mybutton btn-block mb-2" id = "submit2" type="button">Submit</button>

    </div>
</form>
</div>
<!-- Flag form End -->

<p>
<b>Question 3:</b> What is the name of the webpage that the developer has not finished making (and therefore not linked to)?
</p>

<!-- Q3 input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Question 3</p>	
</div>	
<div class = "mySignInFields p-4">	
	<div class="mb-3">    
    <input type="text" id="flag3" class="form-control">	
	<span id="flagFeedback3"></span>
	</div>
	
    <!-- Submit button -->
    <button onclick="q3()" class="btn btn-mybutton btn-block mb-2" id = "submit3" type="button">Submit</button>

    </div>
</form>
</div>
<!-- Flag form End -->

<!-- Challenge Content Ends here -->

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
  <li class="page-item"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item"><a class="page-link" href="answer3.php">7</a></li>
    
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
				
<?php include 'includes/footer.php';?>	