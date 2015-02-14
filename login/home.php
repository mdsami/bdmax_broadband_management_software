<?php session_start();
if(!isset($_SESSION['id'])){
	//echo '<script>windows: location="index.php"</script>';
	
	}
?>
<?php
include 'db.php';
?>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysql_query("SELECT * FROM tbluser where id= '$session'");
//while($row = mysql_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
?>

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
<li><a href="./Bill/viewer.php">Billing</a></li>
<li><a href="useregview.php">Users</a></li>
<li><a href="logout.php">logout</a></li>


</ul>
</div>
<div id="content">



<div id="form">

  <p><h1 align="center">Add Client</h1></p>
  
  <form action="insert.php" method="post">
  <!--<form action="viewer.php" method="post2">-->
<table width="332" border="0">
  <tr>
    
    <td width="99"><input type="hidden"  name="id" value="0" /></td>
  </tr>
  <tr>
    <td>Member Name:</td>
    <td width="223"><input type="text" name="Membername" /></td>
    </tr>
    <tr>
    <td>Join Date:</td>
    <td><input type="text" name="Joindate" /></td>
    </tr>
    <tr>
  <td>Member ID:</td>
    <td><input type="text" name="Memberid" /></td>
 
  </tr>
    <td>Speed:</td>
    <td><input type="text" name="speed" /></td>
 
  </tr>  
  <tr>
    <td>Address:</td>
    <td><input type="text" name="address" /></td>
  
  </tr>
  <tr>
    <td>Contact #:</td>
    <td><input type="text" name="contact" /></td>
  
  </tr>
   <tr>
    
    <td><input type="submit" name="submit" value="ADD" /></td>
	<td><a href="viewer.php">view</a></td>

  </tr>
 
</table>
</form>

</div>



</div>
</body>
</html>
