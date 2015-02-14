<p style="color:#F00; font-size:12px;">Welcome <?php echo $sessionname;?></p>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billing System</title>
<style type="text/css">
#wrapper{
	height:500px; width:900px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba<br />
(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:2%;
}
#header { width:900px; height:100px;}
#content table{ margin:0 auto; }
#header ul li{
	list-style:none;
	float:left; margin-top:30px; margin-left:10px;}
</style>

</head>

<body>
<br />
<div id="wrapper">
<div id="header">
<ul>
<li><a href="Home.php">Home</a></li>
<li><a href="bill.php">Billing</a></li>
<li><a href="user.php">Users</a></li>
<li><a href="logout.php">logout</a></li>


</ul>
</div>
<div id="content"><?php

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
$id=$_GET['id'];
$sql="SELECT * FROM `tblmember` where sl_no='$id'"; 					// Sql Query to Select all Data from DB
$result = mysql_query($sql) or die(mysql_error());  // Query Run 

//$sum = mysql_query("SELECT SUM(Bill) AS value_sum FROM tblmember") or die(mysql_error());
//$row=mysql_fetch_array($sum);
//$total = $row[0];
//echo "Total cost is ".$total . "Tk";


if(mysql_num_rows($result)==1)   // if row no. is one
  {
  	 $rows = mysql_fetch_array( $result );
		

?>
	<html>
	<head>
	<title>TextField</title>
	</head>
	<body>
	<form name="form1" method="post" action="update_action.php"> 
		<p>
		Member Name:
				<input type="text" name="membername" value="<?php echo $rows['Member_Name']; ?>">
				

		</p>
		<p>
		  Join Date:
		<input type="text" name="joindate" value="<?php echo $rows['Join_Date']; ?>">
		  

		</p>
		<p>Member ID: 

		  <input type="text" name="memberid" value="<?php echo $rows['Member_ID']; ?>">
		  
	  <p>Speed 
	     <input type="text" name="speed" value="<?php echo $rows['Speed']; ?>">
		 
		 
		 <p>
		Address:
				<input type="text" name="address" value="<?php echo $rows['Address']; ?>">
				

		</p>
		<p>
		Contact:
		<input type="text" name="contact" value="<?php echo $rows['Contact']; ?>">
		 

		</p>
			<input name="id" type="hidden" value="<?php echo $id; ?>">
	<p>
    	<label>
    		<input type="submit" name="Submit" value="Update">
    	</label>
  	</p>

	      
  	</p>
	</form>
	</body>
	</html>
<?php
}
?>