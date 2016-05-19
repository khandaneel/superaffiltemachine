<?php $display="block"; include('header.php'); $email=$_SESSION['email'];

if($_POST['update_profile'])
{
	echo $inpname=$_POST['inpname'];
	echo $fieldname=$_POST['fieldname'];
		$res=mysql_query("UPDATE tbl_user_registation SET $fieldname='$inpname' where email='$email'");
		if($res)
		{
		echo "<script>";
	echo "alert('Updated sucessfully')";
	echo "</script>";
	echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='profile_eidt.php' </SCRIPT>";
		}
		else
		{
			echo "<script>";
	echo "alert('Not Updated,please check again')";
	echo "</script>";
	echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='profile_eidt.php' </SCRIPT>";
		}
}



 ?>

<?php include('slidemenu.php'); ?>

<div class="niche_right">
<?php include('describe_details.php'); ?>

    <div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Basic profile</span>
    </div>
    <div class="clear"></div>
    <div class="niches">
       
        <div class="personal_profile">
                    <?php 
						$res=mysql_query("select * from tbl_user_registation where email='$email'");
						$fetcheddata=mysql_fetch_assoc($res);
						?>
                    	<div class="personal_profile_left">
                       <ul id="toggle-view">
                            <li>
                            <div class="pro1 pdiv">
                                <div class="personal_left">Fname</div>
                                <div class="personal_mid"><?php echo $fetcheddata['fname'];?></div>
                                <div class="personal_right">Edit</div>
                               
                               </div>
                               
                                <div class="panel_2">
                                    <div class="panel_data">
                                        <form method="post" action="">
                                        <p class="pro_name">Fname</p>
                                        <div style="margin-top:5px;margin-left:47px;">
                                        <input type="text" name="inpname" class="inputtxt" value="<?php echo $fetcheddata['fname'];?>" />
                                        <input type="hidden" name="fieldname" value="fname">
                                        </div>
                                        <div style="margin-top: 8px;margin-left: 190px;">
                                            <input type="submit" value="Update" class="sub_reg" name="update_profile"/>
                                        </div>
                                        
                                        </form>
                                      </div>
                                </div>
                             </li>
                             
                             <li>
                            <div class="pro1 pdiv">
                                <div class="personal_left">Lname</div>
                                <div class="personal_mid"><?php echo $fetcheddata['lname'];?></div>
                                <div class="personal_right">Edit</div>
                               
                               </div>
                               
                                <div class="panel_2">
                                    <div class="panel_data">
                                        <form method="post" action="">
                                       <p class="pro_name">Lname</p>
                                        <div style="margin-top:5px;margin-left:47px;">
                                        <input type="text" name="inpname" class="inputtxt" value="<?php echo $fetcheddata['lname'];?>"  />
                                        <input type="hidden" name="fieldname" value="lname">
                                        </div>
                                        <div style="margin-top: 8px;margin-left: 190px;">
                                            <input type="submit" value="Update" class="sub_reg" name="update_profile"/>
                                        </div>
                                        
                                        </form>
                                      </div>
                                </div>
                             </li>
                             
                              <li>
                            <div class="pro1 pdiv">
                                <div class="personal_left">Email</div>
                                <div class="personal_mid"><?php echo $fetcheddata['email'];?></div>
                                <div class="personal_right">Edit</div>
                               
                               </div>
                               
                                <div class="panel_2">
                                    <div class="panel_data">
                                        <form method="post" action="">
                                        <p class="pro_name">Email</p>
                                        <div style="margin-top:5px;margin-left:47px;">
                                        <input type="text" name="inpname" class="inputtxt" value="<?php echo $fetcheddata['email'];?>" readonly/>
                                        </div>
                                        <div>
                                            
                                        </div>
                                        
                                        </form>
                                      </div>
                                </div>
                             </li>
                             
                              
                             
                             <li>
                            <div class="pro1 pdiv">
                                <div class="personal_left">Password</div>
                                <div class="personal_mid">Change password</div>
                                <div class="personal_right">Edit</div>
                               
                               </div>
                               
                                <div class="panel_2">
                                    <div class="panel_data">
                                        <form method="post" action="">
                                        <p class="pro_name">New password</p>
                                        <div style="margin-top:5px;margin-left:47px;">
                                        <input type="text" name="newpassword" class="inputtxt" />
                                        </div>
                                        
                                        <p class="pro_name">Confirmpassword</p>
                                        <div style="margin-top:5px;margin-left:47px;">
                                        <input type="text" name="inpname" class="inputtxt" />
                                        <input type="hidden" name="fieldname" value="password">
                                        </div>
                                                                                
                                      <div style="margin-top: 8px;margin-left: 190px;">
                                            <input type="submit" value="Update" class="sub_reg" name="update_profile"/>
                                        </div>
                                        
                                        </form>
                                      </div>
                                </div>
                             </li>
                             
                             </ul>
                        </div>
                        
                        <div class="personal_profile_mid">
                        
                        </div>
                        
                        <div class="personal_profile_right">
                        <ul id="toggle-view">
                            <li>
                            <div class="pro1 pdiv">
                                <div class="personal_left">Mobileno</div>
                                <div class="personal_mid"><?php echo $fetcheddata['mobileno'];?></div>
                                <div class="personal_right">Edit</div>
                               
                               </div>
                               
                                <div class="panel_2">
                                    <div class="panel_data">
                                        <form method="post" action="">
                                        <p class="pro_name">Mobileno</p>
                                        <div style="margin-top:5px;margin-left:47px;">
                                        <input type="text" name="inpname" class="inputtxt" value="<?php echo $fetcheddata['mobileno'];?>" />
                                        <input type="hidden" name="fieldname" value="mobileno">
                                        </div>
                                        <div style="margin-top: 8px;margin-left: 190px;">
                                            <input type="submit" value="Update" class="sub_reg" name="update_profile"/>
                                        </div>
                                        
                                        </form>
                                      </div>
                                </div>
                             </li>
                             
                              <li>
                            <div class="pro1 pdiv">
                                <div class="personal_left">Membership</div>
                                <div class="personal_mid"><?php echo $fetcheddata['membership'];?></div>
                                <div class="personal_right">Edit</div>
                               
                               </div>
                               
                                <div class="panel_2">
                                    <div class="panel_data">
                                        <form method="post" action="">
                                        <p class="pro_name">Membership</p>
                                        <div style="margin-top:5px;margin-left:47px;">
                                        <input type="text" name="inpname" class="inputtxt" value="<?php echo $fetcheddata['membership'];?>" />
                                        <input type="hidden" name="fieldname" value="membership">
                                        </div>
                                       <div style="margin-top: 8px;margin-left: 190px;">
                                            <input type="submit" value="Update" class="sub_reg" name="update_profile"/>
                                        </div>
                                        
                                        </form>
                                      </div>
                                </div>
                             </li>
                             
                              <li>
                            <div class="pro1 pdiv">
                                <div class="personal_left">City</div>
                                <div class="personal_mid"><?php echo $fetcheddata['city'];?></div>
                                <div class="personal_right">Edit</div>
                               
                               </div>
                               
                                <div class="panel_2">
                                    <div class="panel_data">
                                        <form method="post" action="">
                                        <p class="pro_name">City</p>
                                        <div style="margin-top:5px;margin-left:47px;">
                                        <input type="text" name="inpname" class="inputtxt" value="<?php echo $fetcheddata['city'];?>" />
                                        <input type="hidden" name="fieldname" value="city">
                                        </div>
                                        <div style="margin-top: 8px;margin-left: 190px;">
                                            <input type="submit" value="Update" class="sub_reg" name="update_profile"/>

                                        </div>
                                        
                                        </form>
                                      </div>
                                </div>
                             </li>
                             
                             <li>
                            <div class="pro1 pdiv">
                                <div class="personal_left">Address</div>
                                <div class="personal_mid"><?php echo $fetcheddata['address'];?></div>
                                <div class="personal_right">Edit</div>
                               
                               </div>
                               
                                <div class="panel_2">
                                    <div class="panel_data">
                                        <form method="post" action="">
                                        <p class="pro_name">Country</p>
                                        <div style="margin-left:47px;">
                                        <textarea name="inpname" class="txt_area" ><?php echo $fetcheddata['address'];?></textarea>
                                        
                                        <input type="hidden" name="fieldname" value="address">
                                        </div>
                                        <div style="margin-top: 8px;margin-left: 190px;">
                                            <input type="submit" value="Update" class="sub_reg" name="update_profile"/>
                                        </div>
                                        
                                        </form>
                                      </div>
                                </div>
                             </li>
                             
                             </ul>
                        </div>
                        
                    </div>
        
        
    </div>
    
    
</div>



<?php include('footer.php');

