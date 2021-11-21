<?php include 'includes/header.php';?>					


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="index1.php">Khai thác ứng dụng Web</a></li>
				  <li class="breadcrumb-item"><a href="index2.php">Thử thách 2</a></li>
				  <li class="breadcrumb-item active">Giải thích</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Giải thích thử thách 2: JavaScript</h3>

<p>
Sử dụng JavaScript cho các trang đăng nhập phía máy khách là một thực tiễn rất không an toàn; làm như vậy có thể dẫn đến việc lộ tên người dùng và mật khẩu. Vì biểu mẫu đăng nhập trong Thử thách 2 được xử lý phía máy khách nên bạn có thể xem mã nguồn và tìm mật khẩu của quản trị viên. Khi xây dựng một ứng dụng web an toàn, bạn phải luôn lưu trữ và xử lý thông tin đăng nhập trên máy chủ web, không phải trên trình duyệt của khách hàng.
</p>

<p>
Dưới đây là hướng dẫn từng bước về cách trả lời các câu hỏi và hoàn thành thử thách.</p>

<p>
Giống như thử thách trước, chúng tôi bắt đầu bằng cách xem nguồn trang. Nhấp chuột phải vào trang và chọn “View page source.”-Xem nguồn trang
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/web2.1.JPG" alt="Explanation Screenshot 1">
</div>

<p>
Xem nguồn trang cho phép chúng tôi xem hàm JavaScript xử lý việc đăng nhập. Ở dòng 170, chúng tôi thấy một chú thích cho biết sự bắt đầu của hàm đăng nhập; đây là nơi chúng tôi sẽ tập trung điều tra.
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/web2.2.JPG" alt="Explanation Screenshot 2">
</div>

<p>
Trên dòng 171, chúng ta thấy rằng “buttonFunction ()” bắt đầu. Đây là chức năng xử lý đăng nhập. Trên dòng 181 và 183, chúng ta có thể thấy tên người dùng và mật khẩu của quản trị viên, "admin" và "SuperSecretPassword."
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/web2.3.JPG" alt="Explanation Screenshot 3">
</div>

<p>
Trên dòng 262, “buttonFunction ()” được gọi khi người dùng nhấp vào nút đăng nhập.
</p>

<p>
Để hoàn thành thử thách này, hãy nhập tên người dùng và mật khẩu mà chúng tôi tìm thấy trong nguồn và nhấp vào “Đăng nhập” và cờ sẽ được hiển thị.
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/web2.4.JPG" alt="Explanation Screenshot 3">
</div>


			
			<div id="backToTop" class="my-3">
<a href="#top">Về đầu trang</a>
<!-- Takes user to top of home page -->								
</div>

<ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link disabled" href="index2.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
	
  <li class="page-item "><a class="page-link" href="index.php">1</a></li>
  <li class="page-item "><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item "><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item active"><a class="page-link" href="answer2.php">5</a></li>
  <li class="page-item"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item"><a class="page-link" href="answer3.php">7</a></li>
    
   <li class="page-item">
      <a class="page-link" href="index3.php" aria-label="Next">
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
