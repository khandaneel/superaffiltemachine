<?php ob_start();  require_once('config.php');
if(isset($_SESSION['email']))
{
	header("location:home.php");
}
ob_end_flush();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="eng" lang="eng">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Super Affiliate Machine(SAM)</title>

        <link rel="stylesheet" href="css/style_login.css" type="text/css" media="screen"/>

       
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/jquery.spritely-0.6.js" type="text/javascript"></script>

   
</head>
<body>
<div class="container">
<div id="far-clouds" class="far-clouds stage"></div>
<div id="near-clouds" class="near-clouds stage"></div>
    
    <div style="height:600px;  width:335px; margin:auto;">
 <div id="ball1">
    
 
<div class="loginpageimg" style="display:block;">
<div class="bag">

	<div class="login_top">
    	<img src="images/login_logo.png" />
    </div>
		<form method="post" action="forget_action.php">
    	<div class="login_details" style="margin-top:52px;">
        <br />
        <?php if(isset($_GET['sucess']))
{?>
        <div class="error_msg" style="width:260px;margin-left:28px;margin-top:-20px;">
        <div class="eror_back">
            The reset password link set to given mail.
            </div>
        </div>
        <?php } else if(isset($_GET['error'])) { ?>
        
        <div class="error_msg" style="width:260px;margin-left:28px;margin-top:-20px;">
        <div class="eror_back">
            We can't find a user with that e-mail
            </div>
        </div><?php } ?>
        
        
        	<input type="email" name="email" class="inp_login" placeholder="example@gmail.com" id="v2" required="required"/>
             <br /><br />
             
             <div calss="take_in"><input type="submit" value="" name="login" class="reset_btn"></div>
             
        </div>
        </form>
        
        
        

</div></div>



 </div>
 </div>
 
 
 
    
       
       
       
        </div>
    

<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/main1.js"></script>
<script type="text/javascript" src="js/jquery.path.js"></script>
</body>
</html>