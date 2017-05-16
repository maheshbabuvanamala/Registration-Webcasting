<?php
include("dbconnect.php");
$username=$_GET['user'];
$password=$_GET['pass'];
$result=mysql_query("SELECT * FROM student where id='$username' AND password='$password'");
if(mysql_num_rows($result)==1){
	$row=mysql_fetch_array($result);
	if ($row[7]==1)
		echo 3;
	else{
		session_start();
		$_SESSION['user_Id']=strtoupper($username);
		$_SESSION['name']=$row[2];
		$_SESSION['dob']=$row[4];
		echo 1;
		}
	}
else{
	echo 0;
}
?>
