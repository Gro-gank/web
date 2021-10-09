<?php include'includes/header.php';?>


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Open Source Intelligence</a></li>
				  <li class="breadcrumb-item"><a href="index2.php">Challenge 2</a></li>
				  <li class="breadcrumb-item active">Explanation</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 2 Explanation: Cross Reference</h3>

<p>
Being able to translate data gathered through OSINT into actionable information is a very important skill in cybersecurity. Often OSINT reveals new tactics and techniques that malicious users might employ; therefore, taking information gathered using OSINT and translating that information into a real-world defensive plan is very valuable.  
</p>

<p>
To answer the questions for this challenge, you must cross reference the provided OSINT data about malicious IP addresses with the IP addresses in the log file.
</p>


<p>
Question 1 asks you to identify the first malicious IP address that accessed the web server. To answer this question, compare the IPs found in the access log and to the malicious IPs in the provided list. In this case, the answer is “36.37.39.204”.
</p>

<p>
Question 2 is answered in much the same way. Simply identify the second malicious IP in the log, “178.34.15.6”.
</p>

<p>
For questions 3 and 4, count the number of times each malicious IP appears and determine which one appears the most. The answer is “36.37.39.204”, which appears 5 times in the log.
</p>

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
				
<?php include'includes/footer.php';?>