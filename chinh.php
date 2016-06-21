
<html>
<head>
	<title>Trang chủ</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="chinh.css">
	<meta charset="UTF-8">
	<style type="text/css">
		 a:hover {
          background-color: #ffff99;
        }
	</style>
	<script type="text/javascript">
		alert("Chào mừng bạn đến với bưởi Tân Lạc.!");
	</script>
	<script language="javascript">
	/***************************************************************************************
	* Run when page load
	***************************************************************************************/
	$(document).ready(function()
	{
		initSlideShow();
		
	});
	/***************************************************************************************
	****************************************************************************************/
	function initSlideShow()
	{
		if($(".slideshow div").length > 1) //Only run slideshow if have the slideshow element and have more than one image.
		{
			var transationTime = 4000;//5000 mili seconds i.e 5 second
			$(".slideshow div:first").addClass('active'); //Make the first image become active i.e on the top of other images
			setInterval(slideChangeImage, transationTime); //set timer to run the slide show.
		}
	}
	/***************************************************************************************
	****************************************************************************************/
	
	function slideChangeImage()
	{
		var active = $(".slideshow div.active"); //Get the current active element.
		if(active.length == 0)
		{
			active = $(".slideshow div:last"); //If do not see the active element is the last image.
		}
		
		var next = active.next().length ? active.next() : $(".slideshow div:first"); //get the next element to do the transition
		active.addClass('lastactive');
		next.css({opacity:0.0}) //do the fade in fade out transition
				.addClass('active')
				.animate({opacity:1.0}, 1500, function()
				{
					active.removeClass("active lastactive");	
				});
		 
	}

</script>
		<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){
z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?3viK43Q8UjbS06XqseTZOYOMjgh294KV';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
<head>
<body >
	<div id="top">
	<marquee style="text-align:buttom; font-size:30px;color:blue">Chào mừng quý khách đến với bưởi đỏ Tân Lạc</marquee>
	</div>
	<div id="hello"><marquee>HOT.Bưởi tân lạc ngon bổ rẻ.!Nhanh nhanh đặt hàng nào các bạn.!</marquee></div>
	<div id="menu" style="font-size: 20px;">
	<ul>
	<li id="list1"><a href="chinh.php">Giới Thiệu</a>
	<li>
	<li><a href="hinhanh.php">Hình Ảnh</a>
	<li><a href="dathang.php">Đặt Hàng</a><li>
	<li><a href="lienhe.php">Liên Hệ</a><li>
	<li><a href="dangnhapbuoi.php">Quản Trị</a><li>
	</ul>
	</div>
	<div id="wraper">
		<div id="left">
			<div class="slideshow" style="margin-top:2px;margin-left:25px;margin-right:25px">
				<div ><a href="dathang.php"><img class="hinhanh" src="athiep7.jpg" alt="" border="0" /></a></div>
				<div><a href="dathang.php"><img class="hinhanh" src="athiep10.jpg" alt="" border="0" /></a></div>
				<div><a href="dathang.php"><img class="hinhanh" src="anh3.jpg" alt="" border="0" /></a></div>
				<div><a href="dathang.php"><img class="hinhanh" src="athiep11.jpg" alt="" border="0" /></a></div>
				<div><a href="dathang.php"><img class="hinhanh" src="athiep2.jpg" alt="" border="0" /></a></div>
				<div><a href="dathang.php"><img class="hinhanh" src="athiep4.jpg" alt="" border="0" /></a></div>
				<div><a href="dathang.php"><img class="hinhanh" src="anh5.jpg" alt="" border="0" /></a></div>
				<div><a href="dathang.php"><img class="hinhanh" src="athiep6.jpg" alt="" border="0" /></a></div>
				<div><a href="dathang.php"><img class="hinhanh" src="athiep3.jpg" alt="" border="0" /></a></div>
			</div>
			<center>
				<figure>
					<image class= "phai" src="athiep2.jpg" width="300px" height="300px">
					<figcaption style="font-size:20px;color:red">Bưởi khi đang thời kỳ phát triển</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href="dathang.php"><image class= "phai" src="athiep8.jpg" width="300px" height="300px"></a>
					<figcaption style="font-size:20px;color:red;text-align:center"> Bưởi thương phẩm 30000-50000/quả<br>
					<a href="dathang.php" style="color:blue;font-size:20px">Đặt hàng</a>
					</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href="dathang.php"><image class= "phai" src="anhmui.jpg" width="300px" height="300px"></a>
					<figcaption style="font-size:20px;color:red;text-align:center">Bưởi khi đã loại vỏ<br>
					<a href="dathang.php" style="color:blue;font-size:20px">Đặt hàng</a>
					</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href="dathang.php"><image class= "phai" src="athiep7.jpg" width="300px" height="300px"></a>
					<figcaption style="font-size:20px;color:red;text-align:center">
					<a href="dathang.php" style="color:blue;font-size:20px">Đặt hàng</a>
					</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href="dathang.php"><image class= "phai" src="anh5.jpg" width="300px" height="300px"></a>
					<figcaption style="font-size:20px;color:red;text-align:center">
					<a href="dathang.php" style="color:blue;font-size:20px">Đặt hàng</a>
					</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href="dathang.php"><image class= "phai" src="anh6.jpg" width="300px" height="300px"></a>
					<figcaption style="font-size:20px;color:red;text-align:center">
					<a href="dathang.php" style="color:blue;font-size:20px">Đặt hàng</a>
					</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href="dathang.php"><image class= "phai" src="anh4.jpg" width="300px" height="300px"></a>
					<figcaption style="font-size:20px;color:red;text-align:center">
					<a href="dathang.php" style="color:blue;font-size:20px">Đặt hàng</a>
					</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href="dathang.php"><image class= "phai" src="anh3.jpg" width="300px" height="300px"></a>
					<figcaption style="font-size:20px;color:red;text-align:center">
					<a href="dathang.php" style="color:blue;font-size:20px">Đặt hàng</a>
					</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href="dathang.php" target="_blank"><image class= "phai" src="athiep10.jpg" width="300px" height="300px"></a>
					<figcaption style="font-size:20px;color:red;text-align:center">
					<a href="dathang.php" style="color:blue;font-size:20px">Đặt hàng</a>
					</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href="dathang.php" target="_blank"><image class= "phai" src="athiep15.jpg" width="300px" height="300px"></a>
					<figcaption style="font-size:20px;color:red;text-align:center">
					<a href="dathang.php" style="color:blue;font-size:20px">Đặt hàng</a>
					</figcaption>
				</figure>
			</center>
			<!--Nút facebook-->
			 <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-width="20" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			<!--facebook-->
		</div>
		<div id="right">
			<h1 style="font-size:20px;margin-top:5px;margin-left:10px">1.Đặc điểm</h1><p  style="font-size:20px">Cây Bưởi Đỏ Tân Lạc Hòa Bình (bưởi đào Tân Lạc) có nguồn gốc chính xác tại xã Khánh Thương , huyện Ba Vì , Hà Nội . Cây bưởi này đã được đưa về trồng đầu tiên tại nhà ông Trần Hùng ở xóm Tân Hường 1 , xã Thanh Hối , Huyện Tân Lạc từ đầu năm 2004. Giống Bưởi Đỏ Tân Lạc Hòa Bình (bưởi đào Tân Lạc) này có quả hình tròn, vỏ mầu vàng khi chín múi bưởi có mầu hồng đỏ , quả có khối lượng trung bình từ 0,9 – 1,4kg. Tép bưởi Tân Lạc có mầu đỏ hồng,mọng nước , ăn rất giòn ngọt và không bị he đắng. Cây bưởi đỏ Tân Lạc Hòa Bình <span style="color:blue">(bưởi đào Tân Lạc)</span> cho năng suất rất cao và ổng định, với cây 7 năm tuổi cho năng suất từ 260 – 320 quả/cây.</p>
			<br>
			<center><img src="anhmui.jpg" width="300px" height="300px"></center><br/>
			<p class="text">Cây bưởi Đào Tân Lạc thu hoạch từ 7-8 tháng. Bà con cần lưu ý khi trồng cây bưởi, thời gian thu hoạch để cho năng suất cho cây từ khi non đến khi trưởng thành từ 2 năm, tùy vào địa hình, thời tiết. Sau thời gian kiến thiết cơ bản, cây có thể thu hoạch từ 100 – 150 kg quả thương phẩm.

 			– Cây Bưởi Đào Tân Lạc được  nhân giống vô tính tại Trang trại cho cây giống với khả năng sinh trưởng và phát triển tốt, cho năng suất cao, chất lượng ổn định, cây nhanh ra quả, có khả năng chống chịu sâu bệnh tốt, chịu úng chịu hạn cao. Cây Bưởi Đào Tân Lạc giống có chiều cao  xuất vườn từ 55 -60cm .</p>
 			<h2 style="font-size:20px;margin-left:10px">2. Chi phí đầu tư ban đầu dự kiến:</h2>
 			<p class="text">Bưởi Đào Tân Lạc <br>2500.000 – 3.000.000 vnđ /sào Bắc Bộ (gồm: cây giống, phận bón thuốc trừ sâu).</p>
 			<h3 style="font-size:20px;margin-left:10px">3. Giá bán .</h3>
 			<p class="text">Cành chiết(cây) giống Từ 30.000đ –50.000đ/cây  (tùy số lượng)</p>
 			<h4  style="font-size:20px;margin-left:10px">4. Năng suất và hiệu quả kinh tế:</h4>
 			<p class="text">Sau 3-5 năm cây bắt đầu cho thu hoạch, một cây  cho khoảng  100-150kg quả/cây,  đạt từ 4500.000vnđ đến 6000.000 vnđ/1 sào bắc bộ (30.000đ-50.000đ/quả). Năm thứ 4 một cây cho thu hoạch khoảng từ 120 đến 150 quả, đạt từ 6.000.000 đến 7.500.000 vnđ/1 sào bắc bộ. Từ năm thứ 5 chở đi đến năm thứ 10 nếu chăm sóc tốt có thể đạt được từ 25.000.000 đến 30.000.000 vnđ/1 sào bắc bộ</p>
	 			<center>
					<figure>
						<a href="athiep4.jpg" target="_blank"><image class= "phai"src="athiep4.jpg" width="500px" height="300px"></a>
						<figcaption style="font-size:20px;color:red;text-align:center">Bưởi cho thu hoạch sau 3năm
						</figcaption>
					</figure>
				</center>
 			<h5 style="font-size:20px;margin-left:10px">5. Phương thức giao cây giống:</h5>
 			<p class="text">– Giao hàng tại nơi sản xuất<span style="color:blue">(Tân Lai-Đông Lai-Tân Lạc- Hòa Bình)</span></p>
 			<h6 style="font-size:20px;margin-left:10px">6. Ghi chú:</h6>
 			<p class="text">
 			-Đảm chất lượng bưởi.<br>
			- Đảm bảo chất lượng cây giống cung cấp.<br>
			- Hỗ trợ kỹ thuật trồng, chăm sóc và thông tin thị trường đầu ra cho sản phẩm khi được thu hoạch...</p><br><br>
	 			<center>
					<figure>
						<a href="h.jpg" target="_blank"><image class= "phai"src="h.jpg" width="500px" height="300px"></a>
						<figcaption style="font-size:20px;color:red;text-align:center">Vườn chuẩn bị ra quả
						</figcaption>
					</figure>
				</center>
				<center>
					<figure>
						<a href="anh3.jpg" target="_blank"><image class= "phai"src="anh3.jpg" width="500px" height="300px"></a>
						<figcaption style="font-size:20px;color:red;text-align:center">Bưởi ra quả năm đầu tiên
						</figcaption>
					</figure>
				</center>
				<center>
					<figure>
						<a href="anh4.jpg" target="_blank"><image class= "phai" src="anh4.jpg" width="500px" height="300px"></a>
						<figcaption style="font-size:20px;color:red;text-align:center">
						</figcaption>
					</figure>
				</center>
				<center>
					<figure>
						<a href="athiep11.jpg" target="_blank"><image class= "phai"src="athiep11.jpg" width="500px" height="300px"></a>
						<figcaption style="font-size:20px;color:red;text-align:center">Bưởi đang trong thời kỳ phát triển rất sai
						</figcaption>
					</figure>
				</center>
				<center>
				<figure>
						<a href="athiep14.jpg" target="_blank"><image class= "phai"src="athiep14.jpg" width="500px" height="300px"></a>
						<figcaption style="font-size:20px;color:red;text-align:center"> 
						Cứ phải nói là rất rất là sai.
						</figcaption>
					</figure>
				</center>
				<center>
				<figure>
						<a href="athiep12.jpg" target="_blank"><image class= "phai"src="athiep12.jpg" width="500px" height="300px"></a>
						<figcaption style="font-size:20px;color:red;text-align:center"> 
						</figcaption>
					</figure>
				</center>
				<center>
				<figure>
						<a href="athiep13.jpg" target="_blank"><image class= "phai"src="athiep13.jpg" width="500px" height="300px"></a>
						<figcaption style="font-size:20px;color:red;text-align:center"> 
						</figcaption>
					</figure>
				</center>
		<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-width="20" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
	</div>
	<div style="clear:both"></div>
	<div id="buttom" style="color:white">
	<center>Trần Văn Linh-0164452648-Học Viện Nông Nghiệp Việt Nam-2016</center>
	</div>
	<!--<script src="http://uhchat.net/code.php?f=39caf6"></script>-->
<body>
</html>