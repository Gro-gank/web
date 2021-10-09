<?php include'includes/header.php';?>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item active">Open Source Intelligence</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../other/enable_javascript.php">click here</a>.				
				</noscript>

<h3 id="OpenSourceIntelligence">1. Open Source Intelligence</h3>


<p>
Open source intelligence, also known as OSINT, refers to the gathering of information from publicly available sources, such as social media, company websites, and news articles. There is a great deal of information that can be gathered about a company or person through open source intelligence.
</p>

<h4 id="OSINTTechniques">1.1 OSINT Techniques</h4> 



<p>
In a cybersecurity context, OSINT can be used to recon a target before performing a <a href="../other/glossary.php#penetrationtest" target="_blank">penetration test</a> or to generate a report of the information a company is leaking through public sources. Cyber criminals use OSINT to collect information on a target before attacking; also, OSINT can be used to help guess a user’s password. Many people use passwords that relate to themselves. For example, a common password creation method is to use the name of your favorite pet followed by the year you were born. This is a very poor password creation technique because this information is easy for a <a href="../other/glossary.php#malicious " target="_blank">malicious</a> user to obtain from openly available sources, such as your social media accounts. In addition to possible password information, OSINT can reveal information about a company’s internal computer network. For example, a company’s promotional website may include pictures of employees working. These pictures may reveal information about the company’s innerworkings, such as internal website URLs and private documents. OSINT can also be used to create a phony, malicious email targeting a company or individual; these phony emails are referred to as “phishing” emails.
</p>
 

<h4 id="OSINTAttackExample">1.2 OSINT Attack Example</h4>
<p>
The following is an example of a company press release and a phishing email created using information from the press release:
</p>


<div class="myLightBox Email my-3">

<div class = "mySignIn p-2 text-center">
	
    <p class="h4">Company XYZ</p>
	
</div>

<div class="p-3">
<p>
Recently Company XYZ has been making astounding progress on a new project. We have been working with many of the finest software engineers to develop a new internet browser with voice control capabilities. A special thanks goes out to John Smith from Software ABC Corp. for his assistance with this project (more information can be found at softwareabccorp.com). The expected release date is early 2021.
</p>

<p>
Company XYZ,
<br>
Speaking is the future!
</p>
</div>
</div>


<p>
Using the information in the above press release, an attacker could form the following phishing email:
</p>

<div class="myLightBox Email my-3">

<div class = "mySignIn p-1 text-center">
	
    <p class="h4">Email</p>
	
</div>


<div class="emailInfo">
<p >
To: ceo@companyxyz.com
</p>

<p>
From: jsmith@softwareabccorp.co
</p>

<p>
Subject: New Research About Voice Control
</p>
</div>

<div class="p-3">

<p>
Dear Company XYZ CEO,
</p>

<p>
Here is a link to my new research paper about voice control technologies: Softwarecorp.co/newpaper.pdf.
</p>

<p>
Due to our recent collaboration on your new internet browser, I know this paper will interest you greatly. Please read it and give me your thoughts.
</p>

<p>

</p>

<p>
Thank you,
<br>
John Smith
<br>
Software ABC Corp.
</p>
</div>
</div>

<p>
The attacker would send the above email to the CEO in hopes she would click on the link and unknowingly download the attacker’s malicious file containing a computer virus. 
</p>


<p>
The attacker created this email using information gleamed from Company XYZ’s press release. The attacker registered a website and email at “softwareabccorp.co,” notice the “.co” instead of the “.com” at the end of the address. Also, the name of the researcher connected to the project, John Smith, was mention in the press release and was used by the attacker to add believability to his phishing email. Finally, the attacker’s link to a supposed “research paper” that would be of interest to the targeted CEO. In a malicious phishing email, this link would lead to a computer virus and infect the CEO’s computer. 
</p>

 
<h3 id="OSINTDefensiveTechniques">2. OSINT Defensive Techniques</h3>

<p>
OSINT can also be used in a defensive manner. Open source intel can be used to keep up with cybersecurity trends and the techniques cyber criminals are using right now. There are many websites that provide OSINT about cyber attack trends reported by cybersecurity professionals. Also, when a company is receiving unusual internet traffic, OSINT can be used to determine if the usual traffic is coming from a known malicious IP address (An IP address is a four part number that identifies the source of a network connect).
</p>

<p>
The following are just a few of the thousands of IP addresses that originate from China:
</p>

<p>
Using information from public sources about IP address origins, a cyber defender can better analyze unusual internet traffic. 
</p>

<p>
For example, if the network administrator at an organization notices a high volume of internet traffic causing the organization’s website to be overloaded, he can analyze the origins of the internet traffic and determine if the traffic is likely malicious. By using OSINT to research the IP addresses of the internet traffic, a cybersecurity specialist can determine if the traffic is originating from known malicious IP addresses.
</p>

<div class="table-responsive ">
 
 <table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">Chinese IP Addresses</th>

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
	
  </tbody>
</table>
</div>

<p>
Using information from public sources about IP address origins, a cyber defender can better analyze unusual internet traffic. 
</p>

<p>
For example, if the network administrator at an organization notices a high volume of internet traffic causing the organization’s website to be overloaded, he can analyze the origins of the internet traffic and determine if the traffic is likely malicious. By using OSINT to research the IP addresses of the internet traffic, a cybersecurity specialist can determine if the traffic is originating from known malicious IP addresses.
</p>

			
			<div id="backToTop" class="my-3">
<a href="#top">Back to Top</a>
<!-- Takes user to top of home page -->								
</div>


<ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link disabled" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	
  <li class="page-item active"><a class="page-link" href="index.php">1</a></li>
  <li class="page-item"><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item"><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item"><a class="page-link" href="answer2.php">5</a></li>
    
   <li class="page-item">
      <a class="page-link" href="index1.php" aria-label="Next">
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
<!-- Main Container End --> 
<?php include'includes/footer.php';?>
				
