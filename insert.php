<?php
	mysql_pconnect('localhost','root','');
	mysql_select_db('demo');
?>
<?php
	if(isset($_POST['submit']))
	{
		if($_POST['user']==NULL || $_POST['email']==NULL||$_POST['password']==NULL)
			echo "Not write userName or Email";
		else
		{
			$sql=mysql_query("INSERT INTO user value('$count','".$_POST['user']."','".$_POST['email']."','".$_POST['password']."')");
			if($sql)
			{
				echo "<br> Insert successfull";
			}
			else
			{
				echo "error Not Insert";
			}
		}
	}
?>
<form action="insert.php"  method="POST">
	UserName: <input type="text" name="user"><br><br>
	Email: <input type="text" name="email"><br><br>
	Passsword:<input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>