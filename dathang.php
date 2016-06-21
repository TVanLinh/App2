
<html>
<head>
	<title>Đặt hàng</title>
	<link rel="stylesheet" type="text/css" href="dathang2.css">
	<meta charset="UTF-8">
	<style type="text/css">
		 a:hover {
          background-color: #ffff99;
        }
	</style>
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
	<marquee style="text-align:buttom; font-size:30px;color:blue">Chào mừng quý khách đến với bưởi đỏ tân lạc</marquee>
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
	<?php
		$db=mysqli_connect('mysql.hostinger.vn','u666225305_linh','tranvanlinh180895','u666225305_bh');
	 ?>
	<div id="wraper">
	<?php
			
			if(empty($_POST['name'])==false && empty($_POST['phone'])==false && $_POST['number']>0)
			{
					//mysql_query("INSERT INTO khachhang value('".$_POST['name']."','".$_POST['phone']."','ok','".$_POST['number']."',".$_POST['ghichu']."')");
					//echo "Xin chào ".$_POST['name']." chúng tôi sẽ liên hệ với quý khách sớm nhất có thể.!";
					//$file=fopen("khachhang.txt","a+");
					
					//fwrite($file, " [===Ngày : ".date("F j, Y, g:i a")." ");
				 	// fwrite($file,"Họ và tên: ".$_POST['name']."===");
				 	// fwrite($file,"Số điện thoại: ".$_POST['phone']."===");
				 	// fwrite($file, "Số lượng: ".$_POST['number']."===");
				 	// fwrite($file,"Ý kiến: ".$_POST['ghichu']."===]");
				    //fclose($file);
					$luachon1=' ';
					$luachon2=' ';
					if(isset($_POST["luachon1"])&&$_POST["luachon1"]!=NULL)
					{
						$luachon1=$_POST["luachon1"];
					}
					if(isset($_POST["luachon2"])&&$_POST["luachon2"]!=NULL)
						$luachon2=$_POST["luachon2"];
					$date=date("Y-m-d H:i:s");
					mysqli_query($db,"INSERT INTO user value('".$_POST['name']."','".$_POST['phone']."','$luachon1','$luachon2',".$_POST['number'].",'".$_POST['ghichu']."','$date')");
					echo "Xin chào ".$_POST['name']." chúng tôi sẽ liên hệ với quý khách sớm nhất có thể.!";
			}
			else if( empty($_POST['number'])==true|| $_POST['number']<0)
				echo "Bạn chưa nhập số lượng,hoặc số lượng nhỏ hơn 0 nên chưa hoàn thành đặt hàng.!";

			
			?>
		<div>
		<form class="form" name="adduser" method="POST" action="dathang.php" onsubmit="return check_submit_addnew()"  >
			
			<label><span style="font-size:20px;color:blue;">Vui lòng nhập đầy đủ thông tin đặt hàng dưới đây<span></label><br><br>
			Họ và tên: <input type="text" name="name" style="width:300px;height:30px;margin-top:10px"><span style="color:red;font-size:20px">*</span><br/></br>
			Số điện thoại:<input type="number" name="phone" style="width:280px;height:30px"><span style="color:red;font-size:20px">*</span><br/></br>
			Loại hàng: <input  input type="checkbox" name="luachon1" value="Canh chiet"/>Cành chiết
						<input type="checkbox" name ="luachon2" value="Qua"/>Quả<br/></br>
			Số lượng: <input type="number" name="number" style="width:100px;height:30px;"/><span style="color:red;font-size:20px">*</span><br/></br>
			Ý kiến :<br><textarea name="ghichu" cols="50" rows="10"></textarea><br/></br>
			<input type="submit" name="submit" value="Đặt hàng" style="font-size:20px;">
			<input type="reset" name="reset" value="Hủy bỏ" style="font-size:20px;"><br>
			
		</form>

		<?php
		//mysql_pconnect('localhost','root','');
		//mysql_select_db('buoi');
		//?>
		<?php
			
			
			/*$sql=mysql_query("SELECT * from khachhang");
			while ($value=mysql_fetch_array($sql)) 
			{
				echo $value['hoTen'];

			}*/
			// if(isset($_POST['submit']))
			// {
			// 	if($_POST['name']==NULL || $_POST['phone']==NULL||$_POST['number']==NULL)
			// 		echo "Not write userName or Email";
			// 	else
			// 	{
			// 		$sql=mysql_query("INSERT INTO khachhang value('".$_POST['name']."','".$_POST['phone']."','".$_POST['number']."','".$_POST['luachon']."',".$_POST['ghichu']."')");
			// 		//mysql_query("INSERT INTO khachhang value('tran van linh','01644952648','25','canh','ok')");
			// 		//echo $_POST['luachon'];
			// 	}
			// }
			//if($_POST['name']=='')
				
					//alert("ban phai nhap day du ten.!");
				
		?>


<script language="javascript" type="text/javascript">
document.forms['adduser'].name.focus();
function set_focus()
{
   document.forms['adduser'].name.focus();
}
function check_submit_addnew()
{
   var frm = window.document.adduser; 		
   if(frm.name.value=='')
   {
      alert('Xin vui lòng nhập họ tên !');			
      document.forms['adduser'].name.focus();
      return false;
   }
   else if(frm.phone.value=='')
   {
      alert('Xin vui lòng nhập số điện thoại !');
      document.forms['adduser'].phone.focus();			
      return false;
   }
   else						
      return true;	
}
</script>
<script language="javascript" type="text/javascript">
document.forms['adduser'].name.focus();
function set_focus()
{
   document.forms['adduser'].name.focus();
}
function check_submit_addnew()
{
   var frm = window.document.adduser; 		
   if(frm.name.value=='')
   {
      alert('Xin vui lòng nhập họ tên !');			
      document.forms['adduser'].user.focus();
      return false;
   }
   else if(frm.phone.value=='')
   {
      alert('Xin vui lòng nhập Số điện thoại !');
      document.forms['adduser'].pass.focus();			
      return false;
   }
   else						
      return true;	
}
</script>
		</div>
		<br>
		<a  href="https://www.google.com/maps/search/x%C3%A3+%C4%91%C3%B4ng+lai+t%C3%A2n+l%E1%BA%A1c+h%C3%B2a+b%C3%ACnh/@20.5840807,105.2493041,13z/data=!3m1!4b1" target="_blank"><span style="color:blue;font-size:20px;">Tìm kiếm vị trí Tân lạc-Hòa bình trên googlemap<span></a>
		<div id="googleMap" style="width:500px;height:380px;"></div>

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
	<div style="clear:both"></div>
	<div id="buttom" style="color:white">
	<center>Trần Văn Linh-0164452648-Học Viện Nông Nghiệp Việt Nam-2016</center>
	</div>
	<!--<script src="http://uhchat.net/code.php?f=39caf6"></script>-->
<body>
</html>