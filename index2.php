<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
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
		margin-top:150px;
		display:block;
		width:700px;
		height:25px;
		border-radius:0px 0px 15px 15px;
		border:1px dotted grey;
		background-color:skyblue;
		}
        </style>


</head>
<script>
function login(){
	user=document.getElementById("username").value;
	password=document.getElementById("password").value;
	login_check=new XMLHttpRequest(); 
	login_check.onreadystatechange=function()
	{
	if (login_check.readyState==4 && login_check.status==200)
		{
		if(login_check.responseText==1){
			window.location.href="index.php";
			}
		else if(login_check.responseText==3){
			document.getElementById("notice").innerHTML="<blink><font color='red'>Already Completed</font></blink>";
			}
		else{

			document.getElementById("notice").innerHTML="<blink><font color='red'>Invalid Login!</font></blink>";
			}
		}
	}
	login_check.open("GET","check.php?user="+user+"&pass="+password,true);
	login_check.send();
}
</script>
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
<font color="#437C17" face="arial" size="3"><b><center>Registration for Live Web Casting<br>
                                               
</center></b></font>
<div style="margin:0 auto">
	<center><h3>Login Form</h3></center>
        <form action="" method="post">
            <div id="form">
                <table border="0" width="100%">
                    <tbody><tr><td height=20></td></tr>
			<tr>
                        <td align="right" width="60%"><label>Student ID :</label><label class="mandat"> *</label></td>
						<td colspan="2"><input required name="username" id="username" type="text"></td>
                    </tr>
                    <tr>
                        <td align="right"><label>Password :</label><label class="mandat"> *</label>
						</td><td colspan="2"><input required name="password" id="password" type="password"></td>
                    </tr>
					<tr>
						<td colspan="3"></td><td>
					</td></tr>
                    <tr>
                        <td colspan="3" align="center"><input value="Submit" id="submit" type="button" onclick="login()"></td>
                    </tr><tr><td height=20></td></tr>
                </tbody></table>
		
            </div>
        </form>
	<div id="notice"><br></div>
<center><div class="footer">
<div style="margin-top:5px;">Copyright &copy 2013 RGUKT, All Rights Reserved</div>
</div></center>
</body></html>
