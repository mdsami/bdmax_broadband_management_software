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
	height:900px; width:900px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba<br />
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
<li><a href="useregview.php">Users</a></li>
<li><a href="logout.php">logout</a></li>


</ul>
</div>
<div id="content">
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

$sql="SELECT * FROM `tblusereg`"; 					// Sql Query to Select all Data from DB
$result = mysql_query($sql) or die(mysql_error());  // Query Run 
//$sum=mysql_query ("select SUM(Cost)from `tblbazar`");



if(mysql_num_rows($result))
  {
 ?>
			<table bordercolor="#999999" border="1">
				<tr>
					<!--<td align="center"><strong>Sr. No.</strong></td>-->
					
				</tr>
				
				
<?php 
		while($rows = mysql_fetch_array( $result )) 
		{		// Loop is Run as amany as row is selected
			
?>				<table bordercolor="#999999" border="1">
				<tr>
					
					<td align="center"><strong>User Name</strong></td>
					
					<td align="center"><strong>Password</strong></td>
					
					
					
					
				</tr>
				
				<tr>
					
					<td><? echo $rows['UserName']; ?></td>
					<td><? echo $rows['Password']; ?></td>
					
				</tr>
				
<?												
		}
		

  }

?>
<html><a href="reg.html">Add New Employee</a></html>

