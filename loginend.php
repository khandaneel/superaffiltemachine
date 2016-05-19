<?php ob_start();  require_once('config.php');
if(isset($_SESSION['email']))
{
	header("location:home.php");
}
ob_end_flush();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAM</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<style>
body{margin:0px;padding:0px;}
.loginarea{height:100%; width:100%;background:rgba(0,0,0,0.93); z-index:2000; position:fixed;}

.main_new {width:400px;margin:80px auto;background:#DDD9D9; padding-bottom:20px;border-top:3px solid #5cb85c; border-radius:3px; box-shadow:0px 0px 6px #333333;  z-index:3000;}
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

.forgettext{height:30px; background:rgba(225,225,225,0.2);margin-left:47px;line-height:30px;font-size:12px;margin-top:22px;word-spacing:1px;}
.forgettext a{color:#333;text-decoration:none;}
.forgettext a:hover{text-decoration:underline;}
.reme{float: left;color: #428bca;width: 236px;font-size: 13px;letter-spacing: 1px;}
.take_in{float:left;}
.sub_login{color:#fff;background:#428bca;width:80px;height:30px;border:none;border-radius:3px;cursor:pointer;}
/* Popup Styles*/
.header_title{color:#333;}
.popupHeader {font-size:16px; text-transform: uppercase;}
.popupHeader {background:#F4F4F2; position:relative; padding:10px 20px; border-bottom:1px solid #DDD; font-weight:bold;}
.popupHeader .modal_close {position: absolute; right: 0; top:0; padding:10px 15px; background:#E4E4E2; cursor: pointer; color:#aaa; font-size:16px;}

.popupBody {padding:20px;background:#fff;float:left;padding-bottom:50px;}
.user_registration{width:700px;margin:auto;}
.user_registration_left{width:317px;float:left;margin-left:-10px;}

.inputtxt{height:35px; width: 85%;border: 0;background:#faf6f6; border-bottom: 1px dashed #4589ce;-webkit-transition:all 300ms linear;-moz-transition:all 300ms linear;-o-transition:all 300ms linear;-ms-transition:all 300ms linear;transition:all 300ms linear;padding-left:10px;}
.inputtxt:focus{border:none;box-shadow:#4589ce 1px 1px 20px}
.txt_area{height:65px; width: 85%;border: 0;background:#faf6f6; border-bottom: 1px dashed #4589ce;-webkit-transition:all 300ms linear;-moz-transition:all 300ms linear;-o-transition:all 300ms linear;-ms-transition:all 300ms linear;transition:all 300ms linear;padding-left:10px;resize:none;}
.txt_area:focus{border:none;box-shadow:#4589ce 1px 1px 20px}
.applypie{z-index: 2;position: relative;}
.user_registration_right{width:317px;float:left;margin-left:50px;}
.user_registration fieldset {margin: 0px auto 20px auto;width: 100%;border: 1px solid #999;font-size:20px;color:#b65e14;}
.lag{margin-left:20px;}
.inp_na{color:#000;font-size:15px;}
.inp_main{width:300px;margin-top:5px;height:60px;margin-left:20px;margin-bottom:10px;}
.submit_btn_reg{width:63px;height:30px;margin:auto;}
.sub_reg{color:#fff;background:#405364;text-align:center;padding:8px 10px;border-radius:3px;border:none;cursor:pointer;}
#status{font-size:15px;}
.con{margin-top: 200px;width: 900px;margin-left: 60px;}
.confim_max{font-size: 25px;color: #508acf;width: 848px;text-align: center;}
.confirm1{font-size: 18px;color: #333;width: 739px;text-align: center;margin-left: 40px;margin-top: 20px;line-height:25px;}



.listraedy{width: 550px;height: 36px;margin: 20px auto;text-align: center;line-height: 31px;font-size: 18px;font-weight: bold;color: #333;word-spacing: 2px;}
/*::::::::::::::index :::::::::::::*/
.error_main{width:313px;padding-bottom:2px;border-left:3px solid #428bca;background:#fff;margin-top:10px;}
</style>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
</head>

<body>

<?php  if(isset($_COOKIE['email'])){ $emialvalue=$_COOKIE['email']; $passwordvalue=$_COOKIE['password'];} ?>
<div class="loginarea">
 <div class="main_new ">

<div class="logo_new ">
<center><img src="images/logo.png" width="120" height="50" /></center>
</div>
<div class="inp_box_new ">

<div class="error_index">
<div class="error_main">
    <p style="margin-left:10px;font-size:14px;font-weight:bold;color:#F90;padding-top:10px;">Great!</p>
        <p style="margin-left:10px;font-size:14px;color:#F90;">You are successfully Logout</p>
    </div>
</div>



<form method="post" action="login.php" enctype="multipart/form-data" >
<br />
<input type="email" name="email"  class="inputtxt_new" required="required" placeholder="example@gmail.com" value="<?php echo $emialvalue; ?>">
<br /><br />
<input type="password" name="password"  class="inputtxt_new" required="required" placeholder="******"  value="<?php echo $passwordvalue; ?>">
<br /><br />

<?php if(isset($_COOKIE['remember'])){ ?>
<div class="reme"><input type="checkbox" checked="checked" value="yes" name="remember"/>Remember Me</div>

<?php } else { ?>
<div class="reme"><input type="checkbox"  value="yes" name="remember"/>Remember Me</div>

<?php } ?>
<div calss="take_in"><input type="submit" value="Take Me In" name="login" class="sub_login"/></div>
</form>

</div>

<div class="forgettext"><a href="forget.php"><li style="list-style:circle; margin:0px; padding:0px; float:left;">  I forget my password</li></a> &nbsp;&nbsp;&nbsp; <a href="http://superaffiliatemachine.com/" style="color:#333;"> <li style="list-style:circle; margin-left:10px; padding:0px; float:left; color:#006699;"> Not a member yet? Sign up here</li></a></div>
</div>
 
 
 
 </div>
 <div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Submit Your Details</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
        	<form method="post" action="user_registration.php">
				<div class="user_registration">
                	<div class="user_registration_left">
                      <fieldset>
   						 <legend class="lag">User Account</legend>
                         <div class="inp_main">
                    	<span class="inp_na">First Name :</span>
						<input type="text" name="fname"  class="inputtxt applypie" required="required" placeholder="Enter your first name">	
                        </div>
                        
                         <div class="inp_main">
                    	<span class="inp_na">Last Name :</span>
						<input type="text" name="lname"  class="inputtxt applypie" required="required" placeholder="Enter your last name">	
                        </div>
                        
                        <div class="inp_main">
                    	<span class="inp_na">Email :</span>
						<input type="email" name="email"  id="username"  class="inputtxt applypie" required="required" placeholder="Enter valid email as(user name)">
                        <div id="status"></div>	
                        </div>
                        
                        <div class="inp_main">
                    	<span class="inp_na">password :</span>
						<input type="password" name="password" class="inputtxt applypie" required="required" placeholder="Enter password">	
                        </div>
                        
                        <div class="inp_main">
                    	<span class="inp_na">Mobile :</span>
						<input type="text" name="mobile" class="inputtxt applypie" required="required" placeholder="Enter mobile number">	
                        </div>
                        </fieldset>
                        
                         
                    </div>
                    
                    <div class="user_registration_right">
                    
                     <fieldset>
   						 <legend class="lag">Member Ship</legend>
                        
                    	     <div class="inp_main">
                             <br />
							<div><input type="radio" name="membership" value="singlewebsite" /><span class="inp_na">Single user</span> &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="membership" value="multiplewebsite" /><span class="inp_na">Multiple users</span>	</div>
                        
                        </div>
                        
                       
                        </fieldset>
                    
                    <fieldset style="height:260px;">
   						<legend class="lag">Location</legend>
                         <div class="inp_main">
                    	<span class="inp_na">City :</span>
						<input type="text" name="city" required="required" class="inputtxt applypie" placeholder="Enter your city">	
                        </div>
                        
                         <div class="inp_main">
                    	<span class="inp_na">Country :</span>
						<input type="text" name="country"   required="required" class="inputtxt applypie" placeholder="Enter your country">	
                        </div>
                        
                        <div class="inp_main">
                    	<span class="inp_na">Address :</span>
							<textarea name="address" class="txt_area" required="required"  placeholder="Enter your address"></textarea>	
                        </div>
                        
                        
                        </fieldset>
                    
                    </div>
                    
                    <div class="clear"></div>
                    
                    <div class="submit_btn_reg"><input type="submit" value="Sign Up" name="signup" class="sub_reg" /></div>
                </div>
			</form>
		</section>
	</div>
    
</body>
</html>
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

$("#support").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
$("#login").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});


	})
</script>