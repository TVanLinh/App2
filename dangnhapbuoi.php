<!DOCTYPE html>
<html>
<head>
	<title>
		Đăng nhập
	</title>
	<meta charset="utf-8">
	<style type="text/css">
		.signin{
			width: 500px;
			height: 500px;
			text-align: left;
			margin-left: 200px;
			margin-top: 200px;
			margin-right: 200px;
			font-style: italic;
			font-family: time new roman;
			font-size: 30px;
		}
	</style>
	
</head>
<body style="background:#e5e5e5">
	<form class="signin" method="POST" action="thongtin.php">
		Tên đăng nhập :<input type="text" name="admin" ><br><br>
		Mật khẩu :     <input type="password" name="password" ><br><br>
		<input type="submit" name="signin" value="Đăng nhập" style="font-size:25px;font-style:italic">
	</form>
</body>
</html>