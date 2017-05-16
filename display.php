<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<meta name="Generator" content="EditPlus">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">

<title>Registration Form</title>

<link rel="stylesheet" href="css/login-form.css" media="screen">
<SCRIPT>
function validate_phnum(id,error_dis)
{
	var che_name = /^[0-9]*$/;
	name=document.getElementById(id).value;
	if(name.match(che_name)==null){
		document.getElementById(error_dis).innerHTML="<font color='red'>Invalid Phone Number</font>";
		return false;
	}
	else if(name.length==""){
		document.getElementById(error_dis).innerHTML="<font color='red'>Enter Phone Number </font>";
		return false;
		}
	else if(name.length!=10)
	{
		document.getElementById(error_dis).innerHTML="<font color='red'>10 digits only</font>";
		return false;
	}
	else
        {
		document.getElementById(error_dis).innerHTML="";	
        return true;
	}
}
function validate_uname(id,error_dis)
{
	
	var name = document.getElementById(id).value;
        var che_name = /^[a-zA-Z\" "]*$/ ;
        if(name.match(che_name)==null)
        {
        document.getElementById(error_dis).innerHTML="<font color='red'>Enter valid name</font>";
        return false;
        }
        else if(name.length==0)
        {
        document.getElementById(error_dis).innerHTML="<font color='red'>Please Enter Name</font>";
        return false;
        }
        
		else
        {
        document.getElementById(error_dis).innerHTML="";
        return true;
        }

}
function validate_email(id,error_dis)
{

	var name = document.getElementById(id).value;
	var che_name = /^([a-zA-Z][a-zA-Z0-9\_\-\.]*\@[a-zA-Z0-9\-]*\.[a-zA-Z]{2,4})?$/i ;
	if(name=="")
	{
		document.getElementById(error_dis).innerHTML="<font color='red'>Please Enter Email</font>";
		return false;
	}
	else if(name.match(che_name)==null)
	{
		document.getElementById(error_dis).innerHTML="<font color='red'>Enter Valid Email</font>";
		return false;
	}
	else
	{
		document.getElementById(error_dis).innerHTML="";
		return true;
	}
}
	
function submit(){
	id=document.getElementById("id").value;
	name=document.getElementById("name").value;
	clas=document.getElementById("class").value;
	dob=document.getElementById("dob").value;
	mobile=document.getElementById("phn_num").value;
	email=document.getElementById("email_id").value;
	experience=document.getElementById("already").value;
	login_check=new XMLHttpRequest();
	{
	document.getElementById("reg").submit();	
	}
	}
</SCRIPT>
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
            #form input[type="button"]{
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
		margin-top:40px;
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
	
	<table border=0 >
	<COLGROUP><COL WIDTH=200><COL WIDTH=50><COL WIDTH=200><COL WIDTH=50></COLGROUP>
	<form id="reg" action="submit.php" method="POST">
		<div id="notice1"></div><div id="notice2"></div><div id="notice3"></div><div id="notice4"></div><br>
	<tr ><td >ID Number:</td><td colspan="3"><?php print '<input type="text" id="id" name="id"readonly="true" value="'.$_SESSION['user_Id'].'"/>';?></td></tr><tr></tr>
	<tr ><td >Name Of Student:</td><td colspan="3"><input type="text" id="uname" name="uname" onblur="validate_uname('uname','notice3')" ></td></tr><tr></tr>
	<tr><td>Class :</td><td colspan="3"><select id="class" name="class"><?for($i=1;$i<=14;$i++)print "<option>W".$i."</option>";?><option>E1</option></select></td></tr>
	<tr ><td >Date Of Birth:</td><td colspan="3"><input type="text" id="dob" name="dob" />&nbsp;Ex:YYYY-MM-DD</td></tr><tr></tr>
	<tr ><td >Mobile Number:</td><td colspan="3"><input required type="text" id="phn_num" name="phn_num" onblur="validate_phnum('phn_num','notice1')"/></td></tr><tr></tr>
		<tr><td>Email Id :</td><td colspan="3"><input type="text" id="email_id" name="email_id" onblur="validate_email('email_id','notice2')"></td></tr>
		<tr ><td colspan=1 >Past Experience:</td><td><select name="already" id="already"><option value="0">None</option><option value="1">Once</option><option value="2">Twice</option><option value="3">Thrice</option></select></td></tr><tr></tr>
		<tr><td><br></td></tr>
		<tr><td colspan="3"><center><input type="button" value="Submit" onclick="submit()"></center></td></tr>
		</form>
	</table>
	<br>

</div>
<center><div class="footerb">Copyright &copy 2013 RGUKT, All Rights Reserved</div>
</div></center>
</body></html>
