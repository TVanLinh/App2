<html>
<head>
	<title>Hình ảnh</title>
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
		<div ><a href="#"><img class="hinhanh" src="T9.jpg" width="" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="T3.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="c.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="athiep1.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="athiep2.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="athiep4.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="anh3.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="anh4.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="anh5.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="athiep6.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="athiep11.jpg" alt="" border="0" /></a></div>
		<div><a href="#"><img class="hinhanh" src="athiep7.jpg" alt="" border="0" /></a></div>
	</div>
	</div>
	<div id="hello"><marquee>HOT.Bưởi tân lạc ngon bổ rẻ.!Nhanh nhanh đặt hàng nào các bạn.!</marquee></div>
	<div id="menu">
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
		<ul>
		<li><a href="http://buoitanlachoabinh.16mb.com/anh3.jpg" target="_blank"><image src="anh3.jpg" class="image"></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep12.jpg" target="_blank"><image src="athiep12.jpg" class="image"></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/anhmui.PNG" target="_blank"><image src="anhmui.PNG" class="image"></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/anh5.jpg" target="_blank"><image src="anh5.jpg" class="image"></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep2.jpg" target="_blank"><image src="athiep2.jpg" class="image"></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep3.jpg" target="_blank"><image src="athiep3.jpg" class="image"></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep4.jpg" target="_blank"><image src="athiep4.jpg" class="image"></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep5.jpg" target="_blank"><image src="athiep5.jpg" class="image"></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep6.jpg" target="_blank"><image src="athiep6.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep7.jpg" target="_blank"><image src="athiep7.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep8.jpg" target="_blank"><image src="athiep8.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/anh4.jpg" target="_blank"><image src="anh4.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/anh3.jpg" target="_blank"><image src="anh3.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/T6.jpg" target="_blank"><image src="T6.jpg" class="image"></image></a></li>

		<li><a href="http://buoitanlachoabinh.16mb.com/s.jpg" target="_blank"><image src="s.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/d.jpg" target="_blank"><image src="d.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/a.jpg" target="_blank"><image src="a.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/T2.jpg" target="_blank"><image src="T2.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/a.jpg" target="_blank"><image src="a.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/anh6.jpg" target="_blank"><image src="anh6.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/a.jpg" target="_blank"><image src="a.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/anh5.jpg" target="_blank"><image src="anh5.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/T4.jpg" target="_blank"><image src="T4.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/T5.jpg" target="_blank"><image src="T5.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/T6.jpg" target="_blank"><image src="T6.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/T7.jpg" target="_blank"><image src="T7.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep10.jpg" target="_blank"><image src="athiep10.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep11.jpg" target="_blank"><image src="athiep11.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep12.jpg" target="_blank"><image src="athiep12.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep14.jpg" target="_blank"><image src="athiep14.jpg" class="image"></image></a></li>

		<li><a href="http://buoitanlachoabinh.16mb.com/athiep15.jpg" target="_blank"><image src="athiep15.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep16.jpg" target="_blank"><image src="t16.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep17.jpg" target="_blank"><image src="athiep17.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/athiep13.jpg" target="_blank"><image src="athiep13.jpg" class="image"></image></a></li>//
		<li><a href="http://buoitanlachoabinh.16mb.com/t11.jpg" target="_blank"><image src="t11.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t12.jpg" target="_blank"><image src="t12.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t13.jpg" target="_blank"><image src="t13.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t14.jpg" target="_blank"><image src="t14.jpg" class="image"></image></a></li>

		<li><a href="http://buoitanlachoabinh.16mb.com/t15.jpg" target="_blank"><image src="t15.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t16.jpg" target="_blank"><image src="t16.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t17.jpg" target="_blank"><image src="t17.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t18.jpg" target="_blank"><image src="t19.jpg" class="image"></image></a></li>

		<li><a href="http://buoitanlachoabinh.16mb.com/t20.jpg" target="_blank"><image src="t20.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t18.jpg" target="_blank"><image src="t18.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t21.jpg" target="_blank"><image src="t21.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t22.jpg" target="_blank"><image src="t22.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t23.jpg" target="_blank"><image src="t23.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t24.jpg" target="_blank"><image src="t24.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t26.jpg" target="_blank"><image src="t26.jpg" class="image"></image></a></li>
		<li><a href="http://buoitanlachoabinh.16mb.com/t25.jpg" target="_blank"><image src="t25.jpg" class="image"></image></a></li>
		</ul>
		<!-- nhac-->
		
		<center><a href="#" style="font-size:20px; text-decoration:none;color:red"><< lên đầu trang</a></center>

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