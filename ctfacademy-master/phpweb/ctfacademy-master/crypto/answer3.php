<?php include 'includes/header.php';?>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Mật Mã Học</a></li>
				  <li class="breadcrumb-item"><a href="index3.php">Thử thách 3</a></li>
				  <li class="breadcrumb-item active">Lời giải</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Thử thách 3 Lời giải: Steganography</h3>

<p>
Có nhiều kỹ thuật mật mã được sử dụng để ẩn một tin nhắn trong một tin nhắn hoặc một tập tin khác. Trong bài học này, chúng ta đã tìm hiểu về kỹ thuật ẩn thư ở cuối tệp ảnh bằng cách nhập văn bản sau chữ ký “cuối tệp”. Kỹ thuật này có thể được sử dụng để gửi tin nhắn bị ẩn ngay trước mắt ta.
</p>

<p>
Đầu tiên, mở tệp ảnh trong ứng dụng xem ảnh. Thoạt nhìn, bức tranh có vẻ bình thường và không có thông điệp ẩn.</p>


<div class="screenshot myLightBox my-3">
		<img src="challenge3/Stego_1.png" alt="Explanation Image">
</div>

<p>
Tiếp theo, mở tệp trong Notepad và xem văn bản bao gồm tệp ảnh. Cuộn xuống cuối tệp và bạn sẽ tìm thấy một thông điệp bí mật được nối vào cuối tệp. Ở cuối tệp, bạn sẽ tìm thấy cờ văn bản rõ: ctfa {Stegosaurus}
</p>


<div class="screenshot myLightBox my-3">
		<img src="challenge3/crypto3.2.JPG" alt="Explanation Screenshot 1">
</div>


			
			<div id="backToTop" class="my-3">
<a href="#top">Về đầu trang</a>
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
