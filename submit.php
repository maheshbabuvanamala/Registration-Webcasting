<?php 
session_start();
include("dbconnect.php");
$id=$_POST['id'];
$name=$_POST['uname'];
$dob=$_POST['dob'];
$phn_num=$_POST['phn_num'];
$already=$_POST['already'];
$email=$_POST['email_id'];
$query="INSERT INTO registered(id,name,dob,phn_num,already,email_id) values('$id','$name','$dob','$phn_num','$already','$email')";
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<meta name="Generator" content="EditPlus">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">

<title>Registration Form</title>

<link rel="stylesheet" href="css/login-form.css" media="screen">

<style>body{font: 100% Verdana, Arial, Helvetica, sans-serif;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
	background: #736F6E;
	}
	
	.footer{margin-top:50px;text-align:center; color:#666;font:bold 14px Arial}.footer a{color:#999;text-decoration:none}.login-form{margin: 50px auto;}
#wrapper {
	width:988px;
	margin:0 auto;
	background-image:url(img/bg.jpg);
	background-repeat:repeat-y;
	
}
/*.footer {
	padding: 0 10px; *//* this padding matches the left alignment of the elements in the divs that appear above it. */
	/*background:#112E64;
	color: #FFFFFF;
	font: 12px Arial, Helvetica, sans-serif;
}*/
.topborder{ 
	padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#112E64;
	height: 8px;
} 
.border{ 
	padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#112E64;
	height: 2px;
} 
</style>
<style type="text/css">
            body{
                background-color:white;
                
            }
            #form{
                margin:100px;
                width: 300px;
		border-radius:25px 0px 25px 0px;
                border: 2px solid #bae0fb;
                padding: 10px;
		margin:0 auto;
            }
            #form label{
                font:bold 11px arial;
                color: #565656;
                padding-left: 1px;
            }
            #form label.mandat{color: #f00;}
            
            #form img{
                margin-bottom: 8px;
            }
            #form input[type="submit"]{
                background-color: #0064aa;
                border: none;
                color: #fff;
                padding: 5px 8px;
                cursor: pointer;
                font:bold 12px arial;
            }
            .error{
                border: 1px solid red;
            }
            .cap_status{
                width: 350px;
                padding: 10px;
                font: 14px arial;
                color: #fff;
                background-color: #10853f;
                display: none;
            }
            .cap_status_error{
                background-color: #bd0808;                
            }
	.footer{
		margin-top:200px;
		display:block;
		width:700px;
		height:25px;
		border-radius:0px 0px 15px 15px;
		border:1px dotted grey;
		background-color:skyblue;
		}
	.footerb{
		margin-top:20px;
		display:block;
		width:700px;
		height:25px;
		border-radius:0px 0px 15px 15px;
		border:1px dotted grey;
		background-color:skyblue;
		}
	 #reg{
                margin:100px;
                width: 500px;
		border-radius:25px 0px 25px 0px;
                border: 2px solid #bae0fb;
                padding: 10px;
		margin:0 auto;
            }
	table{
		border:2px solid purple;
	}
	
        </style>


</head>

<body class="js">
<div id="wrapper"><br>
    <table style="border-collapse: collapse; margin-top:5px;" align="center" border="0" bordercolor="#DDDDDD" cellpadding="4" cellspacing="0" width="700">
	<tbody><tr>
		
		<td width="10%">
			<img src="images/rguktlogo.jpg" align="right" width="60">
		</td>
		<td width="80%">
		<center><font color="#153E7E" face="arial" size="5"><b>Rajiv Gandhi University of Knowledge Technologies</b></font><br>
		<div class="head">
			<font color="#153E7E" face="arial" size="4">Vindhya C4, Ground Floor, Campus of IIIT-H,<br>
   Gachibowli,  Hyderabad -500 032.
 </font><br>
			<font color="#153E7E" face="arial" size="4"></font><br>
		</div>
		</center>
		</td>
		</tr><tr>
		<td colspan="4"><div class="border">&nbsp;</div></td>
	</tr>
		
	
	
	</tbody></table>
  <br>
<font color="#437C17" face="arial" size="3"><b><center>Registration for Live Web Casting<br><br>
                                               
</center></b></font>
<div id="reg">
<?php if(mysql_query($query)){
	print '<h1>Successfully Registered</h1>';
	$query='UPDATE student SET completed=1 where id="'.$_SESSION['user_Id'].'";';
	mysql_query($query);
	session_destroy();
	}
else 
print '<h2>Already Registered<h2><br><h3>Go <a href="index.php">back</a> and Try Again</h3>';
?>
</div>
<center><div class="footer">Copyright &copy 2013 RGUKT, All Rights Reserved</div>
</div></center>
</body></html>

