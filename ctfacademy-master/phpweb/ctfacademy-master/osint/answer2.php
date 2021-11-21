<?php include'includes/header.php';?>


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Trí tuệ mã nguồn mở</a></li>
				  <li class="breadcrumb-item"><a href="index2.php">Thử thách 2</a></li>
				  <li class="breadcrumb-item active">Giải thích</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Giải thích thử thách 2: Cross Reference</h3>

<p>
Có thể dịch dữ liệu thu thập được thông qua OSINT thành thông tin có thể hành động là một kỹ năng rất quan trọng trong an ninh mạng. Thông thường OSINT tiết lộ các chiến thuật và kỹ thuật mới mà người dùng độc hại có thể sử dụng; do đó, việc lấy thông tin thu thập được bằng OSINT và chuyển thông tin đó thành một kế hoạch phòng thủ trong thế giới thực là rất có giá trị.
</p>

<p>
Để trả lời các câu hỏi cho thử thách này, bạn phải tham chiếu chéo dữ liệu OSINT được cung cấp về địa chỉ IP độc hại với địa chỉ IP trong tệp nhật ký.
</p>


<p>
Câu hỏi 1 yêu cầu bạn xác định địa chỉ IP độc hại đầu tiên đã truy cập vào máy chủ web. Để trả lời câu hỏi này, hãy so sánh các IP được tìm thấy trong nhật ký truy cập và các IP độc hại trong danh sách được cung cấp. Trong trường hợp này, câu trả lời là “36.37.39.204”.
</p>

<p>
Câu hỏi 2 được trả lời theo cùng một cách. Chỉ cần xác định IP độc hại thứ hai trong nhật ký, “178.34.15.6”.
</p>

<p>
Đối với câu hỏi 3 và 4, hãy đếm số lần mỗi IP độc hại xuất hiện và xác định IP nào xuất hiện nhiều nhất. Câu trả lời là “36.37.39.204”, xuất hiện 5 lần trong nhật ký.
</p>

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
				
<?php include'includes/footer.php';?>