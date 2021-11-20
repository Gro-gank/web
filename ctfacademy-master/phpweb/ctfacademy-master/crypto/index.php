<?php include 'includes/header.php';?>
<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item active">Mật Mã Học</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../other/enable_javascript.php">click here</a>.				
				</noscript>

<h3 id="Cryptography">1. Mật Mã Học</h3>

<p>
Trong bài học này, chúng ta sẽ đề cập đến một số khái niệm mật mã cùng với các lĩnh vực liên quan của điều tra kỹ thuật số và mật mã học. Mật mã học là quá trình mã hóa hoặc giải mã các thông điệp và dữ liệu. Trong bài học này, chúng ta sẽ tìm hiểu về mật mã trong ba phần lớn, mật mã, mã hóa và băm. Mặc dù mật mã được sử dụng rộng rãi trong các hệ thống máy tính ngày nay, chủ yếu ở dạng mã hóa và băm, một số kỹ thuật mật mã đã được sử dụng từ thời của Julius Caesar và Đế chế La Mã.
</p>

<h4 id="Ciphers">1.1 Mật mã</h4>

<p>
Một trong những bản ghi sớm nhất về mật mã là Caesar Cipher. Mật mã Caesar là một dạng mật mã thay đổi và được phát triển dưới thời trị vì của Julius Caesar cho Đế chế La Mã để truyền tải các thông điệp quân sự một cách an toàn.Caesar Cipher, còn được gọi là Rotation, hoặc ROT, Cipher, hoạt động bằng cách dịch chuyển từng chữ cái trong bảng chữ cái qua một số vị trí nhất định. Ví dụ, một Mật mã Caesar nhảy đôi sẽ lấy chữ cái “A” và “dịch chuyển” nó xuống hai vị trí trong bảng chữ cái thành “C.”. Nói cách khác, để mã hóa một tin nhắn bằng Mật mã Caesar với sự dịch chuyển hai, “A” sẽ được thay thế bằng “C”, “B” sẽ được thay thế bằng “D”, v.v. đến cuối bảng chữ cái thì chuyển đổi vòng, "Y" sẽ trở thành "A" và "Z" sẽ được thay thế bằng "B.". Để giải mã một thông điệp được mã hóa ROT với cách nhảy đôi, bạn sẽ đảo ngược các quy trình mã hóa; thay thế “C” bằng “A”, “D” bằng “B”, v.v. Để chứng minh kỹ thuật này, chúng ta hãy mã hóa và giải mã một thông điệp bằng cách sử dụng mật mã ROT13 hoặc Rotation 13. Mật mã ROT13 giống như Mật mã Caesar với độ dịch chuyển là 13. Bắt đầu với thông điệp bản rõ “Crypto is Cool”, chúng ta sẽ dịch chuyển từng chữ cái 13 vị trí trong bảng chữ cái. “C” được chuyển thành “P”, “r” đọc ngược lại và trở thành “e”. Quá trình này được tiếp tục cho đến khi tất cả các chữ cái được mã hóa, dẫn đến thông báo bản mã, "Pelcgb vf Pbby." Để giải mã thông điệp, chúng tôi đảo ngược quá trình và chuyển “P” trở lại “C” và “e” trở lại “r” cho đến khi thông điệp được giải mã. Để làm cho quá trình này dễ dàng hơn và nhanh hơn, nhiều công cụ và ứng dụng mật mã đã được phát triển. CyberChef là một công cụ mã hóa mã nguồn mở và miễn phí được bao gồm trong bộ công cụ ACT-CTFA. <a href="cyberchef.php" target="_blank">Nhấn vào đây để mở CyberChef trong tab mới</a>. Hãy sử dụng giải mã thông điệp của chúng tôi một lần nữa, lần này bằng cách sử dụng CyberChef. Trong menu thanh bên của CyberChef, hãy tìm kiếm mật mã “ROT13”. Tiếp theo, nhấp và kéo mật mã vào hộp “Recipe(Công thức)”. Bây giờ, hãy nhập bản mã, “Pelcgb vf Pbby,” vào ô “Input” và nhấp vào “Bake(Nướng)!” Bây giờ bạn sẽ thấy thông báo văn bản rõ đã được giải mã, “Crypto is Cool” trong hộp “Output”. 
</p>


<div class="screenshot myLightBox my-3">
		<img src="CyberChef1_Lesson.JPG" alt="Cryptography Lesson Screenshot 1">
</div>
 

<h3 id="DigitalForensics">2. Điều tra kỹ thuật số</h3>
<p>
Điều tra kỹ thuật số là phân tích và điều tra dữ liệu kỹ thuật số, và điều tra kỹ thuật số có thể có nhiều hình thức, từ phân tích toàn bộ ổ cứng hoặc các tệp riêng lẻ đến điều tra lưu lượng mạng máy tính (Chúng tôi sẽ đề cập đến điều tra mạng trong một bài học sau). Trong bài học này, chúng ta sẽ tập trung vào phân tích các tệp riêng lẻ và xác định loại tệp. Có vô số loại tệp khác nhau, một số loại tệp phổ biến hơn bao gồm tệp văn bản, Tài liệu Microsoft Word, tệp ảnh PNG và tệp thực thi. Hầu hết thời gian một tệp có thể được xác định bằng phần mở rộng tệp, một vài ký tự sau dấu chấm (“.”). Ví dụ: một tệp văn bản có phần mở rộng là “.txt”, Tài liệu Word có phần mở rộng là “.docx”, phần mở rộng của PNG là “.png” và các tệp thực thi sử dụng phần mở rộng “.exe”. Tuy nhiên, phần mở rộng tệp có thể được thay đổi; do đó, phần mở rộng của tệp không phải lúc nào cũng chính xác. Ví dụ: một tệp có thể có phần mở rộng là “.exe” nhưng không phải là tệp thực thi. Để xác định một tệp không có phần mở rộng tệp chính xác, chúng ta phải tìm ở nơi khác để biết chỉ báo về loại tệp. Một cách đáng tin cậy để xác định đúng một tệp là nhìn vào “chữ ký tệp”. Chữ ký tệp, đôi khi được gọi là “tiêu đề tệp” là một vài byte dữ liệu được tìm thấy ở đầu tệp, là duy nhất cho mỗi loại tệp. Nhiều loại tệp có chữ ký tương ứng với phần mở rộng thích hợp của tệp; ví dụ: chữ ký tệp cho tệp ảnh PNG là “PNG”. Điều này làm cho việc xác định một số tệp rất dễ dàng. Có nhiều chương trình cho phép bạn xem chữ ký tập tin của một tập tin; vì mục đích đơn giản, chúng tôi sẽ sử dụng ứng dụng Microsoft Notepad được cài đặt sẵn trên Windows. Để mở tệp trong Notepad, nhấp chuột phải vào tệp và chọn “Mở bằng” và tìm ứng dụng “Notepad” (bạn có thể phải nhấp vào “Hiển thị thêm ứng dụng” để xem tùy chọn “Notepad”). Bây giờ tệp được mở trong notepad, chúng ta có thể thấy chữ ký tệp. Vài byte đầu tiên của tệp “.png” là “.PNG”. Điều này chỉ ra rằng tệp là tệp PNG. Sau khi xác định đúng loại tệp, chúng tôi có thể đóng notepad và nối phần mở rộng tệp chính xác. Để thực hiện việc này, hãy nhấp chuột phải vào tệp và chọn “Đổi tên”. Bây giờ hãy thay thế phần mở rộng tệp không chính xác bằng phần mở rộng của loại tệp được xác định bởi chữ ký tệp và lưu tệp (Nếu được nhắc với cảnh báo về việc thay đổi phần mở rộng tệp, hãy nhấp vào “Ok”). Cuối cùng, nhấp đúp vào tệp để xem để mở tệp trong ứng dụng gốc của nó. Thay đổi phần mở rộng tệp có thể được sử dụng để ẩn tệp độc hại trong tầm nhìn rõ ràng; tuy nhiên, bằng cách sử dụng điều tra kỹ thuật số, loại tệp thực sự có thể được phát hiện.
</p>
<h3 id="Steganography">3. Steganography</h3>
<p>
Steganography, viết tắt là stegano, là kỹ thuật ẩn tin nhắn hoặc dữ liệu trong các tin nhắn và dữ liệu khác. Ví dụ: câu sau chứa một thông điệp bí mật:
“<em>Vì mọi người đều có thể đọc, nên mã hóa văn bản trong các câu trung tính là mang tính hiệu quả nhưng đáng ngờ</em>” 
</p>

<p>
Mặc dù câu đó có vẻ có cấu trúc kỳ lạ, nhưng nó đang ẩn chứa một thông điệp bí mật. Một phương pháp ẩn thư dựa trên văn bản đơn giản là ẩn một thông báo bằng chữ cái đầu tiên của mỗi từ trong một câu hoặc đoạn văn. Bằng cách áp dụng phương pháp này cho câu trên, thông điệp “Bí mật bên trong” được tiết lộ. Có vô số phương pháp mật mã có thể được sử dụng để ẩn thông báo trong dữ liệu khác; trong bài học này, chúng tôi sẽ tập trung vào kỹ thuật ẩn dựa trên tệp.
</p>
 
<h4 id="FileSteganography">3.1 Tệp Steganography</h4>

<p>
Giống như ẩn mã văn bản ẩn tin nhắn trong văn bản, ẩn mã tệp được sử dụng để ẩn tin nhắn hoặc tệp trong tệp. Như bạn đã học trong phần pháp lý ở trên, các tệp có thể được xem và chỉnh sửa ở cấp độ thập lục phân. Kỹ thuật này có thể được sử dụng để ẩn thư trong các tệp bình thường. Ví dụ: người dùng có thể mở tệp PNG trong trình chỉnh sửa hex và thêm thông báo vào cuối tệp bằng cách chỉ cần thêm văn bản sau chỉ báo “kết thúc tệp”. Giống như tiêu đề tệp cho biết phần đầu của tệp, dấu hiệu “cuối tệp” biểu thị phần cuối của tệp và thông báo cho chương trình ngừng đọc tệp tại thời điểm đó. Điều này có thể được tận dụng để ẩn thông báo ở cuối tệp mà không làm hỏng dữ liệu. Mặc dù chương trình soạn thảo hex là cần thiết để viết thông báo trong tệp, nhưng có thể đọc các thông báo văn bản rõ đơn giản bằng chương trình soạn thảo văn bản đơn giản, chẳng hạn như Microsoft notepad.<p class=""></p></p>

<p>
Để điều tra một tệp đáng ngờ để lấy mật mã, trước tiên hãy mở tệp trong ứng dụng gốc của nó; ví dụ: mở tệp ảnh trong ứng dụng xem ảnh. Hầu hết các tệp steganographic thoạt nhìn sẽ có vẻ bình thường, nhưng chúng ta nên kiểm tra kỹ lưỡng bắt đầu từ mặt ngoài và sau đó tìm hiểu sâu hơn. Để kiểm tra bất kỳ thông báo ẩn nào ở cuối tệp ảnh, trước tiên, nhấp chuột phải vào tệp và chọn “Open with (Mở bằng)” và tìm ứng dụng “Notepad” (bạn có thể phải nhấp vào “Show more applications(Hiển thị thêm ứng dụng)” để xem tùy chọn “Notepad” ). Bây giờ tệp đã được mở trong notepad, bạn có thể kiểm tra tệp để tìm thư ẩn. Ở cuối tệp có chữ ký “cuối tệp”, ký hiệu là “IEND”, sau chữ ký này, một thông điệp bí mật có thể được thêm vào và không ảnh hưởng đến chức năng của tệp. Ảnh chụp màn hình bên dưới hiển thị một thông điệp bí mật ở cuối tệp PNG.
</p>
 

<div class="screenshot myLightBox my-3">
		<img src="cryptoLesson1.1.JPG" alt="Cryptography Lesson Screenshot 2">
</div>

<p>
Bây giờ đã đến lúc sử dụng những gì bạn đã học được trong bài học này để giải quyết một số thử thách!
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
  <li class="page-item"><a class="page-link" href="index3.php">6</a></li>
  <li class="page-item"><a class="page-link" href="answer3.php">7</a></li>
    
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
<?php include 'includes/footer.php';?>
				
