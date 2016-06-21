
<?php 
	mysql_pconnect('localhost','root','');
	mysql_select_db('dangnhap');
?>
<?php 
	session_start();
	if (isset($_SESSION['userName']))
	{
		echo "Xin Chao :".$_SESSION['userName'];
	}
	else
	{
		if(isset($_POST['submit']))
		{
			$sql=mysql_query("SELECT * From user where userName='".$_POST['userName']."' and password='".$_POST['passWord']."'");
			if(mysql_num_rows($sql)>0)
			{

				echo "Ban da dang nhap thanh cong xinh chao". $_POST['userName'];
				$_SESSION['userName']=$_POST['userName'];
			}
			else
			{
				echo "Ten dang nhap hoac mat khau khong dung";
			}
		}?>
			<form action="dangnhap.php" method="POST">
			UserName: <input type="text" name="userName"><br/><br/>
			Password: <input type="password" name="passWord"><br/><br/>
			<input type="submit" name="submit" value="Sign In">
</form>
		<?php
	}
	
?>
