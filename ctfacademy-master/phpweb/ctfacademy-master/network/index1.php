<head>
    <script src="./challenge1/flagValidate.js"></script>

</head>
<?php include 'includes/header.php';?>			


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="../index.php">Điều Tra Mạng</a></li>
				  <li class="breadcrumb-item active">Thử thách 1</li>
				</ol>				


<noscript>
	Vui lòng bật JavaScript trên trình duyệt của bạn. Để biết thêm, <a href="../../other/enable_javascript.php">nhấn vào đây</a>.				
				</noscript>

<h3>Thử thách 1: Theo người dẫn đầu</h3>



<p>Chúng tôi đã thu thập được một số lưu lượng truy cập mạng từ một trang web mà chúng tôi tin rằng có gắn flag trên đó. Dữ liệu đã được lọc để loại bỏ mọi gói không cần thiết. Bạn có thể phân tích tệp chụp bằng WiresharkPortable và tìm flag không?</p>

<p>
						
<a href="FollowTheLeader.pcap">Nhấn chuột phải và "Save as" để tải về tệp ".pcap" và sau đó mở tệp trong Wireshark như trong video bài học.
</a>
</p>


<p>
<b>Câu hỏi 1:</b> Flag được chuyển đi bằng giao thức nào?
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
<b>Thử thách 1:</b> Flag được tìm thấy trong tệp chụp là gì?
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
      <a class="page-link disabled" href="index.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Trước</span>
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
        <span class="sr-only">Sau</span>
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
