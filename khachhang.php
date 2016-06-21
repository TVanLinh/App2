<html>
<head>
	<link rel="stylesheet" type="text/css" href="dathang.css">
	<meta charset="UTF-8">
	<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
		function initialize() {
		var mapProp = {
		center:new google.maps.LatLng(20.622831, 105.243386),
		zoom:7,
		mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
<head>
<body>
	<div id="top">
	<marquee style="text-align:buttom; font-size:30px;color:blue">Bưởi đỏ tân lạc.! Liên hệ 01644952648</marquee>
	</div>
	<div id="hello"><marquee>HOT.Bưởi tân lạc ngon bổ.!</marquee></div>
	<div id="menu">
	<ul>
	<li id="list1"><a href="chinh.php">Giới Thiệu</a>
	<li>
	<li><a href="hinhanh.php">Hình ảnh</a>
	<li><a href="dathang.php">Đặt hàng</a><li>
	<li><a href="#">Giải trí</a><li>
	</ul>
	</div>
	<?php
		mysql_pconnect('localhost','root','');
		mysql_select_db('khachhang');
	?>
	<div id="wraper">
		<?php
			
				if($_POST['name']!=''&& $_POST['phone']!='')
				{
					echo "Xin chao ".$_POST['name'].'chung toi se lien he voi ban som nhat.!';
					mysql_query("INSERT INTO khachhang value('".$_POST['name']."','".$_POST['phone']."','".$_POST['option']."','".$_POST['number']."',".$_POST['ghichu']."')");
					
				}
			
		?>
		
	</div>
	<div style="clear:both"></div>
	<div id="buttom">
	<center>Trần Văn Linh. Liên hệ :01644952648</center>
	</div>
<body>
</html>