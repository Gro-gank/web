<head>
    <script src="./challenge1/flagValidate.js"></script>

</head>
<?php include'includes/header.php';?>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="../index.php">Trí tuệ mã nguồn mở</a></li>
				  <li class="breadcrumb-item active">Thử thách 1</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<h3>Thử thách 1: Chú yến đến tiểu tiết</h3>

<p>
Dưới đây là ảnh chụp màn hình từ cuộc phỏng vấn gần đây với Giám đốc điều hành Công ty. Chúng tôi tin rằng email và mật khẩu của CEO nằm ở đâu đó trong hình. Tìm thông tin xác thực đăng nhập của anh ấy và cố gắng đăng nhập. <a href="challenge1/challenge1.jpg" target="_blank">
Nhấn chuột phải vào đây để mở hình ảnh trong một tab mới để xác mình hóa hình ảnh đó.
</a>
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge1/challenge1.jpg" alt="Challenge Picture">
</div>

<div class = "mySignInBox myLightBox my-4">

<form class="text-center">
<div class = "mySignIn p-2">
	
    <p class="h4">Đăng nhập</p>
	
</div>
	
<div class = "mySignInFields p-4">

<div class="mb-3"> 
    <input type="text" id="username" class="form-control mb-3" placeholder="Email" required>
	
    <input type="password" id="password" class="form-control mb-1" placeholder="Mật khẩu" required>
	
	<span id="loginFeedback"></span>
</div>
    <button onclick="buttonFunction()" class="btn btn-mybutton btn-block mb-2" id = "signin" type="button">Đăng nhập</button>
</div>
</form>
</div>


<div id="flagDiv">

	<span id="successFlag"></span>

</div>


<p>
<b>Thử thách 1:</b> Tìm lá cờ và nhập câu trả lời.
</p>

<!-- Flag input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Nhập cờ</p>	
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
      <a class="page-link disabled" href="index.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	
  <li class="page-item "><a class="page-link" href="index.php">1</a></li>
  <li class="page-item active"><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item"><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item"><a class="page-link" href="answer2.php">5</a></li>
    
   <li class="page-item">
      <a class="page-link" href="answer1.php" aria-label="Next">
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