<?php ob_start(); $display="none";  include('header.php'); $email=$_SESSION['email']; $id=$_GET['id'];?>
   <?php include('slidemenu.php'); ?>
   <?php
   if(isset($_POST['capnel_update']))
   {
	   $cpanelurl=$_POST['cpanelurl'];
	   $cpanelusername=$_POST['cpanelusername'];
	   $cpanelpassword=$_POST['cpanelpassword'];
	   $sesion_id=$_POST['sesion_id'];
	   
	  $res= mysql_query("UPDATE tbl_c_s_record SET cpanelurl='$cpanelurl', cpanelusername='$cpanelusername',cpanelpassword='$cpanelpassword', admin_sett=0 WHERE session_id='$sesion_id' ");
	  if($res)
	  {
		  header("location:msg_up.php?msg=suc");
	  }
	   
	   
   }
   
   if(isset($_POST['hoting_update']))
   {
	   $hostingurl=$_POST['hostingurl'];
	   $hostingusername=$_POST['hostingusername'];
	   $hostingpassword=$_POST['hostingpassword'];
	   $domainuserid=$_POST['domainuserid'];
	   $domainpassword=$_POST['domainpassword'];
	   
	   $sesion_id=$_POST['sesion_id'];
	   
	  $res= mysql_query("UPDATE tbl_c_s_record SET hostingurl='$hostingurl', hostingusername='$hostingusername',hostingpassword='$hostingpassword', domainuserid='$domainuserid',domainpassword='$domainpassword', admin_sett=0 WHERE session_id='$sesion_id' ");
	  if($res)
	  {
		  header("location:msg_up.php?msg=suc");
	  }
	   
	   
   }
   ?>
   <div class="niche_right" style="margin-left:0px; width:100%;" >
    
<div class="wel_come">
<div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br /><strong>Update Your Credentials</strong></span>
    </div>
     <?php
	$domain_res=mysql_query("select * from tbl_c_s_record where session_id='$id' ");
	$domain_res1=mysql_fetch_assoc($domain_res);
	
	?>
    <div class="clear" style="height:10px;"></div>

 <div id="msform" style="margin-top:20px;">

 <br /><br />
<div class="cpnale_de">
<form method="post" action="">
    <p><b>cPanel Details</b></p>
    
    <div><input type="text" class="cpanel_update" name="cpanelurl" value="<?php echo $domain_res1['cpanelurl'];?>"></div>
    <br>
    <div><input type="text" class="cpanel_update" name="cpanelusername" value="<?php echo $domain_res1['cpanelusername'];?>"></div>
    <br>
    <div><input type="text" class="cpanel_update" name="cpanelpassword" value="<?php echo $domain_res1['cpanelpassword'];?>"></div>
    <input type="hidden" value="<?php echo $id;?>" name="sesion_id">
    <br>
    <div><input type="Submit" class="sub_cpanel" value="Update" name="capnel_update"></div>
   </form>
 </div>
 
 
 <div class="servre_de">
 <form method="post" action="">
  <p><b>Hosting Details</b></p>
    <input type="hidden" value="<?php echo $id;?>" name="sesion_id">
    <div><input type="text" class="cpanel_update" name="hostingurl" value="<?php echo $domain_res1['hostingurl'];?>"></div>
    <br>
    <div><input type="text" class="cpanel_update" name="hostingusername" value="<?php echo $domain_res1['hostingusername'];?>"></div>
    <br>
    <div><input type="text" class="cpanel_update" name="hostingpassword" value="<?php echo $domain_res1['hostingpassword'];?>"></div>
    <br>
    <p><b>Domain Login Details</b></p>
    
    <br>
    <div><input type="text" class="cpanel_update" name="domainuserid" value="<?php echo $domain_res1['domainuserid'];?>"></div>
    <br>
    <div><input type="text" class="cpanel_update" name="domainpassword" value="<?php echo $domain_res1['domainpassword'];?>"></div>
 <br>
 <div><input type="Submit" class="sub_cpanel" value="Update" name="hoting_update"></div>
</form> 
 </div>
    </div>
    
</div>
    
</div>