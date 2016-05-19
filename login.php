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
<?php  if(isset($_COOKIE['email'])){ $emialvalue=$_COOKIE['email']; $passwordvalue=$_COOKIE['password'];} ?>
	<div class="login_top">
    	<img src="images/login_logo.png" />
    </div>
		<form method="post" action="login1.php">
    	<div class="login_details">
        <div class="error_msg">
        
        </div>
        	<input type="email" name="email" class="inp_login" placeholder="example@gmail.com" id="v2" required="required" value="<?php echo $emialvalue; ?>"/>            <br /><br />
            <input type="password" name="password" class="inp_login" id="v3" placeholder="*****" required="required" value="<?php echo $passwordvalue; ?>"/>
             <br />  
                        <div class="reme" style="margin-top:23px;">
             <?php if(isset($_COOKIE['remember'])){ ?>
              <span style="display:block;float:left;margin-left:26px;"> <input type="checkbox" checked="checked" value="yes" name="remember"/></span>
            	<span style="display:block;float:left;margin-top:3px;" id="check">REMEMBER ME</span>
              <?php } else { ?>  
                
                 <span style="display:block;float:left;margin-left:26px;"> <input type="checkbox"  value="yes" name="remember"/></span>
            	<span style="display:block;float:left;margin-top:3px;" id="check">REMEMBER ME</span>
                <?php } ?>
                
                </div>
             <div calss="take_in" style="margin-top:10px;"><input type="submit" value="" name="login" class="btn"></div>
             
             <div style="margin-top:5px;">
             <a href="password_lost.php" style="text-decoration:none;font-size:10px;color:#333;font-weight:bold;">PASSWORD LOST?</a>
            
                </div>
        </div>
        </form>
        
        
       <div class="down_logn" style="margin-top:46px;">
        	<p class="signup"><a href="http://superaffiliatemachine.com/" style="color: #0e7ea8;text-decoration:none;">Not a Member Yet?</a></p>
        </div>
    

</div></div>



 </div>
 </div>
 
 
 
    
       
       
       
        </div>
    

<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/main1.js"></script>
<script type="text/javascript" src="js/jquery.path.js"></script>
</body>
</html>