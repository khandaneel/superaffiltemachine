<?php $page="1"; include("config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAM</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<style>
body{margin:0px;padding:0px;}
.loginarea{height:100%; width:100%;background:rgba(0,0,0,0.93); z-index:2000; position:fixed;}

.main_new {width:400px;margin:80px auto;background:#DDD9D9;padding-bottom:20px;border-top:3px solid #5cb85c; border-radius:3px; box-shadow:0px 0px 6px #333333;  z-index:3000;}
.logo_new {height:65px; background:#fff; padding-top:10px;}
.inp_box_new {margin-left:40px;}
.inputtxt_new,.submit_new {
height: 35px;
width: 85%;
border: 0;
background: #faf6f6;
border-bottom: 0px dashed #000;
-webkit-transition: all 300ms linear;
-moz-transition: all 300ms linear;
-o-transition: all 300ms linear;
-ms-transition: all 300ms linear;
transition: all 300ms linear;
padding-left: 10px; border-radius:2px;
}
.submit_new 
{height: 35px;
width: 87%;
border: 0;
background:#194673;color:#fff;cursor:pointer; font-size:14px;}
.submit_new:hover{background:#2260b2;}
.error_main{width:300px;padding-bottom:2px;border-left:3px solid #428bca;background:#fff;margin-top:10px;}

</style>
</head>

<body>
<div class="loginarea">
 <div class="main_new">

<div class="logo_new ">
<center><img src="images/logo.png" width="120" height="50" /></center>
</div>
<div class="inp_box_new ">
<?php if(isset($_GET['sucess']))
{?>
<div class="error_index">
	<div class="error_main">
    	<p style="margin-left:10px;font-size:14px;font-weight:bold;color:#5cb85c;padding-top:10px;">Great</p>
        <p style="margin-left:10px;font-size:14px;color:#333;">The reset password link set to given mail</p>
    </div>
</div>
<?php } else if(isset($_GET['error'])) { ?>

<div class="error_index">
	<div class="error_main">
    	<p style="margin-left:10px;font-size:14px;font-weight:bold;color:#5cb85c;padding-top:10px;">Oop's</p>
        <p style="margin-left:10px;font-size:14px;color:#333;">We can't find a user with that e-mail address.</p>
    </div>
</div>
<?php } ?>



<form method="post" action="forget_action.php" enctype="multipart/form-data" >
<br />
<input type="email" name="email"  class="inputtxt_new" required="required" placeholder="example@gmail.com">

<br /><br />
<div calss="take_in"><input type="submit" value="Reset Your Password" name="password" class="submit_new"/></div>


</form>

</div>

</div>
 
 
 
 </div>
 
    
</body>
</html>
