<?php include'includes/header.php';?>

<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item active">Trí tuệ mã nguồn mở</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../other/enable_javascript.php">click here</a>.				
				</noscript>

<h3 id="OpenSourceIntelligence">1. Trí tuệ mã nguồn mở</h3>


<p>
Trí tuệ mã nguồn mở, còn được biết đến là OSINT, đề cập đến việc thu thập thông tin từ các nguồn có sẵn công khai, chẳng hạn như phương tiện truyền thông xã hội, trang web của công ty và các bài báo. Có rất nhiều thông tin có thể được thu thập về một công ty hoặc một người thông qua trí thông minh nguồn mở.</p>

<h4 id="OSINTTechniques">1.1 Kỹ thuật OSINT</h4> 



<p>
Trong bối cảnh an ninh mạng, OSINT có thể được sử dụng để xác định lại mục tiêu trước khi thực hiện việc <a href="../other/glossary.php#penetrationtest" target="_blank">kiểm tra thâm nhập</a> hoặc để tạo báo cáo về thông tin mà một công ty đang rò rỉ qua các nguồn công khai. Tội phạm mạng sử dụng OSINT để thu thập thông tin về mục tiêu trước khi tấn công; Ngoài ra, OSINT có thể được sử dụng để giúp đoán mật khẩu của người dùng. Nhiều người sử dụng mật khẩu liên quan đến chính họ. Ví dụ, một phương pháp tạo mật khẩu phổ biến là sử dụng tên của con vật cưng yêu thích của bạn theo sau là năm bạn sinh ra. Đây là một kỹ thuật tạo mật khẩu rất kém vì thông tin này rất dễ cho <a href="../other/glossary.php#malicious " target="_blank">người dùng độc hại</a> lấy từ các nguồn công khai có sẵn, chẳng hạn như tài khoản mạng xã hội của bạn. Ngoài thông tin về mật khẩu có thể có, OSINT có thể tiết lộ thông tin về mạng máy tính nội bộ của công ty. Ví dụ, trang web quảng cáo của một công ty có thể bao gồm hình ảnh của các nhân viên đang làm việc. Những hình ảnh này có thể tiết lộ thông tin về hoạt động bên trong của công ty, chẳng hạn như URL trang web nội bộ và tài liệu riêng tư. OSINT cũng có thể được sử dụng để tạo một email giả mạo, độc hại nhắm mục tiêu đến một công ty hoặc cá nhân; những email giả mạo này được gọi là email "lừa đảo".
</p>
 

<h4 id="OSINTAttackExample">1.2 Ví dụ về tấn công OSINT</h4>
<p>
Sau đây là ví dụ về thông cáo báo chí của công ty và email lừa đảo được tạo bằng cách sử dụng thông tin từ thông cáo báo chí:
</p>


<div class="myLightBox Email my-3">

<div class = "mySignIn p-2 text-center">
	
    <p class="h4">Công ty XYZ</p>
	
</div>

<div class="p-3">
<p>
Gần đây Công ty XYZ đã đạt được tiến bộ đáng kinh ngạc trong một dự án mới. Chúng tôi đã làm việc với nhiều kỹ sư phần mềm giỏi nhất để phát triển một trình duyệt internet mới với khả năng điều khiển bằng giọng nói. Xin gửi lời cảm ơn đặc biệt tới John Smith từ Software ABC Corp. vì đã hỗ trợ anh ấy cho dự án này (có thể tìm thêm thông tin tại softwareabccorp.com). Ngày phát hành dự kiến ​​là đầu năm 2021.</p>

<p>
Công ty XYZ,
<br>
Speaking is the future!
</p>
</div>
</div>


<p>
Sử dụng thông tin trong thông cáo báo chí ở trên, kẻ tấn công có thể tạo email lừa đảo sau:
</p>

<div class="myLightBox Email my-3">

<div class = "mySignIn p-1 text-center">
	
    <p class="h4">Email</p>
	
</div>


<div class="emailInfo">
<p >
To: ceo@companyxyz.com
</p>

<p>
From: jsmith@softwareabccorp.co
</p>

<p>
Chủ đề: Nghiên cứu mới về điều khiển bằng giọng nói
</p>
</div>

<div class="p-3">

<p>
Kính gửi Giám đốc điều hành Công ty XYZ,
</p>

<p>
Đây là liên kết đến bài nghiên cứu mới của tôi về công nghệ điều khiển bằng giọng nói: Softwarecorp.co/newpaper.pdf.
</p>

<p>
Do sự hợp tác gần đây của chúng tôi trên trình duyệt internet mới của bạn, tôi biết rằng bài báo này sẽ khiến bạn quan tâm rất nhiều. Hãy đọc nó và cho tôi biết suy nghĩ của bạn.
</p>

<p>

</p>

<p>
Cảm ơn bạn,
<br>
John Smith
<br>
Software ABC Corp.
</p>
</div>
</div>

<p>
Kẻ tấn công sẽ gửi email trên cho CEO với hy vọng bà sẽ nhấp vào liên kết và vô tình tải xuống tệp độc hại của kẻ tấn công có chứa vi-rút máy tính.
</p>


<p>
Kẻ tấn công đã tạo email này bằng cách sử dụng thông tin thu thập được từ thông cáo báo chí của Công ty XYZ. Kẻ tấn công đã đăng ký một trang web và email tại “softwareabccorp.co”, lưu ý “.co” thay vì “.com” ở cuối địa chỉ. Ngoài ra, tên của nhà nghiên cứu có liên quan đến dự án, John Smith, đã được đề cập trong thông cáo báo chí và được kẻ tấn công sử dụng để tăng thêm độ tin cậy cho email lừa đảo của anh ta. Cuối cùng, liên kết của kẻ tấn công tới một "tài liệu nghiên cứu" được cho cho rằng sẽ là mục tiêu được CEO quan tâm. Trong một email lừa đảo độc hại, liên kết này sẽ dẫn đến vi-rút máy tính và lây nhiễm vào máy tính của CEO.
</p>

 
<h3 id="OSINTDefensiveTechniques">2. Kỹ thuật Phòng thủ OSINT</h3>

<p>
OSINT cũng có thể được sử dụng theo cách phòng thủ. Thông tin mã nguồn mở có thể được sử dụng để bắt kịp các xu hướng an ninh mạng và các kỹ thuật mà bọn tội phạm mạng đang sử dụng ngay bây giờ. Có rất nhiều trang web cung cấp OSINT về các xu hướng tấn công mạng do các chuyên gia an ninh mạng báo cáo. Ngoài ra, khi một công ty nhận được lưu lượng truy cập internet bất thường, OSINT có thể được sử dụng để xác định xem lưu lượng truy cập thông thường có phải đến từ một địa chỉ IP độc hại đã biết hay không (Địa chỉ IP là bốn phần số xác định nguồn của kết nối mạng).
</p>

<p>
Sau đây chỉ là một vài trong số hàng nghìn địa chỉ IP có nguồn gốc từ Trung Quốc:
</p>

<p>
Sử dụng thông tin từ các nguồn công khai về nguồn gốc địa chỉ IP, người bảo vệ mạng có thể phân tích tốt hơn lưu lượng truy cập internet bất thường.
</p>

<p>
Ví dụ: nếu quản trị viên mạng của một tổ chức nhận thấy một lượng lớn lưu lượng truy cập internet khiến trang web của tổ chức đó bị quá tải, anh ta có thể phân tích nguồn gốc của lưu lượng truy cập internet và xác định xem lưu lượng truy cập đó có nguy hiểm không. Bằng cách sử dụng OSINT để nghiên cứu địa chỉ IP của lưu lượng truy cập internet, một chuyên gia an ninh mạng có thể xác định xem lưu lượng truy cập có bắt nguồn từ các địa chỉ IP độc hại đã biết hay không.
</p>

<div class="table-responsive ">
 
 <table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">Địa chỉ IP Trung Quốc</th>

    </tr>
  </thead>
  
  <tbody>
    <tr>
      <td>36.37.36.114</td>
    </tr>
   
       <tr>
      <td>36.37.39.204</td>
    </tr>
	
	    <tr>
      <td>42.1.128.64</td>
    </tr>
	
  </tbody>
</table>
</div>

<p>
Sử dụng thông tin từ các nguồn công khai về nguồn gốc địa chỉ IP, người bảo vệ mạng có thể phân tích tốt hơn lưu lượng truy cập internet bất thường.
</p>

<p>
Ví dụ: nếu quản trị viên mạng của một tổ chức nhận thấy một lượng lớn lưu lượng truy cập internet khiến trang web của tổ chức đó bị quá tải, anh ta có thể phân tích nguồn gốc của lưu lượng truy cập internet và xác định xem lưu lượng truy cập đó có nguy hiểm không. Bằng cách sử dụng OSINT để nghiên cứu địa chỉ IP của lưu lượng truy cập internet, một chuyên gia an ninh mạng có thể xác định xem lưu lượng truy cập có bắt nguồn từ các địa chỉ IP độc hại đã biết hay không.
</p>

			
			<div id="backToTop" class="my-3">
<a href="#top">Về đầu trang</a>
<!-- Takes user to top of home page -->								
</div>


<ul class="pagination justify-content-center">
  <li class="page-item">
      <a class="page-link disabled" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
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
        <span class="sr-only">Next</span>
      </a>
    </li>
</ul>


</div>
<!-- Main End --> </div>
</div>
</div>
</div>
<!-- Main Container End --> 
<?php include'includes/footer.php';?>
				
