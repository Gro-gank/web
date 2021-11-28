<?php include 'includes/header.php' ; ?>
<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item active"><b>Trang chủ</b></li>
				  
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="other/enable_javascript.php">click here</a>.				
				</noscript>

<p>Chào mừng bạn đến với Học viện Đào tạo Lực lượng Không gian mạng ACT (ACT-CTFA). ACT-CTFA là một nền tảng đào tạo ưu tú cho những người bảo vệ mạng của tương lai. Thông qua khóa học gồm bốn mô-đun, bạn sẽ tìm hiểu một số kiến ​​thức cơ bản về thế giới an ninh mạng. Trong mô-đun 1, chúng ta đi sâu vào lĩnh vực <a href="crypto">Mật mã</a> và tìm hiểu về mật mã, điều tra tệp và mật mã. Đối với mô-đun 2, chúng ta sẽ nghiên cứu các chiến thuật điều tra của <a href="osint">Trí thông minh mã nguồn mở</a>. Mô-đun 3 giới thiệu thế giới <a href="web">Khai thác ứng dụng Web</a> khi chúng ta khám phá nhiều cách mà bảo mật web có thể bị vi phạm. Cuối cùng, trong mô-đun 4, chúng ta sẽ bơi trong vùng nước của <a href="network">Điều tra mạng</a> khi chúng ta học cách phân tích lưu lượng mạng bằng Wireshark.</p>


	<!-- <div class="myVideo my-3">
<div class="embed-responsive embed-responsive-16by9">
    <video  class="embed-responsive-item" controls>
        <source src="Intro_v3.mp4" type="video/mp4">
		Your browser does not support the video tag.
    </video>
</div>
</div> -->





	<div class="container my-3">
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CkFyQmXL0bA" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
	  
	  </iframe>
	</div>
	</div>
	
	



	
	

<p>Nhiệm vụ của chúng tôi tại Học viện ACT CTF là giúp bạn tìm hiểu về an ninh mạng thông qua một khóa học thú vị và hấp dẫn. Chúng tôi hy vọng chương trình học này sẽ cung cấp cho bạn sự hiểu biết về một số nguyên tắc cơ bản về an ninh mạng và khơi dậy niềm đam mê trong bạn đối với an ninh mạng. Thế giới cần nhiều người bảo vệ mạng hơn và sau khóa học này, chúng tôi hy vọng bạn sẽ phản hồi lời kêu gọi bảo vệ thế giới khỏi các mối đe dọa liên quan đến mạng.</p>

<p>CTFA lấy cảm hứng cho các bài tập học tập dựa trên thử thách từ các cuộc thi bắt cờ trên mạng (CTF). CTF không gian mạng là một cuộc thi mà các đối thủ được thử thách bằng cách tìm cờ trong tệp hoặc hệ thống máy tính. Trong CTF mạng, cờ được biểu thị bằng một chuỗi văn bản, thường bao gồm tiền tố và dấu ngoặc nhọn ({}). Các cờ của CTFA sẽ luôn có tiền tố “ctfa” theo sau là văn bản nằm trong dấu ngoặc nhọn, giống như “ctfa {example_flag}”. Trong chương trình giảng dạy này, chúng tôi đã điều chỉnh khái niệm CTF không gian mạng để cung cấp cho bạn trải nghiệm học tập tương tác. Vào cuối mỗi mô-đun, sẽ có một vài thử thách kiểu CTF liên quan đến các khái niệm được trình bày trong bài học trước; cùng với các bài viết giải thích cách giải quyết các thách thức.</p>

<p>Để chứng minh cách gửi câu trả lời và cờ, dưới đây là ví dụ về cung đầu vào cờ. Hãy dùng thử bằng cách nhập cờ sau: ctfa {example_flag}</p>

<!-- Flag input form -->
<div class = "mySignInBox myLightBox my-4">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Nhập cờ</p>	
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

<p>Nếu bạn nhập đúng cờ, bạn sẽ thấy thông báo hoàn thành, như trong biểu mẫu ví dụ bên dưới. Đây là cách bạn sẽ biết nếu bạn đã gửi câu trả lời chính xác khi bạn hoàn thành các thử thách.</p>


<!-- Q1 input form -->
<div class = "mySignInBox myLightBox my-4 exampleForm">
<form class="text-center" novalidate>
<div class = "mySignIn p-2">
    <p class="h4">Nhập cờ</p>	
</div>	
<div class = "mySignInFields p-4">	
	<div class="mb-3">    
    <input type="text" class="form-control" value="ctfa{example_flag}">	
	<span>Tốt lắm!</span>
	</div>
	
    <!-- Submit button -->
    <button class="btn btn-mybutton btn-block mb-2" type="button">Gửi</button>

    </div>
</form>
</div>
<!-- Flag form End -->

<p>
CTFA được thiết kế để chạy hoàn toàn trên hệ thống máy tính cục bộ của bạn mà không cần kết nối internet. Chương trình giảng dạy sử dụng các công nghệ trang web địa phương để tạo ra trải nghiệm học tập tương tác. Nếu bạn muốn sử dụng Học viện CTF trong môi trường ngoại tuyến, <a href="https://github.com/ctfacademy/ctfacademy.github.io/archive/ctfacademy.zip">hãy nhấp chuột phải để tải xuống tệp zip Học viện ACT CTF</a> hoặc <a href="https://github.com/ctfacademy/ctfacademy.github.io" target="_blank">nhấp vào đây để truy cập trang GitHub</a>.
</p>

<p>
Để có hướng dẫn về cách giải nén tệp và bắt đầu, <a href="other/quick_start.php">hãy nhấp vào đây</a>.
</p>

<p>
Bằng cách sử dụng và / hoặc tải xuống Cyber ​​Training Force Academy, bạn đồng ý với các điều khoản và điều kiện <a href="other/terms-of-use.php">tại đây</a>. Ngoài ra, đạo đức an ninh mạng rất quan trọng khi học các kỹ thuật an ninh mạng, <a href="other/ethics.php">vì vậy vui lòng nhấp vào đây để đọc về đạo đức an ninh mạng.</a>.
</p>

<p>
Cảm ơn bạn đã tham gia CTF Academy	!
</p>

<p>
<a href="crypto/index.php">Bấm vào đây để bắt đầu bài học đầu tiên.</a>
</p>


<p>
Tại sao bạn nên chọn một nghề nghiệp trong an ninh mạng.
</p>



	<!-- <div class="myVideo my-3">
<div class="embed-responsive embed-responsive-16by9">
    <video  class="embed-responsive-item" controls>
        <source src="Why_Choose_cyber.mp4" type="video/mp4">
		Trình duyệt của bạn không hỗ trợ thẻ Video
    </video>
</div>
</div> -->





<div class="container my-3">
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/muOReBVc6AY" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
	  
	  </iframe>
	</div>
	</div>


	
	


			
			<div id="backToTop" class="my-3">
<a href="#top">Về đầu trang</a>
<!-- Takes user to top of home page -->								
</div>

</div>
<!-- Main End --> </div>
</div>
</div>
</div>
<!-- Main Container End --> 
<?php include'includes/footer.php';?>				
