<?php include 'includes/header.php';?>				


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Web App Exploitation</a></li>
				  <li class="breadcrumb-item"><a href="index1.php">Challenge 1</a></li>
				  <li class="breadcrumb-item active">Explanation</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 1 Explanation: Commit to Comments</h3>

<p>
When developing or securing a web page, you should always check for comments in the HTML source left by developers. Sometimes, HTML comments pose no security risk, such as comments denoting page sections; however, some comments, such as those commenting out incomplete or insecure web page functions, can compromise the security of the web page. The answers to this challenge can be found in the comments in the challenge’s web page source.
</p>

<p>
Below is a step-by-step guide of how to answer the questions and complete the challenge.
</p>

<p>
Begin by right-clicking on the page and selecting “View Page Source.”
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge1/web1.1.JPG" alt="Explanation Screenshot 1">
</div>

<p>
Next, look through the page’s source for any comments of interest. For this challenge, there are several interesting comments grouped together as seen below.
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge1/web1.2.JPG" alt="Explanation Screenshot 2">
</div>

<p>
The answer to the first question can be found on line 161 in the page source. As seen in the above screenshot, the answer is “Sir Code-a-lot”.
</p>

<p>
The answer to question 2 can be found on the same line as the answer to question 1; the answer is “April”.
</p>

<p>
The answer to question 3 can be found on lines 165 and 166 of the page’s source. As we can see, the developer made a note that the “Admin.phpl” page is not complete; however, the developer created a link to the page and commented out the link. 
</p>

<p>
The flag is found on line 171 of the page’s source.
</p>


			
			<div id="backToTop" class="my-3">
<a href="#top">Back to Top</a>
<!-- Takes user to top of home page -->								
</div>

<ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link disabled" href="index1.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	
  <li class="page-item "><a class="page-link" href="index.php">1</a></li>
  <li class="page-item "><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item active"><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item"><a class="page-link" href="answer2.php">5</a></li>
  <li class="page-item"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item"><a class="page-link" href="answer3.php">7</a></li>
    
   <li class="page-item">
      <a class="page-link" href="index2.php" aria-label="Next">
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