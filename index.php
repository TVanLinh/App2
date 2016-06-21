<?php
	mysql_connect('localhost','root','');
	mysql_select_db('demo')
?>
<?php
	$sql=mysql_query("SELECT * FROM User  limit 0,2");
	while($value=mysql_fetch_array($sql))
	{
		echo "user : ".$value['user']."<br>";
		echo "mail: ".$value['email']."<br>";
	}
?>