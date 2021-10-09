<?php include 'includes/header.php';?>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Web App Exploitation</a></li>
				  <li class="breadcrumb-item"><a href="index3.php">Challenge 3</a></li>
				  <li class="breadcrumb-item active">Explanation</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 3 Explanation: SQL</h3>

<p>
Explanation: When dealing with user input, it is always a good idea to sanitize the input before accepting it. Taking user input and processing it without sanitizing it first can lead to vulnerabilities, such as the SQL injection you just exploited. When creating anything from a login page to a comment box, you should always sanitize user input before processing or storing input. 
</p>

<p>
Below is a step-by-step guide of how to answer the questions and complete the challenge.
</p>

<p>
Recall the syntax and structure of SQL statements, which we discussed in the lesson: “<b>SELECT row FROM table WHERE column = 'query'</b>”. With this in mind, we can see that this statement, “<b>SELECT password FROM passwordTable _______ password = userInput</b>,” is missing “WHERE.” 
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge3/web3.1.1.JPG" alt="Explanation Screenshot 1">
</div>

<p>
Again, we must remember what we learned in the lesson; for the SQL statement to return true, we either need the admin's password, which we don't know, or we need to input something else as the password that will make the SQL statement true. In the lesson we discussed a “<b>x' OR '1'='1</b>” statement that always returns true. We can enter this statement as the password and the login form will return true, even though we do not know the admin's password. When we click “Sign In,” we are presented with the flag.
</p>


<div class="screenshot myLightBox my-3">
		<img src="challenge3/web3.1.JPG" alt="Explanation Screenshot 2">
</div>


			
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
  <li class="page-item "><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item "><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item "><a class="page-link" href="answer2.php">5</a></li>
  <li class="page-item"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item active"><a class="page-link" href="answer3.php">7</a></li>
    
   <li class="page-item">
      <a class="page-link disabled" aria-label="Next">
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