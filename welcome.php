<?php ob_start(); include('config.php'); ?>
<script>
function abc()
{
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var cusername=document.getElementById('cusername').value;
	var cpassword=document.getElementById('cpassword').value;
	var srevreurl=document.getElementById('srevreurl').value;
	var hostingurl=document.getElementById('hostingurl').value;
	var susername=document.getElementById('susername').value;
	var spass=document.getElementById('spass').value;

	if(hostingurl=="")
	{
		$(".hostingurlin").css("background-color","red");
		return false;
	}
	if(susername=="")
	{
		$(".susernamein").css("background-color","red");
		return false;
	}
	if(spass=="")
	{
		$(".spassin").css("background-color","red");
		return false;
	}
    window.location.href = "welcome_submit.php?name=" + name + "&email=" + email+ "&cusername=" + cusername+ "&cpassword=" + cpassword+ "&srevreurl=" + srevreurl+ "&hostingurl=" + hostingurl+ "&susername=" + susername+ "&spass=" + spass;


	
}
</script>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="eng" lang="eng">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Super Affiliate Machine(SAM)</title>

<link rel="stylesheet" href="css/style_login.css" type="text/css" media="screen"/>
<style>
body{overflow:hidden;}
.conianerne{width:735px; margin:120px auto 0px; height:450px;}
.vedio{width:100%;height:380px;z-index:20000;}
.far-clouds{z-index:-2000;}
.near-clouds{z-index:-2000;}
.wel_down{width:160px;margin:10px auto;}

.vedio_icon{background:rgba(255,255,255,1);width:10px;height:10px;border-radius:50px;margin-right:40px;float:left;cursor:pointer;}
.vedio_icon:hover{background:#FF9900;}

.bag{background:url(images/loginpage.png) no-repeat;width:330px;height:330px; margin:auto; text-align:center; z-index:20000;}
	
.signup{color:#0e7ea8;font-size:13px;text-align:center;line-height:5px;font-family:Arial, Helvetica, sans-serif;margin-left:-7px;cursor:pointer;}
.personal{line-height:1px;font-size:12px;font-weight:bold;}

#msform {width: 735px; position: relative; background:#99CC00;}
.video1 {height:400px; width:735px;position: absolute;}
#msform .video1:not(:first-of-type) {display: none;}
.notclik,.next,.previous{height:10px;  width:10px; text-align:center; float:left; margin-left:15px; border-radius:12px; background:#FFF; cursor:pointer;}
.next:hover,.previous:hover,.notclik:hover{background:#F90; }
.activnewv1{background:#F90;}
.btn_cpanel {  background:url(images/confirm.png);width:89px;height:36px;border:none;cursor:pointer; margin-right:14px;}
.btn_submit {  background:url(images/submit.png);width:89px;height:36px;border:none;cursor:pointer; margin:6px 14px 0px 0px;}

	

</style>
       
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/jquery.spritely-0.6.js" type="text/javascript"></script>
   
   
</head>
<body>
<div class="container">
<div id="far-clouds" class="far-clouds stage"></div>
<div id="near-clouds" class="near-clouds stage"></div>
    
  
            
            
       


<div class="conianerne">


<div id="msform">
 
 
 
<div class="video1" >


   
	<div class="vedio" >
<img src="images/welcome_vedio.png" height="380" width="734" />
 
 </div>
    
   
<div class="notclik activnewv1" style="margin-left:326px;" ></div> <div  class="next" ></div> <div  class="next" ></div> <div  class="next" ></div>

        
        
        
	</div>
	
    <!-- video 1 end -->
    
    
    
    
    <div class="video1 videonew" >


  <div class="bag" >

	<div class="login_top">
    	<img src="images/logo_1.png" />
          <?php 
	$fdata=mysql_query("select * from tbl_user_registation where email='".$_SESSION['email']."'");
	$f_data=mysql_fetch_assoc($fdata);
	
	?>
        <p class="personal">PERSONAL DETAILS</p>
    </div>
		
    	<div class="login_details">
        <br />
        	<input type="text" name="name" class="inp_login namein" placeholder="Name" required id="name" value="<?php echo $f_data['fname']; ?>"/>
            <br /><br />
            <input type="email" name="email" class="inp_login emailin" placeholder="Email" required form="frm3" id="email" value="<?php echo $f_data['email']; ?>"/>
             <br /><br />
             
             <div calss="take_in"><input type="button" value="" name="login" class="btn_cpanel nexttt"></div>
             
        </div>
       
        <div class="down_logn" style="padding-top:10px;">
        	<p class="signup nextttnn" style="padding-top: 6px;">Skip?</p>
            
        </div>
    

</div>
<div class="previous" style="margin-left:326px;" ></div> <div  class="notclik activnewv1" ></div> <div  class="next" ></div> <div  class="next" ></div>


        
        
        
	</div>
	
    <!-- video 2 end -->
    
    
    
    <div class="video1 videone2" >


<div class="bag"   >

	<div class="login_top">
    	<img src="images/logo_1.png" />
        <p class="personal">CPANEL DETAILS</p>
    </div>
		
         <?php 
	$fdata=mysql_query("select * from tbl_wel_cpanel where email='".$_SESSION['email']."'");
	$f_data=mysql_fetch_assoc($fdata);
	
	?>
    
    	<div class="login_details">
       
        	<input type="text" name="cpanel_username" class="inp_login cusernamein" placeholder="Username" required id="cusername" value="<?php echo $f_data['username']; ?>"/>
            <br /><br />
            <input type="password" name="cpanel_password" class="inp_login cpasswordin" placeholder="Password" required id="cpassword" value="<?php echo $f_data['password']; ?>"/>
             <br /><br />
             <input type="text" name="server_url" class="inp_login srevreurlin" placeholder="Hostname" required id="srevreurl" value="<?php echo $f_data['hostname']; ?>"/>
             <br />
             
             <div calss="take_in"><input type="button" value="" name="login" class="btn_cpanel nexttt2" style="margin-top:10px;"></div>
             
        </div>
       
        <div class="down_logn">
        	<p class="signup nexttt2nn" style="padding-top:9px;">Skip?</p>
            
        </div>
    

</div>


<div class="previous" style="margin-left:326px;" ></div> <div  class="previous" ></div> <div  class="notclik activnewv1" ></div> <div  class="next" ></div>

        
        
        
	</div>
	
    <!-- video 3 end -->
    
    
    
    <div class="video1" >


<div class="bag">

	<div class="login_top">
    	<img src="images/logo_1.png" />
        <p class="personal">SERVER DETAILS</p>
    </div>
		 <?php 
	$fdata=mysql_query("select * from tbl_wel_server where email='".$_SESSION['email']."'");
	$f_data=mysql_fetch_assoc($fdata);
	
	?>
    	<div class="login_details">
       <form method="post" action="" >
        	<input type="text" name="hostname" class="inp_login hostingurlin" placeholder="Server hosting URL" required id="hostingurl" value="<?php echo $f_data['url']; ?>" style="margin-top:2px;"/>
            <br /><br />
            <input type="text" name="server_username" class="inp_login susernamein" placeholder="Username" required id="susername" value="<?php echo $f_data['username']; ?>"/>
             <br /><br />
             <input type="password" name="server_password" class="inp_login spassin" placeholder="Password" required id="spass" value="<?php echo $f_data['password']; ?>"/>
             <br />
                 
             
             <div calss="take_in"><input type="button" value=""  name="submitdetails" class="btn_submit" onClick="abc();" ></div>
             </form>
        </div>
      
      <div class="down_logn" style="margin-top:10px;">
        	<p class="signup"><br /><a href="https://godaddy.com/hosting/web-hosting.aspx?isc=goflin01&ci=9009" style="text-decoration:none;" target="_blank">Don't have Hosting account?</a><br /><br /><br /><br /><br /><br /><br /><br /><a href="home.php" style="text-decoration:none;">Skip</a></p>
            
        </div>
        
        
    

</div>

<div class="previous" style="margin-left:326px;" ></div> <div  class="previous" ></div> <div  class="previous" ></div> <div  class="notclik activnewv1" ></div>

        
        
        
	</div>
	
    <!-- video 4 end -->
    
    
    
    </div>
    
    </div>
    

	
    </div>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

<script>
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($(".video1")).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});


$(".nexttt").click(function(){
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	if(name=="")
	{
		$(".namein").css("background-color","red");
		return false;
	}
	if(email=="")
	{
		$(".emailin").css("background-color","red");
		return false;
	}
	if(animating) return false;
	animating = true;
	
	current_fs = $('.videonew');
	next_fs = $('.videonew').next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($(".video1")).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".nextttnn").click(function(){
	
	if(animating) return false;
	animating = true;
	
	current_fs = $('.videonew');
	next_fs = $('.videonew').next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($(".video1")).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".nexttt2").click(function(){
	var cusername=document.getElementById('cusername').value;
	var cpassword=document.getElementById('cpassword').value;
	var srevreurl=document.getElementById('srevreurl').value;
	if(cusername=="")
	{
		$(".cusernamein").css("background-color","red");
		return false;
	}
	if(cpassword=="")
	{
		$(".cpasswordin").css("background-color","red");
		return false;
	}
	if(srevreurl=="")
	{
		$(".srevreurlin").css("background-color","red");
		return false;
	}
	if(animating) return false;
	animating = true;
	
	current_fs = $('.videone2');
	next_fs = $('.videone2').next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($(".video1")).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".nexttt2nn").click(function(){
	
	if(animating) return false;
	animating = true;
	
	current_fs = $('.videone2');
	next_fs = $('.videone2').next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($(".video1")).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});



$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("video1")).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});


</script>
<script type="text/javascript" src="js/main1.js"></script>
<script type="text/javascript" src="js/jquery.path.js"></script>
</body>
</html>