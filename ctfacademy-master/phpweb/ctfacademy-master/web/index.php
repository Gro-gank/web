<?php include 'includes/header.php';?>
<!-- Main content -->
		<div class="col-md-9 order-1 order-md-2" >
				<div id="main">
				
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
				  <li class="breadcrumb-item active">Khai thác ứng dụng Web</li>
				</ol>				


<noscript>
				Please enable JavaScript on your web browser. For a tutorial, <a href="../other/enable_javascript.php">click here</a>.				
				</noscript>

<h3 id="WebAppExploitation">1. Khai thác ứng dụng Web</h3>
<p>
Các trang web, giống như trang bạn đang đọc bây giờ, thường được tạo từ các thành phần: PHP(HTML), CSS và JavaScript. Mỗi thành phần này có vai trò khác nhau trong việc cung cấp định dạng và chức năng của trang web. Cấu trúc của một trang web có thể được so sánh với cơ thể con người: HTML là cấu trúc xương, CSS là hình thức bên ngoài và JavaScript là cơ bắp.</p>

<h4 id="html">1.1 HTML</h4>
<p>
HTML là xương sống của một trang web; nó cung cấp cho trang cấu trúc chung của nó. HTML là viết tắt của Hyper-Text Markup Language. HTML được sử dụng để xác định cách trang web sẽ được hiển thị. “Thẻ” HTML được sử dụng để đánh dấu cách cấu trúc trang. Ví dụ: đoạn văn này được đánh dấu bằng thẻ “p”, thẻ này yêu cầu trình duyệt hiển thị văn bản này dưới dạng một đoạn văn. Các thẻ HTML được đặt trong dấu ngoặc nhọn (<>). Đây là một ví dụ về cách một trang HTML đơn giản được cấu trúc:
</p>

<div class="htmlExample myLightBox py-4 px-1 my-3">
<p>

<span class="tag">&lt;</span><span class="tagname">!DOCTYPE html</span><span class="tag">&gt;</span>

</p>

<p class="htmllvl1">
<span class="tag">&lt;</span><span class="tagname">html</span><span class="tag">&gt;</span>
</p>

<p class="htmllvl2">
<span class="tag">&lt;</span><span class="tagname">body</span><span class="tag">&gt;</span>
</p>

<p class="htmllvl3">
<span class="tag">&lt;</span><span class="tagname">h1</span><span class="tag">&gt;</span>Example Heading<span class="tag">&lt;</span><span class="tagname">/h1</span><span class="tag">&gt;</span>
</p>

<p class="htmllvl3">
<span class="tag">&lt;</span><span class="tagname">p</span><span class="tag">&gt;</span>Example paragraph.<span class="tag">&lt;</span><span class="tagname">/p</span><span class="tag">&gt;</span>
</p>

<p class="htmllvl2">
<span class="tag">&lt;</span><span class="tagname">/body</span><span class="tag">&gt;</span>
</p>
<p class="htmllvl1">
<span class="tag">&lt;</span><span class="tagname">/html</span><span class="tag">&gt;</span>
</p>
</div>


<p>
Bạn có thể xem nguồn HTML của một trang web trong hầu hết các trình duyệt internet. Đối với Google Chrome, bạn có thể nhấp chuột phải vào trang và chọn “Xem nguồn trang” hoặc sử dụng “Ctrl + U”. Thao tác này sẽ hiển thị mã nguồn HTML của trang. Hãy thử nhấp chuột phải vào trang này để kiểm tra điều này.
</p>

<div class="screenshot myLightBox my-3">
		<img src="html.JPG" alt="HTML Example">
</div>
 
<h4  id="css">1.2 CSS</h4>
<p>
CSS xác định giao diện của trang web, giống như tóc hoặc quần áo của một người có thể thay đổi diện mạo của họ. CSS là viết tắt của Cascading Style Sheet và là một ngôn ngữ kiểu được sử dụng để thay đổi và tùy chỉnh giao diện của các trang HTML. CSS có thể được bao gồm trong một tệp HTML, bằng cách sử dụng một thẻ đặc biệt hoặc bằng cách bao gồm CSS dưới dạng một tệp riêng biệt, điều này phổ biến hơn. Nếu CSS được bao gồm trong một tệp, nó sẽ được liên kết trong nguồn HTML của trang. Nó sẽ giống như sau: < link href = " ../style.css " rel = " stylesheet " / > . Xem liệu bạn có thể xem CSS của trang này không.
</p>

<div class="screenshot myLightBox my-3">
		<img src="css.JPG" alt="CSS Example">
</div>

<h4  id="javascript">1.3 JavaScript</h4>
<p>
JavaScript cung cấp một trang web với nhiều chức năng của nó, tương tự như cách cơ bắp của một người cho phép chúng di chuyển và hoạt động. JavaScript là một ngôn ngữ lập trình được sử dụng trên toàn bộ web để thực hiện bất kỳ điều gì từ các chức năng đăng nhập đến các trò chơi tương tác. Giống như CSS, JavaScript có thể được bao gồm dưới dạng một tệp riêng biệt hoặc trong chính tệp HTML bằng cách sử dụng thẻ “&lt;script&gt;” đặc biệt.
</p>


<p>
Đây là một ví dụ về biểu mẫu đăng nhập JavaScript đơn giản:
</p>

<div class = "mySignInBox myLightBox my-3">

<form class="text-center">
<div class = "mySignIn p-2">
	
    <p class="h4">Đăng nhập</p>
	
</div>
	
<div class = "mySignInFields p-4 ">
    <input type="text" id="username" class="form-control mb-4" placeholder="Tên tài khoản " required>
    <input type="password" id="password" class="form-control mb-4" placeholder="Mật khẩu " required>
    <button class="btn btn-mybutton btn-block mb-2" id = "signin" type="button">Đăng nhập</button>
</div>
</form>
</div>

<h4  id="database">1.4 Cơ sở dữ liệu</h4>
<p>
Ngoài ba thành phần chính này của trang web, cơ sở dữ liệu có thể được sử dụng để cung cấp thêm chức năng và lưu trữ thông tin. Để tiếp tục ví trang web giống như một con người, cơ sở dữ liệu giống với tâm trí con người ở chỗ cả hai đều lưu trữ thông tin để truy cập sau này. Cơ sở dữ liệu thường tách biệt với chính trang web, nhưng cả hai tương tác để lưu trữ và truy xuất dữ liệu. Cấu trúc chung của cơ sở dữ liệu bao gồm “Cột”, “Hàng” và “Bảng”. Một hàng bao gồm một hoặc nhiều cột. Hàng là các mục nhập dữ liệu trong cơ sở dữ liệu và một tập hợp các hàng và cột được chứa trong một bảng. Có nhiều loại cơ sở dữ liệu khác nhau; loại chúng ta sẽ tập trung vào được gọi là SQL ( phát âm là "phần tiếp theo"). SQL là viết tắt của Ngôn ngữ truy vấn có cấu trúc và là ngôn ngữ cơ sở dữ liệu phổ biến nhất. Cơ sở dữ liệu SQL, giống như các ứng dụng máy tính khác, sử dụng ngôn ngữ lập trình để nhận lệnh. Các câu lệnh <a href="../other/glossary.php#syntax" target="_blank">cú pháp </a> chính cần hiểu cho bài học này là các câu lệnh “<b>SELECT</b>,” “<b>FROM</b>,” and “<b>WHERE</b>”. Như tên của nó thể hiện, câu lệnh “<b>SELECT</b>” cho cơ sở dữ liệu biết để chọn hoặc lấy một thứ gì đó từ bảng. Lệnh “<b>FROM</b>” cho cơ sở dữ liệu biết bảng cần chọn. Cuối cùng, lệnh “<b>WHERE</b>” cho cơ sở dữ liệu biết điều kiện để truy xuất thông tin được chỉ định; nếu câu lệnh “<b>WHERE</b>” là đúng, cơ sở dữ liệu sẽ truy xuất thông tin được yêu cầu, nếu không, cơ sở dữ liệu sẽ không lấy gì. Ba câu lệnh này có thể tạo thành một lệnh, chẳng hạn như  “<b>SELECT hàng FROM bẳng WHERE cột giá trị = 'example value</b>'”. 
</p>                    

<p>
Sau đây là lệnh ví dụ để truy cập dữ liệu từ cơ sở dữ liệu có chứa bảng “userTable”, hàng “userEmails” và cột “tên người dùng”: “<b>SELECT userEmails FROM userTable WHERE username = 'jane</b>'” 
</p>

<p>
Câu lệnh này ra lệnh cho cơ sở dữ liệu truy xuất các email từ “userTable” cho tên người dùng “jane.”
</p>

<h3 id="SecurityVulnerabilities">2. Lỗ hổng bảo mật</h3>
<p>
Bây giờ chúng ta đã quen thuộc với bốn thành phần chính của ứng dụng web, HTML, CSS, JavaScript và Cơ sở dữ liệu, chúng ta có thể bắt đầu tìm hiểu về các mối quan tâm về bảo mật liên quan đến từng thành phần. Nơi đầu tiên mà người đánh giá bảo mật nên bắt đầu khi đánh giá tính bảo mật của một ứng dụng web là tự làm quen với ứng dụng đó và xem mã nguồn cho HTML, CSS và JavaScript. Ngoài ra, điều quan trọng là phải đánh giá bất kỳ tương tác nào liên quan đến cơ sở dữ liệu.
</p>

<h4  id="HTMLVulnerabilities">2.1 Lỗ hổng HTML</h4>
<p>
Có một số điều cần xem xét khi đánh giá tính bảo mật của HTML. Điều số một cần tìm là nhận xét mã do nhà phát triển trang để lại. Đôi khi các lập trình viên web sẽ viết ghi chú cho chính họ dưới dạng comment (ghi chú) trong mã của trang web. Những comment này có thể cung cấp rất nhiều thông tin về trang web, chẳng hạn như các phần chưa hoàn thiện của trang có thể dễ bị tấn công hoặc tên người dùng và mật khẩu của nhà phát triển.</p>

<h4  id="CSSVulnerabilities">2.2 Lỗ hổng CSS</h4>
<p>
CSS đặt ra rất ít mối quan tâm về bảo mật vì nó chỉ thêm phong cách cho trang web. Đôi khi, các tệp CSS có thể tiết lộ thông tin về nhà phát triển, chẳng hạn như địa chỉ email; tuy nhiên, hầu hết thông tin có trong nhận xét tệp CSS đều có thể truy cập được ở những nơi khác.
</p>

<h4  id="JavaScriptVulnerabilities">2.3 Lỗ hổng JavaScript </h4>
<p>
Trong ba yếu tố chính của một trang web, JavaScript gây ra rủi ro bảo mật đáng kể nhất. Bởi vì JavaScript được sử dụng để cung cấp cho một chức năng của trang web, đôi khi nó có thể bị người dùng độc hại sử dụng sai hoặc bị thay đổi để thực hiện một hành động trái phép. Ngoài ra, các hàm JavaScript được sử dụng để xác thực biểu mẫu; nghĩa là một hàm JavaScript được sử dụng để xử lý đăng nhập hoặc giới hạn đầu vào vào biểu mẫu. Do đó, chuyên gia bảo mật nên kiểm tra các chức năng JavaScript không an toàn khi đánh giá một trang web hoặc ứng dụng. Đôi khi, trong các biểu mẫu đăng nhập JavaScript đơn giản, tên người dùng và mật khẩu được viết bằng <a href="../other/glossary.php#plaintext" target="_blank">văn bản thô</a> trong hàm; hãy đảm bảo kiểm tra bất kỳ biểu mẫu đăng nhập nào <a href="../other/glossary.php#clientside" target="_blank">đang được xử lý bên máy khách</a>.
</p>

<h4  id="DatabaseVulnerabilities">2.4 Lỗ hổng Cơ sỡ dữ liệu </h4>
<p>
Cơ sở dữ liệu của riêng chúng không gây ra nhiều rủi ro về bảo mật; chính khi cơ sở dữ liệu được kết nối và sử dụng với các trang web và ứng dụng web thì rủi ro bảo mật phát sinh. Trong phần trên, chúng ta đã xem xét một câu lệnh SQL đơn giản để truy xuất email từ cơ sở dữ liệu: “<b>SELECT userEmails FROM userTable WHERE username = 'jane</b>'”. Câu lệnh này sẽ hoạt động tốt khi lấy email từ cơ sở dữ liệu; tuy nhiên, nếu người dùng có thể kiểm soát hoàn toàn dữ liệu nhập vào trường tên người dùng, thì một người dùng độc hại có thể lấy mọi email của người dùng. Kiểu tấn công này được gọi là SQL Injection. Ví dụ, nếu một trang web có biểu mẫu yêu cầu người dùng nhập tên của mình để truy xuất email của họ và không được <a href="../other/glossary.php#sanitize" target="_blank">làm trống</a> đầu vào, sau đó một người dùng độc hại có thể gửi một lệnh độc hại đến cơ sở dữ liệu. Người dùng độc hại có thể nhập vào câu lệnh, “<b>jane' OR '1'='1</b>”, vào trường tên người dùng và truy xuất email của mọi người dùng. Lệnh kết quả sẽ giống như sau: 
“<b>SELECT userEmails FROM userTable WHERE username = 'jane' OR '1'='1'</b>” 
</p>

<p>
Vì “<b>'1'='1'</b>” là luôn luôn đúng, câu lệnh “<b>WHERE</b>” sẽ luôn luôn đúng, và cơ sở dữ liệu sẽ truy xuất mọi hàng trong bảng người dùng. 
</p>

<p>
Ngoài ra, SQL Injection có thể được sử dụng để bỏ qua xác thực đăng nhập. Ví dụ: nếu một trang đăng nhập sử dụng cơ sở dữ liệu để lưu trữ mật khẩu của người dùng, thì một lệnh SQL chẳng hạn như “<b>SELECT user FROM userPasswords WHERE password = 'userInput'</b>” có thể được sử dụng để truy xuất mật khẩu của người dùng nếu nó nằm trong cơ sở dữ liệu. Tuy nhiên, giống như ví dụ trên, người dùng độc hại có thể nhập mật khẩu như “<b>x' OR '1'='1'</b>”. Làm như vậy sẽ dẫn đến một lệnh như “<b>SELECT password FROM userPasswords WHERE password = 'x' OR '1'='1'</b>" lại một lần nữa, “<b>'1'='1</b>” luôn đúng và cho phép người dùng đăng nhập mặc dù người đó không biết mật khẩu.
</p>

<h3 id="Summary">3. Tóm tắt</h3>
<p>
Vì bốn yếu tố này hoạt động cùng nhau để tạo thành một trang web, chúng phải được đánh giá cùng nhau, cũng như riêng lẻ. Nhiều trang web có hộp văn bản HTML cho phép người dùng nhập văn bản sau đó được JavaScript xử lý và in trở lại HTML hoặc được lưu trữ trong cơ sở dữ liệu. Nếu thông tin nhập của người dùng không được xử lý đúng cách, người dùng độc hại có thể nhập thông tin đầu vào được chế tạo cẩn thận và xâm phạm tính bảo mật của ứng dụng web. Một trang web có thể có dạng HTML để đăng nhập người dùng, trong đó tên người dùng và mật khẩu được gửi đến cơ sở dữ liệu để xử lý. Nếu đầu vào không được làm sạch đúng cách, người dùng độc hại có thể truy cập trái phép vào ứng dụng. Một nhà phân tích an ninh mạng nên luôn kiểm tra các hộp đầu vào để tìm các lỗ hổng như vậy.
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

				
