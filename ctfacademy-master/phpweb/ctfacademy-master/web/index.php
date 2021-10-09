<?php include 'includes/header.php';?>
<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				  <li class="breadcrumb-item active">Web App Exploitation</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../other/enable_javascript.php">click here</a>.				
				</noscript>

<h3 id="WebAppExploitation">1. Web App Exploitation</h3>
<p>
Web pages, just like the one you are reading now, are generally made of three components, HTML, CSS, and JavaScript. Each of these components has a different role in providing the formatting and functions of a webpage. The structure of a webpage can be compared to a human body: HTML is the bone structure, CSS is the appearance, and JavaScript is the muscles.
</p>

<h4 id="html">1.1 HTML</h4>
<p>
HTML is the backbone of a webpage; it gives the page its general structure. HTML stands for Hyper-Text Markup Language. HTML is used to determine how the webpage will be displayed. HTML “tags” are used to mark how the page should be structured. For example, this paragraph is marked with “p” tags, which tells the browser to show this text as a paragraph. HTML tags are enclosed in angle brackets (&lt; &gt;). Here is a sample of how a simple HTML page is structured:
</p>

<div class="htmlExample myLightBox py-4 px-1 my-3">
<p>

<span class="tag">&lt;</span><span class="tagname">!DOCTYPE html</span><span class="tag">&gt;</span>

</p>

<p class="htmllvl1">
<span class="tag">&lt;</span><span class="tagname">html</span><span class="tag">&gt;</span>
</p>

<p class="htmllvl2">
<span class="tag">&lt;</span><span class="tagname">body</span><span class="tag">&gt;</span>
</p>

<p class="htmllvl3">
<span class="tag">&lt;</span><span class="tagname">h1</span><span class="tag">&gt;</span>Example Heading<span class="tag">&lt;</span><span class="tagname">/h1</span><span class="tag">&gt;</span>
</p>

<p class="htmllvl3">
<span class="tag">&lt;</span><span class="tagname">p</span><span class="tag">&gt;</span>Example paragraph.<span class="tag">&lt;</span><span class="tagname">/p</span><span class="tag">&gt;</span>
</p>

<p class="htmllvl2">
<span class="tag">&lt;</span><span class="tagname">/body</span><span class="tag">&gt;</span>
</p>
<p class="htmllvl1">
<span class="tag">&lt;</span><span class="tagname">/html</span><span class="tag">&gt;</span>
</p>
</div>


<p>
You can view the HTML source of a webpage in most internet browsers. For Google Chrome, you can right-click the page and select “View Page Source” or use “Ctrl+U.” This will bring up the page's HTML source code. Try right clicking on this page to test this out.
</p>

<div class="screenshot myLightBox my-3">
		<img src="html.JPG" alt="HTML Example">
</div>
 
<h4  id="css">1.2 CSS</h4>
<p>
CSS determines the appearance of the webpage, much like a person's hair or clothes can change their appearance. CSS stands for Cascading Style Sheet and is a style language used to change and customize the look of HTML pages. CSS can be either included in an HTML file, by using a special tag, or by including the CSS as a separate file, which is more common. If the CSS is included in a file, it will be linked in the page's HTML source. It should look like this: <span class="tag">&lt;</span><span class="htmlColor">link href=</span><span class="tag">&quot;</span><span class="htmlColor">../style.css</span><span class="tag">&quot;</span> <span class="htmlColor">rel=</span><span class="tag">&quot;</span><span class="htmlColor">stylesheet</span><span class="tag">&quot;</span> <span class="htmlColor">/</span><span class="tag">&gt;</span>. See if you can view the CSS of this page.
</p>

<div class="screenshot myLightBox my-3">
		<img src="css.JPG" alt="CSS Example">
</div>

<h4  id="javascript">1.3 JavaScript</h4>
<p>
JavaScript provides a webpage with much of its functionality, similar to how a person's muscles allow them to move and function. JavaScript is a programming language used throughout the web to do just about anything from login functions to interactive games. Like CSS, JavaScript can be either included as a separate file or in the HTML file itself by using a special “&lt;script&gt;” tag.
</p>


<p>
Here is an example of a simple JavaScript login form:
</p>

<div class = "mySignInBox myLightBox my-3">

<form class="text-center">
<div class = "mySignIn p-2">
	
    <p class="h4">Sign in</p>
	
</div>
	
<div class = "mySignInFields p-4 ">
    <input type="text" id="username" class="form-control mb-4" placeholder="Username" required>
    <input type="password" id="password" class="form-control mb-4" placeholder="Password" required>
    <button class="btn btn-mybutton btn-block mb-2" id = "signin" type="button">Sign in</button>
</div>
</form>
</div>

<h4  id="database">1.4 Databases</h4>
<p>
In addition to these three main components of a webpage, databases can be used to provide additional functionality and information storage. To continue the analogy of a webpage being like a person, a database is akin to the human mind in that both store information for later access. Databases are usually separate from the webpage itself, but the two interact to store and retrieve data. The general structure of a database consists of “Columns,” "Rows,” and “Tables.” A row consists of one or more columns. Rows are entries of data in the database, and a collection of rows and columns are contained in a table. There are many different types of databases; the type we will be focusing on is called SQL (pronounced “sequel”). SQL stands for Structured Query Language and is the most popular database language. SQL databases, much like other computer applications, use a programing language to receive commands. The main <a href="../other/glossary.php#syntax" target="_blank">syntax</a> statements to understand for this lesson are the “<b>SELECT</b>,” “<b>FROM</b>,” and “<b>WHERE</b>” statements. As their names suggest, the “<b>SELECT</b>” command tells the database to select or retrieve something from a table. The “<b>FROM</b>” statement tells the database which table to select from. Finally, the “<b>WHERE</b>” statement tells the database the condition in which to retrieve the specified information; if the “<b>WHERE</b>” statement is true, the database retrieves the requested information, if not the database retrieves nothing. These three statements can form a command such as “<b>SELECT row FROM table WHERE column value = 'example value</b>'”. 
</p>

<p>
The following is an example command to access data from a database that contains a “userTable” table, a “userEmails” row, and a “username” column: “<b>SELECT userEmails FROM userTable WHERE username = 'jane</b>'” 
</p>

<p>
This statement commands the database to retrieve the emails from the “userTable” for the username “jane.”
</p>

<h3 id="SecurityVulnerabilities">2. Security Vulnerabilities</h3>
<p>
Now that we are familiar with the four main components of a web application, HTML, CSS, JavaScript, and Databases, we can begin to learn about the security concerns associated with each component. The first place a security assessor should start when evaluating the security of a web application is to familiarize yourself with the application and view the source code for the HTML, CSS, and JavaScript. Additionally, it is important to evaluate any interactions involving a database.
</p>

<h4  id="HTMLVulnerabilities">2.1 HTML Vulnerabilities</h4>
<p>
There are a few things to consider when assessing the security of HTML. The number one thing to look for is code comments left by the page developer. Sometimes web programmers will write notes to themselves as comments in the web page's code. These comments can provide a great deal of information about the webpage, such as incomplete parts of a page that may be vulnerable or usernames and passwords of the developer.
</p>

<h4  id="CSSVulnerabilities">2.2 CSS Vulnerabilities</h4>
<p>
CSS poses very few security concerns because it merely adds style to a webpage. On occasions CSS files may disclose information about the developer, such as an email address; however, most information that would be contained in a CSS file comment is likely accessible elsewhere.
</p>

<h4  id="JavaScriptVulnerabilities">2.3 JavaScript Vulnerabilities</h4>
<p>
Of the three main elements of a webpage, JavaScript poses the most significant security risk. Because JavaScript is used to give a webpage function, it can sometimes be misused or altered by a malicious user to perform an unauthorized action. Additionally, JavaScript functions are used for form validation; meaning that a JavaScript function is used to process a login or limit input into a form. Therefore, a security specialist should check for insecure JavaScript functions when assessing a webpage or application. Sometimes, in simple JavaScript login forms, the username and password are written in <a href="../other/glossary.php#plaintext" target="_blank">plaintext</a> in the function; be sure to check any login forms for such <a href="../other/glossary.php#clientside" target="_blank">client-side processing</a>.
</p>

<h4  id="DatabaseVulnerabilities">2.4 Database Vulnerabilities</h4>
<p>
Databases on their own do not pose much of a security risk; it is when databases are connected to and used with webpages and web applications that security risks arise. In the above section we looked at a simple SQL statement to retrieve emails from a database: “<b>SELECT userEmails FROM userTable WHERE username = 'jane</b>'”. This statement would work fine for retrieving emails from a database; however, if a user was able to fully control the input to the username field, then a malicious user could retrieve every user's emails. This type of attack is called SQL Injection. For example, if a webpage has a form asking the user to enter his or her name to retrieve his or her emails and does not <a href="../other/glossary.php#sanitize" target="_blank">sanitize</a> the input, then a malicious user could send a malicious command to the database. The malicious user could enter the statement, “<b>jane' OR '1'='1</b>”, in the username field and retrieve every user's emails. The resulting command would look like this: 
“<b>SELECT userEmails FROM userTable WHERE username = 'jane' OR '1'='1'</b>” 
</p>

<p>
Because “<b>'1'='1'</b>” is always true, the “<b>WHERE</b>” statement would always be true, and the database would retrieve every row in the user table. 
</p>

<p>
Also, SQL Injection can be used to bypass login authentication. For example, if a login page uses a database to store user passwords, a SQL command such as “<b>SELECT user FROM userPasswords WHERE password = 'userInput'</b>” could be used to retrieve a user's password if it is in the database. However, much like the example above, a malicious user could enter a password like “<b>x' OR '1'='1'</b>”. Doing so would result in a command like “<b>SELECT password FROM userPasswords WHERE password = 'x' OR '1'='1'</b>" where again, “<b>'1'='1</b>” is always true and would allow the user to log in even though he or she does not know the password.
</p>

<h3 id="Summary">3. Summary</h3>
<p>
Since these four elements work together to form a webpage, they must be assessed together, as well as individually. Many webpages have HTML text boxes which allow users to enter text that is then processed by JavaScript and printed back into the HTML or stored in a database. If the user input is not handled properly, a malicious user could enter a carefully crafted input and compromise the security of the web application. A webpage may have an HTML form for user login where the username and password are sent to a database for processing. If the input is not sanitized properly, a malicious user could gain unauthorized access to the application. A cybersecurity analyst should always check input boxes for such vulnerabilities.
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
  <li class="page-item"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item"><a class="page-link" href="answer3.php">7</a></li>
    
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
<?php include 'includes/footer.php';?>				

				
