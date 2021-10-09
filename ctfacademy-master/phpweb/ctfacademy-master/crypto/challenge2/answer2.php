<?php include 'includes/header.php';?>


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Cryptography</a></li>
				  <li class="breadcrumb-item"><a href="index2.php">Challenge 2</a></li>
				  <li class="breadcrumb-item active">Explanation</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 2 Explanation: Forensics</h3>

<p>
Cyber forensics is an important field in the cybersecurity world. Through forensics, cyber investigators are able to identify and understand the actions and methods of cyber criminals. File forensic techniques range from file signature identification to complicated binary analysis. In the preceding lesson, we learned how to identify file types through examining file signatures. 
</p>

<p>
The provided file has an extension of “.pdf” however, if you try to open the file by double-clicking on it, the file will not open properly and likely display an error message.
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/crypto2.1.JPG" alt="Explanation Screenshot 1">
</div>

<p>
To investigate this file, first open the file in Notepad to view the file signature. As you can see in the screenshot the file signature, and answer to question 1, is “PNG.”
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/crypto2.2.JPG" alt="Explanation Screenshot 2">
</div>

<p>
To view the file as a PNG, rename the file and change the extension to “.png”, and open the file using a picture viewing application. In the picture, you will find the flag.
</p>

<div class="otherPic myLightBox my-3">
		<img src="challenge2/extension.png" alt="Explanation example">
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