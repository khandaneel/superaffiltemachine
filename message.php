<?php ob_start(); $display="none";  include('header.php'); $email=$_SESSION['email']; ?>
   <?php include('slidemenu.php'); ?>
   <div class="niche_right" style="margin-left:0px; width:100%;" >
    <div class="notshowme" style="display:none;"></div>
<div class="wel_come">
<div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br /><strong>Message</strong></span>
    </div>
    <div class="clear" style="height:10px;"></div>

 <div id="msform" style="margin-top:20px;">
 <?php
 
 $msg_res=mysql_query("select * from tbl_message where email='$email' and status='1'");
 $i=1;
 while($msg_res1=mysql_fetch_assoc($msg_res))
 {?>
   <div class="msg_new mesge_right1">
    	<?php echo $msg_res1['message']; ?></p>
        	<img src="images/del.png" style="float:right;cursor:pointer;" title="Close" class="remove"/>
    <input type="hidden" value="<?php echo $msg_res1['id']; ?>" class="valremove"/>
    </div>
 <?php 
 $i++;}
 ?>
    
  
    
    
    </div>
    
</div>
    
</div>