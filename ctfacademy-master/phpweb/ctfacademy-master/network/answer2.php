<?php include 'includes/header.php';?>			


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Network Forensics</a></li>
				  <li class="breadcrumb-item"><a href="index2.php">Challenge 2</a></li>
				  <li class="breadcrumb-item active">Explanation</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 2 Haystack</h3>

<p>
Again, we are tasked with finding flags in a “.pcap” file; however, this time there are two flags.  
</p>

<p>
First, open the file in WireshakPortable by double-clicking on the “WiresharkPortable.exe” file included in the CTFA “Programs” folder.
</p>

<p>
If presented with a warning, like the one below, click “Yes.”
</p>


<div class="otherPic myLightBox my-3">
		<img src="challenge1/netWarning.JPG" alt="Explanation Screenshot 1">
</div>

<p>
Next, click on “File” in the upper right corner of the Wireshark application and select “Open.” Now navigate to where you saved the “Haystack.pcap” file and select it.
</p>


<div class="otherPic myLightBox my-3">
		<img src="challenge1/openFile.JPG" alt="Explanation Screenshot 2">
</div>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/net2.1.jpg" alt="Explanation Screenshot 1">
</div>

<p>
Now that the file is open, we can search for the flag. Unlike the last challenge, there are several different protocols captured in the file. Since we know the flag was on a webpage, we can start by looking through the “HTTP” packets. Analyzing the first HTTP response from the server, the second HTTP packet in the file, we can see the first flag. To get a better view, right-click the packet and select “Follow &gt; TCP Stream.”
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/net2.2.jpg" alt="Explanation Screenshot 2">
</div>


<div class="otherPic myLightBox my-3">
		<img src="challenge2/net2.3.jpg" alt="Explanation Screenshot 3">
</div>

<p>
The first flag, ctfa{HTTP_FTW} can be seen in the picture above.
</p>

<p>
To resume analyzing the entire file, click the small “x” in the filter input bar.
</p>

<p>
To find the second flag, we will repeat the process of analyzing HTTP traffic for each page until we find the data containing the flag. In the last HTTP interaction, “/page4.html”, we will find the second flag.
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/net2.4.jpg" alt="Explanation Screenshot 4">
</div>

<p>
Great job! We now have both flags from this file. 
</p>

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
				
<?php include 'includes/footer.php';?>