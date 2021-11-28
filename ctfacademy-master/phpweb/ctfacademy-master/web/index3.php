<head>
    <script src="./challenge3/flagValidate.js"></script>

</head>
<?php include 'includes/header.php';?>


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Khai thác ứng dụng Web</a></li>
				  <li class="breadcrumb-item active">Thử thách 3</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Thử thách 3: SQL (Độ khó cao)</h3>

<p>
Đối với thử thách này, bạn sẽ cần đăng nhập lại với tư cách quản trị viên trang web, nhưng lần này anh ấy đã thay đổi mật khẩu và hiện đang sử dụng cơ sở dữ liệu SQL để lưu trữ mật khẩu của mình. Sử dụng những gì bạn đã học cho đến nay để đăng nhập và nhận cờ.</p>



<p>
<b>Gợi ý:</b> tên người dùng của quản trị viên giống như trong thử thách trước, chỉ có điều mật khẩu của anh ta đã thay đổi.
</p>

<!-- Sign in form -->
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
<!-- js không hoạt động :~ -->
<!-- Challenge Content Ends here -->

<div id="flagDiv">

	<span id="successFlag"></span>

</div>


<p>
<b>Câu hỏi 1:</b> Đây là một ví dụ về lệnh SQL được sử dụng bởi thông tin đăng nhập này có thể trông giống như sau:  “SELECT password FROM passwordTable _______ password = userInput”
</p>
<p>
Điền vào chỗ trống với cú pháp SQL chính xác.</p>



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
<b>Thử thách 3:</b>  Tìm lá cờ và nhập câu trả lời.
</p>

<!-- Flag input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Nhập cở</p>	
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
      <a class="page-link disabled" href="answer2.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	
  <li class="page-item "><a class="page-link" href="index.php">1</a></li>
  <li class="page-item "><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item"><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item"><a class="page-link" href="answer2.php">5</a></li>
  <li class="page-item active"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item"><a class="page-link" href="answer3.php">7</a></li>
    
   <li class="page-item">
      <a class="page-link" href="answer3.php" aria-label="Next">
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