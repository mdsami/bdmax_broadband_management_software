<?php session_start(); ?>
<?php
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

if (isset($_POST['submit'])) {//condition kun e click ang button
$UserName=$_POST['UserName'];//variable ang $Username kag ang $_POST['UserName'] ay value sang textbox nga UserName
$Password=$_POST['Password'];//variable ang $Username kag ang $_POST['Password'] ay value sang textbox nga Password
$result=mysql_query("select * from tblusereg where UserName='$UserName' and Password='$Password'")or die (mysql_error());//query sang database 
		
$count=mysql_num_rows($result);//isipon kn may tyakto sa query
//ma return row sa database
		
		if ($count==1)
		{//kun may tyakto sa query e execute yah ang code sa dalom
		$row=mysql_fetch_array($result);
		//session_start();//para mag start ang session
		$_SESSION['member_id']=$row['member_id'];//kwaon ang id sang may tyakto nga username kag password ang ibotang sa $_SESSION['member_id']
		header('location:home.php');
		}else
		{
		header('location:index.php');
		}
}
?>

