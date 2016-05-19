<?php $display="block"; include('header.php'); $email=$_SESSION['email'];
if($_POST['update_basic_profile'])
{
	  $name=$_POST['name'];
	 
	 $password=$_POST['password'];
	
		$res=mysql_query("UPDATE tbl_user_registation SET fname='$name',password='$password' where email='$email'");
		
		if($res)
		{
		echo "<script>";
	echo "alert('Updated sucessfully')";
	echo "</script>";
	echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='profile_upgrade.php' </SCRIPT>";
		}
		else
		{
			echo "<script>";
	echo "alert('Not Updated,please check again')";
	echo "</script>";
	echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='profile_upgrade.php' </SCRIPT>";
		}
}




 
 
 if($_POST['update_cpanel'])
{
	 $cpaneluser=$_POST['cpaneluser'];
	 $password=$_POST['password'];
	  $cpanelhost=$_POST['cpanelhost'];
	  
	   $selet=mysql_query("select * from tbl_wel_cpanel where email='$email'");
	 if(mysql_num_rows($selet)==0)
	 {
		$a=mysql_query("INSERT INTO `tbl_wel_cpanel` (`username`, `password`, `email`, `hostname`) VALUES ('$cpaneluser', '$password', '$email', '$cpanelhost')");
		if($a)
		{
		echo "<script>";
	echo "alert('Inserted Sucessfully')";
	echo "</script>";
	echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='profile_upgrade.php' </SCRIPT>";
		}
	 }
	 else
	 {
	 
		$res=mysql_query("UPDATE tbl_wel_cpanel SET username='$cpaneluser',password='$password',hostname='$cpanelhost' where email='$email'");
		if($res)
		{
		echo "<script>";
	echo "alert('Updated sucessfully')";
	echo "</script>";
	echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='profile_upgrade.php' </SCRIPT>";
		}
		else
		{
			echo "<script>";
	echo "alert('Not Updated,please check again')";
	echo "</script>";
	echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='profile_upgrade.php' </SCRIPT>";
		}
		}
}




 
 if($_POST['update_server'])
{
	 $username_server=$_POST['username_server'];
	 $password=$_POST['password'];
	 $url=$_POST['url'];
	  $selet=mysql_query("select * from tbl_wel_server where email='$email'");
	 
		if(mysql_num_rows($selet)==0)
	 {
	 
	 $a=mysql_query("INSERT INTO `tbl_wel_server` (`url`, `username`, `password`, `email`) VALUES ('$url', '$username_server', '$password', '$email')");
	 
	 if($a)
		{
		echo "<script>";
	echo "alert('Inserted Sucessfully')";
	echo "</script>";
	echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='profile_upgrade.php' </SCRIPT>";
		}
	 
	 
	 }
	 else{
		$res=mysql_query("UPDATE tbl_wel_server SET username='$username_server',password='$password',url='$url' where email='$email'");
		if($res)
		{
		echo "<script>";
	echo "alert('Updated sucessfully')";
	echo "</script>";
	echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='profile_upgrade.php' </SCRIPT>";
		}
		else
		{
			echo "<script>";
	echo "alert('Not Updated,please check again')";
	echo "</script>";
	echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='profile_upgrade.php' </SCRIPT>";
		}
		}
}



 if($_POST['licence_btn'])
{
	  $mem_licence=$_POST['licence'];
	
		$res=mysql_query("UPDATE tbl_user_registation SET membership='$mem_licence' where email='$email'");
		
		
		if($res)
		{
		header("location:profile_upgrade.php?q=suces");
		}
		else
		{
			header("location:profile_upgrade.php?q=fail");
		}
		
}


 ?>
 
<style>
.pro1{width:300px;}
.personal_left{width:100px;}
.image_name{margin-left:54px;}
</style>

<?php include('slidemenu.php'); ?>

<div class="niche_right">
<?php include('describe_details.php'); ?>




 <div class="niche_names newniceee" style="height:600px;">
        <!--span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Upgrade your account</span>
    </div>
    <div class="clear"></div>
    <div class="niches">
       <?php 
						$res=mysql_query("select * from tbl_user_registation where email='$email'");
						$fetcheddata=mysql_fetch_assoc($res);
						?>
        <div class="personal_profile">
               
               <div style="margin-left:160px;">
               	
               
               
               
               </div>
                    </div>
        
        
    </div-->
    
    <div class="clear"></div>
   <?php
   if($_GET['q']=='suces')
   {
   ?>
   <div class="upgrde licence_upgrade">
   		Your licence hasbeen modified
   </div>
   <?php } else if($_GET['q']=='fail') { ?>
   <div class="upgrde licence_upgrade">
   		Not updated,Try one more time
   </div>
   <?php } ?>
   <br />
   
   <div class="upgrde" style="background:#fbb35a;height:41px;">
    
    <div>
    <div class="mem_cion"><img src="images/member_ship.png" /></div>
    
    <p class="mem" style="color:#fff;">Membership&nbsp;:&nbsp;</p>
    
    <div class="dis_mem" style="margin-top:1px;">
    
    	<p></p>
    </div>
    
   <div id="upgd"style="float:right; height:30px; width:100px; background:#006699; border-radius:2px; margin:5px 10px 0px 10px; color:#FFF; cursor:pointer; font-weight:bold; text-align:center; line-height:30px;">Upgrade Now</div>
    
  </div>
  <div class="clear"></div>
    
   
    	
    </div>
    
    <div class="upgeade_slide">
    <!--form method="post" action="" -->
   		
        <div class="whole_licence">
        	
            <div class="whole_licence_left">
            
            	
            
            	<div class="radio_licence">
                
                </div>
                
                <div class="radio_licence">
                <?php
				
				if($pro_res1['membership']=='Advance')
				{
				?>
                		<input type="radio" name="licence" value="Advance" checked="checked" />Lite
                        <?php
				}
				else{
				?>
                <input type="radio" name="licence" value="Advance" />Lite
                	 <?php
				}
				?>
                </div>
                
                <div class="radio_licence">
                 <?php
				if($pro_res1['membership']=='Unlimited Agency')
				{
				?>
                		<input type="radio" name="licence" value="Unlimited Agency" checked="checked"/>Unlimited
                	  <?php
				}
				else{
				?>
                <input type="radio" name="licence" value="Unlimited Agency" />Unlimited
                 <?php
				}
				?>
                </div>
            
            </div>
            
            <div class="whole_licence_right" style="width:296px;margin-left:49px;margin-top:29px;">
            <?php
			$member_ship=$pro_res1['membership'];
            if($member_ship=="Basic")
            {
				?><div class="licenec_data d4">
            
             <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Domains-<span style="color:#069;">1</span></span>
             <div class="clear"></div>
             <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Price-<span style="color:#069;">$27</span></span>
            
            </div>
            
          <?php  }
		  else  if($member_ship=="Advance")
            {
            ?>
            <div class="licenec_data d5" >
            <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Domains-<span style="color:#069;">3</span></span>
             <div class="clear"></div>
             <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Price-<span style="color:#069;">$27</span></span>
            
            </div>
            <?php } else if($member_ship=="Unlimited Agency") { ?>
            <div class="licenec_data d6" >
            <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Domains-<span style="color:#069;">Unlimited</span></span>
             <div class="clear"></div>
             <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Price-<span style="color:#069;">$47</span></span>
            </div>
            <?php } ?>
            
            <div class="licenec_data d1">
            
             <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Domains-<span style="color:#069;">1</span></span>
             <div class="clear"></div>
             <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Price-<span style="color:#069;">$27</span></span>
            
            </div>
            
             <div class="licenec_data d2">
            <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Domains-<span style="color:#069;">3</span></span>
             <div class="clear"></div>
             <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Price-<span style="color:#069;">$27</span></span>
            
            </div>
            
             <div class="licenec_data d3">
            <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Domains-<span style="color:#069;">Unlimited</span></span>
             <div class="clear"></div>
             <span class="pro_i"><img src="images/orange_bullet.jpg" /></span><span class="pro_d">Price-<span style="color:#069;">$47</span></span>
            </div>
            
            </div>
            
            
            
            
        </div>
        
        <div class="clear"></div>
    <a href="http://superaffiliatemachine.com/" target="_blank"><input type="submit" value="Upgrade Licence" name="licence_btn" class="update_licence" /></a>
    <br /> <br /> <br />
   <!-- </form> -->
   <div class="clear"></div>
   
   </div>
    
    
    
    <div class="clear"></div>
   
  <br />
  
  
     <div class="upgrde" style="background:#f1f1f1;">
    
    
    <div class="mem_cion"><img src="images/basic_icon.png" /></div>
    
    <p class="mem">Basic Profile</p>
    
   
    
   <div id="edit_basic" style="float:right;margin:5px 10px 0px 10px;cursor:pointer; "><img src="images/edit_update.png" /></div>
    
  <div class="clear"></div>
  
    
   
    	
    </div>
    <form method="post" action="">
    <div class="upgeade_slide1" style="display:block;">
    <?php
		$pro_res=mysql_query("select * from tbl_user_registation where email='$email'");
		$pro_res1=mysql_fetch_assoc($pro_res);
	?>
   		<div class="cpanel_pro">
        		<div class="cpanel_name">
                	<p>Name</p>
                </div>
                
                <div class="cpanel_inp">
                	<input type="text" name="name" value="<?php echo $pro_res1['fname']; ?>" class="edit_inp" />
                </div>
        </div>
        
        <div class="cpanel_pro">
        		<div class="cpanel_name">
                	<p>Email</p>
                </div>
                
                <div class="cpanel_inp">
                	<p style="color:#069;"><?php echo $pro_res1['email']; ?></p>
                </div>
        </div>
        
        <div class="cpanel_pro">
        		<div class="cpanel_name">
                	<p>Password</p>
                </div>
                
                <div class="cpanel_inp">
                	<input type="password" name="password" value="<?php echo $pro_res1['password']; ?>"  class="edit_inp" />
                </div>
        </div>
        
        <div class="cpanel_pro">
        		
        </div>
  		<input type="submit" value="Update" class="submit_basciprofile" name="update_basic_profile" />
    
   </div>
   
   </form>

    <div class="clear"></div>
   
  <br />
  
  
  
  
     <div class="upgrde" style="background:#f1f1f1;">
    
    
    <div class="mem_cion"><img src="images/cp.png" /></div>
    
    <p class="mem">cPanel Details</p>
    
   
    
   <div id="edit_cpanel" style="float:right; margin:5px 10px 0px 10px; color:#FFF; cursor:pointer; "><img src="images/edit_update.png" /></div>
    
  <div class="clear"></div>
  
    
   
    	
    </div>
    <form method="post" action="">
    
    <div class="upgeade_slide1" style="display:block;">
   		<br />
  		<?php
		$pro_res=mysql_query("select * from tbl_wel_cpanel where email='$email'");
		$pro_res1=mysql_fetch_assoc($pro_res);
	?>
        
        <div class="cpanel_pro">
        		<div class="cpanel_name">
                	<p>cPanel Url</p>
                </div>
                
                <div class="cpanel_inp">
                	<input type="text" name="cpanelhost" value="<?php echo $pro_res1['hostname']; ?>"  class="edit_inp1" />
                </div>
        </div>
        
        <div class="cpanel_pro">
        		<div class="cpanel_name">
                	<p>Username</p>
                </div>
                
                <div class="cpanel_inp">
                	<input type="text" name="cpaneluser" value="<?php echo $pro_res1['username']; ?>"  class="edit_inp1" />
                </div>
        </div>
        
        <div class="cpanel_pro" style="margin-top:20px;">
        		<div class="cpanel_name">
                	<p>Password</p>
                </div>
                
                <div class="cpanel_inp">
                	<input type="password" name="password" value="<?php echo $pro_res1['password']; ?>"  class="edit_inp1" />
                </div>
                
               
        </div>
     <input type="submit" value="Update" class="submit_basccpanel" name="update_cpanel" onclick="abc();" />
    
    
    
    </div>
    </form>
    
    
    
    
    <div class="clear"></div>
   
  <br />
  
  
  
  
     <div class="upgrde" style="background:#f1f1f1;">
    
    
    <div class="mem_cion"><img src="images/server_icon.png" /></div>
    
    <p class="mem">Server Details</p>
    
   
    
   <div id="update_server" style="float:right;  margin:5px 10px 0px 10px;cursor:pointer;"><img src="images/edit_update.png" /></div>
    
  <div class="clear"></div>
  
    
   
    	
    </div>
    
      <form method="post" action="">
    
    <div class="upgeade_slide1" style="display:block;">
   		<br />
        <?php
		$pro_res=mysql_query("select * from tbl_wel_server where email='$email'");
		$pro_res1=mysql_fetch_assoc($pro_res);
	?>
  		
        <div class="cpanel_pro">
        		<div class="cpanel_name">
                	<p>Server Url</p>
                </div>
                
                <div class="cpanel_inp">
                	<input type="text" name="url" value="<?php echo $pro_res1['url']; ?>"  class="edit_inp2" />
                </div>
        </div>
        
        <div class="cpanel_pro">
        		<div class="cpanel_name">
                	<p>Username</p>
                </div>
                
                <div class="cpanel_inp">
                	<input type="text" name="username_server" value="<?php echo $pro_res1['username']; ?>"  class="edit_inp2" />
                </div>
        </div>
        
        <div class="cpanel_pro" style="margin-top:20px;">
        		<div class="cpanel_name">
                	<p>Password</p>
                </div>
                
                <div class="cpanel_inp">
                	<input type="password" name="password" value="<?php echo $pro_res1['password']; ?>"  class="edit_inp2" />
                </div>
                
               
        </div>
    <input type="submit" value="Update" class="submit_baserver" name="update_server" />
    
    
    
    
    
    </div>
    
    
    </form>
    
   </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   </div>



<?php include('footer.php');