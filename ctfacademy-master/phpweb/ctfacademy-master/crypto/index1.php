<head>
    <script src="./challenge1/flagValidate.js"></script>

</head>
<?php include 'includes/header.php';?>


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Mật Mẫ Học</a></li>
				  <li class="breadcrumb-item active">Thử thách 1</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<h3>Thử thách 1: Mật mã</h3>

<p>
Chúng tôi đã chặn một tin nhắn bí mật, nhưng nó dường như được mã hóa bằng mật mã. Xem nếu bạn có thể giải mã nó và nhận được flag!
</p>


<p>
<b>Gợi ý:</b> Đừng quên sử dụng <a href="../crypto/cyberchef.php" target="_blank">CyberChef</a>.
</p>




<p>
<b>Thông điệp bí ẩn:</b> Gur frperg cnffjbeq vf uvqqra haqre gur oevqtr. Gur synt vf pgsn{pvcure_qrpvcure}
</p>

<p>
<b>Câu 1:</b> Tin nhắn được mã hóa dịch chuyển bao nhiêu ký tự?
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
    <button onclick="q1()" class="btn btn-mybutton btn-block mb-2" id = "submit1" type="button">Gửi</button>

    </div>
</form>
</div>
<!-- Flag form End -->


<p>
<b>Thử thách 1:</b> Tìm flag và nhập câu trả lời.
</p>

<!-- Flag input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Nhập Flag</p>	
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
  <li class="page-item"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item"><a class="page-link" href="answer3.php">7</a></li>
    
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
				
<?php include 'includes/footer.php';?>