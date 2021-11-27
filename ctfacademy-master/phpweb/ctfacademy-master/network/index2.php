<head>
    <script src="./challenge2/flagValidate.js"></script>

</head>
<?php include 'includes/header.php';?>


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Điều tra mạng</a></li>
				  <li class="breadcrumb-item active">Thử thách 2</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 2: Haystack</h3>

<p>
    Lần này, chúng tôi đã nắm bắt được một số lưu lượng truy cập mạng từ một trang web mà chúng tôi nghĩ rằng có hai cờ trên đó. Tuy nhiên, chúng tôi không thể lọc ra các gói không cần thiết, vì vậy bạn sẽ phải sàng lọc chúng để tìm các gói HTTP có chứa cờ. Chúc may mắn!
</p>

                    <p>
<a href="Haystack.pcap"> Nhấp chuột phải và "Save as" để tải xuống tệp ".pcap" và sau đó mở tệp trong Wireshark như được hiển thị trong video bài học.
</a>
</p>

<p>
<b>Hint:</b>  Để chắc chắn hãy sử dụng WiresharkPortable để phân tích tệp.
</p>





<p>
<b>Question 1:</b> Cờ đầu tiên trong việc bắt gói tin là gì?
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
<b>Question 2:</b> Cờ thứ hai trong việc bắt gói tin là gì?
</p>

<!-- Flag input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Câu hỏi 2</p>
</div>	
<div class = "mySignInFields p-4">	
	<div class="mb-3">    
    <input type="text" id="flag" class="form-control">	
	<span id="flagFeedback"></span>
	</div>
	
    <!-- Submit button -->
    <button onclick="myFlag()" class="btn btn-mybutton btn-block mb-2" id = "submit" type="button">Gửi</button>

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
