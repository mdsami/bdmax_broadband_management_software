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

$sql="SELECT * FROM `tblmember`"; 					// Sql Query to Select all Data from DB
$result = mysql_query($sql) or die(mysql_error());  // Query Run 
//$sum=mysql_query ("select SUM(Cost)from `tblbazar`");



if(mysql_num_rows($result))
  {
 ?>
			<table bordercolor="#999999" border="1">
				<tr>
					<!--<td align="center"><strong>Sr. No.</strong></td>-->
					<td align="center"><strong>Member Name</strong></td>
					<!--<td align="center"><strong>Join Date</strong></td>-->
					<td align="center"><strong>Member ID</strong></td>
					<td align="center" ><strong>Speed</strong></td>
					<td align="center" ><strong>Details</strong></td>
					<td align="center" ><strong>Delete</strong></td>
					<td align="center" ><strong>Edit</strong></td>
				</tr>
				
				
<?php 
		while($rows = mysql_fetch_array( $result )) 
		{		// Loop is Run as amany as row is selected
			
?>				
				<tr>
					<!--<td><? echo $rows['sl_no']; ?></td>-->
					<td><? echo $rows['Member_Name']; ?></td>
					<!--<td><? echo $rows['Join_Date']; ?></td>-->
					<td><? echo $rows['Member_ID']; ?></td>
					<td><? echo $rows['Speed']; ?></td>
					<!--<td><? echo $rows['Paid_Date']; ?></td>
					<td><? echo $rows['Status']; ?></td>
					<td><? echo $rows['Bill']; ?></td>
					<td><? echo $rows['Due']; ?></td>
					<td><? echo $rows['Total_Payable']; ?></td>-->
					
					<td align="center"><a href="details.php?id=<? echo $rows['sl_no']; ?>">Details</a></td>
					<td align="center"><a href="delete.php?id=<? echo $rows['sl_no']; ?>">Delete</a></td>
					<td align="center"><a href="update.php?id=<? echo $rows['sl_no']; ?>">Edit</a></td
				</tr>
				
<?												
		}
		

  }

?>
<html><a href="home.php">Add New Member</a></br>
<a href="useregview.php">View Users</a></html>

