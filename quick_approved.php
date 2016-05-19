<?php ob_start(); $display="none";  include('header.php'); $email=$_SESSION['email']; $id=$_GET['id'];?>
   <?php include('slidemenu.php'); ?>
  <?php

   if(isset($_GET['idquick']))
   {
	   
	  $res= mysql_query("UPDATE tbl_c_s_record SET  admin_sett=10 WHERE session_id='".$_GET['idquick']."' ");
	 
	   
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
 <div style="width:800px;padding:10px;background:#f0f0f0;margin:30px 0px 0px 10px;text-align:center;font-size:20px;">Request Successfully Processed
 <br>
 <p style="margin-top:20px;font-size:15px;text-align:center;"><a href="websitelist.php"> Check Other Domain</a></p>
 </div>
 <br /><br />

 
 
 
    </div>
    
</div>
    
</div>