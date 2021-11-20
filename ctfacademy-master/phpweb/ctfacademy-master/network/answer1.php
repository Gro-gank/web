<?php include 'includes/header.php';?>					


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="../index.php">Điều tra mạng</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Thử thách 1</a></li>
				  <li class="breadcrumb-item active">Lời giải</li>
				</ol>				


<noscript>
	Vui lòng bật JavaScript trên trình duyệt của bạn. Để biết thêm, <a href="../../other/enable_javascript.php">nhấn vào đây</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Thử thách 1 Lời giải: Để ý vào chi tiết</h3>
<p>Có thể phân tích lưu lượng mạng là một kỹ năng rất có giá trị đối với một chuyên gia an ninh mạng. Phân tích lưu lượng truy cập có thể cho phép người bảo vệ hệ thống mạng xác định người dùng độc hại đang làm gì và họ được kết nối với điểm cuối nào. Ngoài ra, nếu mạng máy tính bị nhiễm chương trình độc hại, việc phân tích lưu lượng mạng có thể giúp tìm ra máy tính bị nhiễm. Trong thử thách này, chúng tôi đã phân tích lưu lượng truy cập mạng của một người dùng truy cập trang web có gắn flag.</p>

<p>Đầu tiên, mở tệp trong WireshakPortable bằng cách nhấp đúp vào tệp “WiresharkPortable.exe” có trong thư mục CTFA “Programs”.	</p>

<p>
Nếu nhận được một cảnh báo, như cái bên dưới, nhấn “Yes.”
</p>

<div class="otherPic myLightBox my-3">
		<img src="challenge1/netWarning.JPG" alt="Explanation Screenshot 1">
</div>

<p>Bây giờ hãy nhấp vào “file” trong bộ ghép nối phía trên bên phải của ứng dụng Wireshark và chọn "open". Bây giờ điều hướng đến nơi bạn đã lưu tệp “FollowTheLeader.pcap” và chọn nó.</p>


<div class="otherPic myLightBox my-3">
		<img src="challenge1/openFile.JPG" alt="Explanation Screenshot 2">
</div>


<div class="screenshot myLightBox my-3">
		<img src="  challenge1/net1.1.JPG" alt="Explanation Screenshot 1">
</div>

<p>
Bây giờ tệp đã được mở, chúng ta có thể tìm flag. Vì chúng tôi ta flag nằm trên một trang web, chúng ta có thể bằng cách xem qua các gói “HTTP”. Xem gói “HTTP” thứ hai cho chúng ta thấy dữ liệu html, chứa flag.
</p>

<div class="screenshot myLightBox my-3">
		<img src="  challenge1/net1.2.JPG" alt="Explanation Screenshot 1">
</div>

<p>
Để đọc dữ liệu ở đây dễ hơn, chuột phải vào gói tin và di chuột qua “Follow” sau đó chọn “TCP stream”.
</p>

<div class="screenshot myLightBox my-3">
		<img src="  challenge1/net1.3.JPG" alt="Explanation Screenshot 1">
</div>

<p>
Bây giờ chúng ta có thể dễ dàng nhìn thấy flag và đó nằm trong một gói HTTP; vì thế, đáp án cho câu hỏi 1 là “HTTP”.
</p>

<div class="screenshot myLightBox my-3">
		<img src="  challenge1/net1.4.JPG" alt="Explanation Screenshot 1">
</div>

<p>
Như ảnh chụp màn hình ở trên, flag là “ctfa{terrific_traffic}”.
</p>

			
			<div id="backToTop" class="my-3">
<a href="#top">Về đầu trang</a>
<!-- Takes user to top of home page -->								
</div>

<ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link disabled" href="index1.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Trước</span>
      </a>
    </li>
	
  <li class="page-item "><a class="page-link" href="index.php">1</a></li>
  <li class="page-item "><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item active"><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item"><a class="page-link" href="answer2.php">5</a></li>
    
   <li class="page-item">
      <a class="page-link" href="index2.php" aria-label="Next">
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
