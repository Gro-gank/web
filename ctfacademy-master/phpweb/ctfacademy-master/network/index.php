<?php include 'includes/header.php';?>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item active">Điều Tra Mạng</li>
				</ol>				


<noscript>
				Vui lòng bật JavaScript trên trình duyệt của bạn. Để biết thêm, <a href="../other/enable_javascript.php">nhấn vào đây</a>.				
				</noscript>

<h3 id="NetworkForensics">1. Điều Tra Mạng</h3>


<p>Điều tra mạng là quá trình phân tích dữ liệu mạng và hiện vật để xác định điều gì đã xảy ra trên mạng máy tính. Để hiểu đầy đủ về điều tra mạng, trước tiên chúng ta phải tìm hiểu về mạng máy tính và các giao thức mạng.</p>



<h4 id="ComputerNetworks">1.1 Mạng máy tính</h4> 



<p>Theo nghĩa chung, một mạng máy tính bao gồm hai hoặc nhiều máy tính được kết nối với nhau. Một mạng máy tính điển hình bao gồm một modem, một bộ định tuyến và một vài máy tính đôi khi được gọi là điểm cuối. Modem là một thiết bị hỗ trợ giao tiếp giữa mạng nội bộ và Internet nói chung. Bộ định tuyến là một thiết bị gửi dữ liệu qua mạng đến và đi từ modem và các điểm cuối. Một bộ định tuyến cũng cố gắng đảm bảo dữ liệu đến các điểm cuối thích hợp.</p>
 

<h4 id="Protocols">1.2 Giao thức</h4>
<p>Để các thành phần của mạng biết nơi và cách thức gửi dữ liệu, các giao thức mạng được sử dụng. Các giao thức xác định cấu trúc của các gói mạng, là các phần dữ liệu riêng lẻ được gửi qua mạng. Tùy thuộc vào giao thức, một gói có thể chứa dữ liệu từ một trang web trên Internet hoặc dữ liệu từ quá trình truyền tệp. Chưa cần hiểu cấu trúc chính xác của các giao thức này, chỉ cần biết rằng các loại dữ liệu khác nhau sử dụng các giao thức khác nhau. Một vài giao thức quan trọng cần biết cho chương trình này là TCP và HTTP. TCP, viết tắt của Transmission Control Protocol, là một giao thức mạng được sử dụng rộng rãi để đảm bảo rằng người nhận nhận được một gói tin trước khi gửi một gói tin khác. Đây là một tính năng rất quan trọng đối với dữ liệu nhạy cảm phải được nhận theo đúng thứ tự của nó, chẳng hạn như các tin nhắn được mã hóa. HTTP, hay HyperText Transfer Protocol, là một giao thức con của TCP được sử dụng cho các kết nối Internet thông qua trình duyệt web. Giao thức HTTP sử dụng TCP để truyền dữ liệu từ điểm cuối này sang điểm cuối khác, nhưng khi dữ liệu đến, HTTP sẽ được trình duyệt Internet thông dịch.</p>

 
<p><a href="../programs/WiresharkPortable.zip">Nhấn chuột phải và chọn "Save as " để tải về WiresharkPortable.</a></p>

<p>Để sử dụng WiresharkPortable, trước tiên hãy giải nén thư mục bằng cách nhấp chuột phải vào nó và chọn “Extract all	”. Khi thư mục được giải nén, điều hướng đến nó và nhấp đúp vào tệp “WiresharkPortable.exe”.</p>
 
<h3 id="Wireshark">2. Phân tích lưu lượng mạng và Wireshark</h3>




	<!-- <div class="myVideo my-3">
<div class="embed-responsive embed-responsive-16by9">
    <video  class="embed-responsive-item" controls>
        <source src="../Network_v2.mp4" type="video/mp4">
		Trình duyệt của bạn không hỗ trợ thẻ Video.
    </video>
</div>
</div> -->





<div class="myVideo my-3">

<div class="embed-responsive embed-responsive-16by9">
  <iframe src="https://www.youtube.com/embed/cSFfvoJ_cTs" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>
</div>
</div>
	
	







<p>
	Bây giờ chúng ta đã hiểu về lưu lượng mạng và cách phân tích nó bằng cách sử dụng Wireshark, đã đến lúc phải đối mặt với một số thử thách!
</p>

			
			<div id="backToTop" class="my-3">
<a href="#top">Về đầu trang</a>
<!-- Takes user to top of home page -->								
</div>


<ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link disabled" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Trước</span>
      </a>
    </li>
	
  <li class="page-item active"><a class="page-link" href="index.php">1</a></li>
  <li class="page-item"><a class="page-link" href="index1.php">2</a></li>
  <li class="page-item"><a class="page-link" href="answer1.php">3</a></li>
  <li class="page-item"><a class="page-link" href="index2.php">4</a></li>
  <li class="page-item"><a class="page-link" href="answer2.php">5</a></li>
    
   <li class="page-item">
      <a class="page-link" href="index1.php" aria-label="Next">
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
<!-- Main Container End --> 
<?php include 'includes/footer.php';?>			
