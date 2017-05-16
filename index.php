<?php 
session_start();
if (isset($_SESSION['user_Id'])){
	include("display.php");
	}
else{
	include("index2.php");
}

?>
