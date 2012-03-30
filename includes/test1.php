<?php 




$link = mysql_connect('locatorsrus.db.8753472.hostedresource.com', 'locatorsrus', 'O91665o2863');

		if (!$link) {
		    die('Could not connect: ' . mysql_error());
		}//echo 'Host OK';
		mysql_select_db('locatorsrus');
		$result = mysql_query("INSERT INTO loc_tbl (password,username) values ('143456','cedrick')");
		if(!$result)
		{
			//echo "Error!";
		}else 
		{
			//echo "ok";
			
		}
			$result = mysql_query("Select * from loc_tbl");
			
			while($row=mysql_fetch_array($result))
										{
											
											echo $row['password'];
											echo $row['username'];
										}
		mysql_close($link);

?>