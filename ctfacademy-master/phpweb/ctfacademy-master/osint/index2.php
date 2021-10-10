<head>
    <script src="./challenge2/flagValidate.js"></script>

</head>
<?php include'includes/header.php';?>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="index2.php">Open Source Intelligence</a></li>
				  <li class="breadcrumb-item active">Challenge 2</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 2: Cross Reference</h3>

<p>
Below is a list of know malicious IP addresses gather through OSINT. Can you use this list to identify the malicious IPs in the web server log?
</p>


<div class="table-responsive ">
 
 <table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">Malicious  IP Addresses</th>

    </tr>
  </thead>
  
  <tbody>
    <tr>
      <td>36.37.36.114</td>
    </tr>
   
       <tr>
      <td>36.37.39.204</td>
    </tr>
	
	    <tr>
      <td>42.1.128.64</td>
    </tr>
	
	
	<tr>
      <td>51.254.200.34</td>
    </tr>
	
	<tr>
      <td>178.34.15.6</td>
    </tr>
	
	<tr>
      <td>36.241.115.49</td>
    </tr>
	
	
  </tbody>
</table>
</div>



<div class="table-responsive py-2">
 
 <table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">IP Address</th>
	  <th>Date and Page</th>

    </tr>
  </thead>
  
  <tbody>
    <tr>
      <td>10.0.0.49 
	  </td>
	  
	  
	  <td>[12/Jul/2019 19:01:31] "GET / HTTP/1.1" 200 
	  </td>
    </tr>
   
       <tr>
      <td>36.37.39.204 
	  </td>
	  
	  <td>[12/Jul/2019 19:01:32] code 404, message File not found
	  </td>
    </tr>
	
	    <tr>
      <td>10.0.0.49 
	  </td>
	  
	  <td>[12/Jul/2019 19:01:32] "GET /favicon.ico HTTP/1.1" 404 
	  </td>
    </tr>
	
	
	<tr>
      <td>178.34.15.6 
	  </td>
	  
	  <td>[12/Jul/2019 19:01:32] code 404, message File not found
	  </td>
    </tr>
	
	<tr>
      <td>10.0.0.125 
	  </td>
	  
	  <td>[12/Jul/2019 19:01:32] "GET /favicon.ico HTTP/1.1" 404 
	  </td>
    </tr>
	
	<tr>
      <td>10.0.0.125 
	  </td>
	  
	  <td>[12/Jul/2019 19:01:46] code 404, message File not found
	  </td>
    </tr>
	
	<tr>
      <td>42.1.128.64 
	  </td>
	  
	  <td>[12/Jul/2019 19:01:46] "GET /page1.html HTTP/1.1" 404 
	  </td>
    </tr>
	
	<tr>
      <td>10.0.0.49 
	  </td>
	  
	  <td>[12/Jul/2019 19:02:25] "GET /page2.html HTTP/1.1" 200 
	  </td>
    </tr>
	
	<tr>
      <td>36.37.39.204 
	  </td>
	  
	  <td>[12/Jul/2019 19:02:33] "GET /page3.html HTTP/1.1" 200 
	  </td>
    </tr>
	
	<tr>
      <td>36.37.39.204 
	  </td>
	  
	  <td>[12/Jul/2019 19:02:45] "GET /page4.html HTTP/1.1" 200 
	  </td>
    </tr>
	
	<tr>
      <td>10.0.0.100 
	  </td>
	  
	  <td>[12/Jul/2019 19:02:59] "GET / HTTP/1.1" 200 
	  </td>
    </tr>
	
	<tr>
      <td>36.37.39.204 
	  </td>
	  
	  <td>[12/Jul/2019 19:03:03] "GET / HTTP/1.1" 200 
	  </td>
    </tr>
	
	<tr>
      <td>10.0.0.125 
	  </td>
	  
	  <td>[12/Jul/2019 19:03:13] "GET /page4.html HTTP/1.1" 200 
	  </td>
    </tr>
	
	<tr>
      <td>10.0.0.49 
	  </td>
	  
	  <td>[12/Jul/2019 19:03:17] "GET /page2.html HTTP/1.1" 200 
	  </td>
    </tr>
	
	<tr>
      <td>36.37.39.204 
	  </td>
	  
	  <td>[12/Jul/2019 19:03:20] "GET /page3.html HTTP/1.1" 200 
	  </td>
    </tr>
	
	<tr>
      <td>10.0.0.100 
	  </td>
	  
	  <td>[12/Jul/2019 19:03:23] "GET /page2.html HTTP/1.1" 200 
	  </td>
    </tr>
	
	<tr>
      <td>10.0.0.100 
	  </td>
	  
	  <td>[12/Jul/2019 19:03:30] "GET / HTTP/1.1" 200 
	  </td>
    </tr>
	
	
  </tbody>
</table>
</div>






<p>
<b>Question 1:</b> What is the first malicious IP address in this log?
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
<b>Question 2:</b> What is the second malicious IP in this log?
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
<b>Question 3:</b> What malicious IP appeared the most in this log?
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


<p>
<b>Question 4:</b> How many times did the answer to Question 3 appear in the log?
</p>

<!-- Flag input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Question 4</p>	
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
      <a class="page-link" href="answer1.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	
  <li class="page-item "><a class="page-link" href="index.php">1</a></li>
  <li class="page-item "><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item"><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item active"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item"><a class="page-link" href="answer2.php">5</a></li>
    
   <li class="page-item">
      <a class="page-link" href="answer2.php" aria-label="Next">
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