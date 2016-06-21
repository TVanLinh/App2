<html>
<head>
	<title>Liên hệ</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="hinhanh.css">
	<meta charset="UTF-8">
	<style type="text/css">
		 a:hover {
          background-color: #ffff99;
        }
	</style>
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
<body>
	<div id="top">
	<div class="slideshow">
		<div ><a href="#"><img class="hinhanh" src="T2.jpg" width="" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="anh4.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="anh3.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="T9.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="athiep1.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="athiep2.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="anh6.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="anh5.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="athiep7.jpg" alt="" border="0" /></a></div>
	</div>
	</div>
	<div id="hello"><marquee>HOT.Bưởi tân lạc ngon bổ rẻ.!Nhanh nhanh đặt hàng nào các bạn.!</marquee></div>
	<div id="menu">
	<ul>
	<li id="list1"><a href="chinh.php">Giới Thiệu</a>
	<li>
	<li><a href="hinhanh.php">Hình ảnh</a>
	<li><a href="dathang.php">Đặt hàng</a><li>
	<li><a href="#">Liên Hệ</a><li>
	<li><a href="dangnhapbuoi.php">Quản Trị</a><li>
	</ul>
	</div>

	<div id="wraper">
	
		<div>
				<image src="athiep7.jpg" width=300px;heigth=300px; style="float:right">
				<p style="font-size:20px;margin-top:10px ;margin-left:5px">Vui lòng liên hệ chủ vườn để được biết chi tiết : <br>
				Trần Hồng Năng:01686323507<br>
				Trần Văn Lăng: 01696280154 hoặc 01648979757<br>
				Trần Văn Minh: 0167 5619686<br>
				Trần Văn Hải: 0164 3531739<br>
				Địa chỉ: <a  href="https://www.google.com/maps/search/x%C3%A3+%C4%91%C3%B4ng+lai+t%C3%A2n+l%E1%BA%A1c+h%C3%B2a+b%C3%ACnh/@20.5840807,105.2493041,13z/data=!3m1!4b1" target="_blank"><span style="color:blue">Tân lai-Đông lai-Tân lạc-Hòa Bình</span></a>
				</p>
		</div>
		<br><br><br><br>
        <div id="fb-root"></div>
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