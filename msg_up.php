<?php ob_start(); $display="none";  include('header.php'); $email=$_SESSION['email']; $id=$_GET['id'];?>
   <?php include('slidemenu.php'); ?>
   <?php
   if(isset($_POST['capnel_update']))
   {
	   $cpanelurl=$_POST['cpanelurl'];
	   $cpanelusername=$_POST['cpanelusername'];
	   $cpanelpassword=$_POST['cpanelpassword'];
	   $sesion_id=$_POST['sesion_id'];
	   
	  $res= mysql_query("UPDATE tbl_c_s_record SET cpanelurl='$cpanelurl', cpanelusername='$cpanelusername',cpanelpassword='$cpanelpassword' WHERE session_id='$sesion_id' ");
	  if($res)
	  {
		  header("location:msg_update.php?msg=suc");
	  }
	   
	   
   }
   ?>
   <div class="niche_right" style="margin-left:0px; width:100%;" >
    
<div class="wel_come">
<div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br /><strong>Update Your Credentials</strong></span>
    </div>
     
    <div class="clear" style="height:10px;"></div>

 <div id="msform" style="margin-top:20px;">
 <div style="width:800px;padding:10px;background:#f0f0f0;margin:30px 0px 0px 10px;text-align:center;font-size:20px;">Successfully Updated
 <br>
 <p style="margin-top:20px;font-size:15px;text-align:center;"><a href="websitelist.php"> Check Other Messages</a></p>
 </div>
 <br /><br />

 
 
 
    </div>
    
</div>
    
</div>