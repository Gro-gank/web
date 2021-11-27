<?php include 'includes/header.php';?>			


<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item"><a href="index.php">Điều tra mạng</a></li>
				  <li class="breadcrumb-item"><a href="index2.php">Thử thách 2</a></li>
				  <li class="breadcrumb-item active">Lời giải</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../../other/enable_javascript.php">click here</a>.				
				</noscript>

<!-- Challenge Content Starts here -->
<h3>Challenge 2 Haystack</h3>

<p>
    Một lần nữa, chúng tôi được giao nhiệm vụ tìm cờ trong tệp “.pcap”; tuy nhiên, lần này có hai lá cờ.
</p>

<p>
    Đầu tiên, mở tệp trong WireshakPortable bằng cách nhấp đúp vào tệp “WiresharkPortable.exe” có trong thư mục CTFA “Programs”.
</p>

<p>
    Nếu được hiển thị với một cảnh báo, giống như cảnh báo bên dưới, hãy nhấp vào “Yes”.
</p>


<div class="otherPic myLightBox my-3">
		<img src="challenge1/netWarning.JPG" alt="Explanation Screenshot 1">
</div>

<p>
    Tiếp theo, nhấp vào “File” ở góc trên bên phải của ứng dụng Wireshark và chọn “Open”. Bây giờ điều hướng đến nơi bạn đã lưu tệp “Haystack.pcap” và chọn nó.
</p>


<div class="otherPic myLightBox my-3">
		<img src="challenge1/openFile.JPG" alt="Explanation Screenshot 2">
</div>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/net2.1.jpg" alt="Explanation Screenshot 1">
</div>

<p>
    Bây giờ tệp đã mở, chúng ta có thể tìm kiếm cờ. Không giống như thử thách cuối cùng, có một số giao thức khác nhau được ghi lại trong tệp. Vì chúng tôi biết cờ nằm trên một trang web, chúng tôi có thể bắt đầu bằng cách xem qua các gói “HTTP”. Phân tích phản hồi HTTP đầu tiên từ máy chủ, gói HTTP thứ hai trong tệp, chúng ta có thể thấy cờ đầu tiên. Để xem rõ hơn, hãy nhấp chuột phải vào gói tin và chọn “Follow>TCP Stream”.
</p>
<div class="screenshot myLightBox my-3">
		<img src="challenge2/net2.2.jpg" alt="Explanation Screenshot 2">
</div>


<div class="otherPic myLightBox my-3">
		<img src="challenge2/net2.3.jpg" alt="Explanation Screenshot 3">
</div>

<p>
    Cờ đầu tiên, ctfa {HTTP_FTW} có thể được nhìn thấy trong hình trên.
</p>

<p>
    Để tiếp tục phân tích toàn bộ tệp, hãy nhấp vào dấu “x” nhỏ trên thanh nhập bộ lọc.
</p>

<p>
    Để tìm cờ thứ hai, chúng tôi sẽ lặp lại quá trình phân tích lưu lượng truy cập HTTP cho từng trang cho đến khi chúng tôi tìm thấy dữ liệu chứa cờ. Trong tương tác HTTP cuối cùng, “/page4.html”, chúng tôi sẽ tìm thấy cờ thứ hai.
</p>

<div class="screenshot myLightBox my-3">
		<img src="challenge2/net2.4.jpg" alt="Explanation Screenshot 4">
</div>

<p>
    Tốt lắm! Bây giờ chúng tôi có cả hai cờ từ tệp này.
</p>

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
				
<?php include 'includes/footer.php';?>
