<?php include 'includes/header.php';?>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Khai thác ứng dụng Web</a></li>
				  <li class="breadcrumb-item"><a href="index3.php">Thử thách 3</a></li>
				  <li class="breadcrumb-item active">Giải thích</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Giải thích thử thách 3: SQL</h3>

<p>
Giải thích: Khi xử lý thông tin đầu vào của người dùng, bạn nên làm sạch thông tin đầu vào trước khi chấp nhận. Việc lấy thông tin đầu vào của người dùng và xử lý mà không làm sạch trước có thể dẫn đến các lỗ hổng, chẳng hạn như SQL injection mà bạn vừa khai thác. Khi tạo bất kỳ thứ gì từ trang đăng nhập đến hộp nhận xét, bạn phải luôn làm sạch thông tin nhập của người dùng trước khi xử lý hoặc lưu trữ thông tin đầu vào.
</p>

<p>
Dưới đây là hướng dẫn từng bước về cách trả lời các câu hỏi và hoàn thành thử thách.
</p>

<p>
Nhớ lại cú pháp và cấu trúc của câu lệnh SQL, mà chúng ta đã thảo luận trong bài học: “<b>SELECT row FROM table WHERE column = 'query'</b>”. Với những gì ở đây, chúng ta có thể thấy câu lệnh này “<b>SELECT password FROM passwordTable _______ password = userInput</b>,” đang thiếu “WHERE.” 
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge3/web3.1.1.JPG" alt="Explanation Screenshot 1">
</div>

<p>
Một lần nữa, chúng ta phải nhớ những gì chúng ta đã học trong bài học; để câu lệnh SQL trả về true, chúng ta cần mật khẩu của quản trị viên mà chúng ta không biết hoặc chúng ta cần nhập một thứ gì đó khác làm mật khẩu sẽ làm cho câu lệnh SQL đúng. Trong bài học, chúng ta đã thảo luận về câu lệnh “<b>x' OR '1'='1</b>” nó luôn luôn trả về true. Chúng tôi có thể nhập câu lệnh này làm mật khẩu và biểu mẫu đăng nhập sẽ trả về true, mặc dù chúng ta không biết mật khẩu của quản trị viên. Khi chúng ta nhấp vào “Đăng nhập”, chúng ta sẽ thấy lá cờ.
</p>


<div class="screenshot myLightBox my-3">
		<img src="challenge3/web3.1.JPG" alt="Explanation Screenshot 2">
</div>


			
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