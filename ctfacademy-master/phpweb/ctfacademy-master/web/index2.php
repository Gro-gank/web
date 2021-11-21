<?php include 'includes/header.php';?>				
<head>
    <script src="./challenge2/flagValidate.js"></script>

</head>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Khai thác ứng dụng Web</a></li>
				  <li class="breadcrumb-item active">Thử thách 2</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Thử thách 2: JavaScript</h3>

<p>
Đối với thử thách này, bạn sẽ cần phải tìm tên người dùng và mật khẩu của quản trị viên trang web; đăng nhập để lấy cờ.</p>

<p>
<b>Gợi ý:</b> Biểu mẫu đăng nhập được xử lý bằng JavaScript; nhớ những gì bạn đã học trước đó trong mô-đun này về thông tin đăng nhập JavaScript.
</p>

<!-- Sign in form -->
<script> function buttonFunction() {
      
	   
var myPassword = document.getElementById("password").value;

var username = document.getElementById("username").value;

var myalert = "637466617b436c69656e742d736964655f56616c69646174696f6e7d";

	
	var admin = "admin";
	
	var pass = "SuperSecretPassword";
	
 var myString = hex2a(myalert);
	
if (username == admin && myPassword == pass) {
			

				
				$("#loginFeedback").html("Great job! The flag is below.");
				
				$("#loginFeedback").css("color", "#28a745");
				
				$("#signin").css("transition-duration", "1.0s");
		
				$("#signin").css("background-color", "#28a745");
				
				$("#username").css("transition-duration", "1.0s");
				
				$("#username").css("border-color", "#28a745");
				
				$("#password").css("transition-duration", "1.0s");
				
				$("#password").css("border-color", "#28a745");
				
				
				$("#flagDiv").addClass("loginFlag myLightBox p-4 my-4");
				
				$("#successFlag").html(myString);
				
			
   
}



else {
	
	
	$("#loginFeedback").html("Incorrect username/password. Try again.");
	
	
		
		$("#loginFeedback").css("color", "#dc3545");
		
		$("#signin").css("transition-duration", "1.0s");
		
		$("#signin").css("background-color", "#dc3545");
		
		$("#username").css("transition-duration", "1.0s");
		
		$("#username").css("border-color", "#dc3545");
		
		$("#password").css("transition-duration", "1.0s");
		
		$("#password").css("border-color", "#dc3545");
	
	
}
	   
	   
} </script>
<div class = "mySignInBox myLightBox my-4">

<form class="text-center">
<div class = "mySignIn p-2">
	
    <p class="h4">Đăng nhập</p>
	
</div>
	
<div class = "mySignInFields p-4">

<div class="mb-3"> 
    <input type="text" id="username" class="form-control mb-3" placeholder="Tên người dùng" required>
	
    <input type="password" id="password" class="form-control mb-1" placeholder="Mật khẩu" required>
	
	<span id="loginFeedback"></span>
</div>
    <button onclick="buttonFunction()" class="btn btn-mybutton btn-block mb-2" id = "signin" type="button">Đăng nhập</button>
</div>
</form>
</div>

<!-- Challenge Content Ends here -->

<div id="flagDiv">

	<span id="successFlag"></span>

</div>

<p>
<b>Câu hỏi 1:</b> Tên người dùng của quản trị viên là gì?
</p>

<!-- Q1 input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Câu hỏi 1</p>	
</div>	
<div class = "mySignInFields p-4">	
	<div class="mb-3">    
    <input type="text" id="flag1" class="form-control">	
	<span id="flagFeedback1"></span>
	</div>
	
    <!-- Submit button -->
    <button onclick="q1()" class="btn btn-mybutton btn-block mb-2" id = "submit1" type="button">Nộp</button>

    </div>
</form>
</div>
<!-- Flag form End -->



<p>
<b>Câu hỏi 2:</b> Mật khẩu của quản trị viên là gì?
</p>

<!-- Q2 input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Câu hỏi 2</p>	
</div>	
<div class = "mySignInFields p-4">	
	<div class="mb-3">    
    <input type="text" id="flag2" class="form-control">	
	<span id="flagFeedback2"></span>
	</div>
	
    <!-- Submit button -->
    <button onclick="q2()" class="btn btn-mybutton btn-block mb-2" id = "submit2" type="button">Nộp</button>

    </div>
</form>
</div>
<!-- Flag form End -->


<!-- Challenge Content Ends here -->

<p>
<b>Thử thách 2:</b> Tìm lá cờ và nhập câu trả lời.
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
    <button onclick="myFlag()" class="btn btn-mybutton btn-block mb-2" id = "submit" type="button">Nộp</button>

    </div>
</form>
</div>
<!-- Flag form End -->


			
			<div id="backToTop" class="my-3">
<a href="#top">Về đầu trang</a>
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
  <li class="page-item"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item"><a class="page-link" href="answer3.php">7</a></li>
    
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
				
<?php include 'includes/footer.php';?>	
