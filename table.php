<?php
	mysql_pconnect('localhost','root','');
	mysql_select_db('demo');
?>
<?php 
	$sql=mysql_query("SELECT* from user ");
	
?>
<?php echo "<table border='1' width='100' cellpadding='0' cellspacing='0'>";
	echo "<tr><th>UserName</th><th>Email</th><th>Password</th></tr>";
	while($value=mysql_fetch_array($sql))
	{
		echo "<tr>";
			echo "<td>";echo $value['user'];echo "</td>";
			echo "<td>";echo  $value['email'];echo "</td>";
			echo "<td>";echo $value['password'];echo "</td>";
		echo "</tr>";
	}
		
echo "</table>"
?>
<?php mysql_close(); ?>