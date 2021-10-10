<?php include 'includes/header.php';?>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Cryptography</a></li>
				  <li class="breadcrumb-item"><a href="index3.php">Challenge 3</a></li>
				  <li class="breadcrumb-item active">Explanation</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 3 Explanation: Cryptography</h3>

<p>
There are many steganographic techniques used to hide a message within another message or a file. In this lesson, we learned about the steganographic technique of hiding a message at the end of a picture file by entering text after the “end of file” signature. This technique can be used to send messages that are hidden in plain sight.
</p>

<p>
First open the picture file in a picture viewing application. Upon first glance, the picture seems benign and free of hidden messages.
</p>


<div class="screenshot myLightBox my-3">
		<img src="challenge3/Stego_1.png" alt="Explanation Image">
</div>

<p>
Next open the file in Notepad and view the text that comprises the picture file. Scroll to the bottom of the file, and you will find a secret message appended to the end of the file. At the bottom of the file, you will find a plaintext flag: ctfa{Stegosaurus}
</p>


<div class="screenshot myLightBox my-3">
		<img src="challenge3/crypto3.2.JPG" alt="Explanation Screenshot 1">
</div>


			
			<div id="backToTop" class="my-3">
<a href="#top">Back to Top</a>
<!-- Takes user to top of home page -->								
</div>

<ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link disabled" href="index3.php" aria-label="Previous">
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
