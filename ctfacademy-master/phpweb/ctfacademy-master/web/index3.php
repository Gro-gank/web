<?php include 'includes/header.php';?>


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Web App Exploitation</a></li>
				  <li class="breadcrumb-item active">Challenge 3</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 3: SQL (High Difficulty)</h3>

<p>
For this challenge, you will need to log in again as the site administrator, but this time he changed his password and is now using a SQL database to store his password. Use what you’ve learned so far to login and get the flag.
</p>



<p>
<b>Hint:</b> the administrator’s username is the same as in the last challenge, only his password has changed.
</p>

<!-- Sign in form -->
<div class = "mySignInBox myLightBox my-4">

<form class="text-center">
<div class = "mySignIn p-2">
	
    <p class="h4">Sign in</p>
	
</div>
	
<div class = "mySignInFields p-4">

<div class="mb-3"> 
    <input type="text" id="username" class="form-control mb-3" placeholder="Username" required>
	
    <input type="password" id="password" class="form-control mb-1" placeholder="Password" required>
	
	<span id="loginFeedback"></span>
</div>
    <button onclick="buttonFunction()" class="btn btn-mybutton btn-block mb-2" id = "signin" type="button">Sign in</button>
</div>
</form>
</div>

<!-- Challenge Content Ends here -->

<div id="flagDiv">

	<span id="successFlag"></span>

</div>


<p>
<b>Question 1:</b> Here is an example of what the SQL command used by this login might look like: “SELECT password FROM passwordTable _______ password = userInput”
</p>
<p>
Fill in the blank with the correct SQL syntax.
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
<b>Challenge 3:</b> Find the flag and input the answer.
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
      <a class="page-link disabled" href="answer2.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	
  <li class="page-item "><a class="page-link" href="index.php">1</a></li>
  <li class="page-item "><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item"><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item"><a class="page-link" href="answer2.php">5</a></li>
  <li class="page-item active"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item"><a class="page-link" href="answer3.php">7</a></li>
    
   <li class="page-item">
      <a class="page-link" href="answer3.php" aria-label="Next">
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