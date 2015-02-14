<?php
/*------------ Conect DB----------------*/
define('MYSQL_USER', 'root');
define('MYSQL_PASS', "");
define('MYSQL_DB', 'bdmax');
define('MYSQL_HOST', 'localhost');
  $con = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASS);
		if (!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
  mysql_select_db(MYSQL_DB, $con);

/*------------ End Conect DB----------------*/


if(isset($_POST['Submit']))  // if button click
{
	
	 // if check box Select
			$id=$_POST['id'];
			
			$sql="delete from tblmember where sl_no='$id'";
			$result = mysql_query($sql) or die(mysql_error());
			if($result) { // if updated
							echo "Deleted Successful!";
						}
	   				else { // if update error
	   						echo "Delete Failed!";
	   					}
	
}
?>
