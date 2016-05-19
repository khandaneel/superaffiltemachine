<div class="clear"></div>
<div class="minbutton_active"><img src="images/min.png" height="19" width="24" title="Show Menu" class="rotedimg" /></div>
<div class="dashborad_left">

 <div class="left_dashboard">

    	<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a class="active" ><i ><img src="images/dash_icon.png" /></i>&nbsp;&nbsp;Dashboard</a><div class="minbutton" ><img src="images/min.png" height="19" width="24" title="Hide Menu" /></div>
                        </li>
                        <li style="height:45px;">
                           <a href="profile_upgrade.php"> <div class="pro_file_name">
                           <?php
						    $profile=mysql_query("select * from tbl_user_registation where email='".$_SESSION['email']."'");
							$pro_res=mysql_fetch_assoc($profile);
							 ?>
                <span class="pro_image"><?php $string=strtoupper($pro_res['fname']); echo $string[0]; ?></span>
                    <span class="pro_name1"><span>Hello,</span>&nbsp;<span style="color:#e9a856;"><?php echo ucfirst($pro_res['fname']); ?></span> </span>
                </div></a></li>
                <?php if(isset($_SESSION['id'])){ ?>
                <li style="height:45px;">
                 <?php
        $res11=mysql_query("select * from tbl_offerword where session_id='".$_SESSION['id']."'");
        $res11_1=mysql_fetch_assoc($res11);
        ?>
                            <a href="#" style="color:#448a44;font-weight: bold;text-transform: capitalize;padding-top: 7px;">
                            <span style="display:block;float:left;margin-top:3px;"><i><img src="images/curent.jpg" class="marfoimg" style="margin-top:0px;"/></i></span>
                            <span style="display:block;float:left;margin-top:7px;">&nbsp;&nbsp;<?php echo $res11_1['offerword'];?></span>
                            
                            
                            </a>
                        </li>
                <?php } ?>
                        <li class="changeplz">
                           <a> <div class="abc"><i><img src="images/web_icon.png"  /></i>&nbsp;&nbsp; Website<span class="fa arrow"><img class="changeimgn" src="images/d_icon.png" /></span></div></a>
                          <div class="panel_1" >
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="websitelist.php">Website List</a>
                                </li>
                                <li>
                                    <a href="websitelist.php">Pending Website</a>
                                </li>
                            </ul>
                            </div> 
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
                            <a href="#"><i><img src="images/domain_icon.png" class="marfoimg" /></i>&nbsp;&nbsp; Domain Book</a>
                        </li> -->
                        <li>
                            <a href="activity.php"><i><img src="images/activity_icon.png" class="marfoimg" /></i>&nbsp;&nbsp; Activity</a>
                        </li>
                     
                        <!-- <li>
                            <a href="quick_start.php"><div class="abc"><i><img src="images/quick_icon.png" class="marfoimg" /></i>&nbsp;&nbsp; Quick Start Guide</div></a>
                           
                        </li> -->
                        <li>
                            <a href="video.php"><div class="abc"><i><img src="images/vedio_icon.png" class="marfoimg" /></i>&nbsp;&nbsp; Video Tutorial</div></a>
                             
                      
                        </li>
                        <li>
                            <a href="wp_admin.php"><div class="abc"><i><img src="images/wp_ion.png" class="marfoimg" /></i>&nbsp;&nbsp;  Wordpress Access</div></a>
                             
                      
                        </li>
                       
                        <li>
                            <a href="connect.php"><div class="abc"><i><img src="images/coonect.png" class="marfoimg" /></i>&nbsp;&nbsp; Connect</div></a>
                             
                      
                        </li>
                        <li>
                            <a href="message.php"><div class="abc"><i><img src="images/activity_icon3.png" class="marfoimg" /></i>&nbsp;&nbsp; Message</div></a>
                             
                      
                        </li>
                        <li>
                            <a href="signout.php"><div class="abc"><i><img src="images/signout_icon.png"  class="marfoimg" /></i>&nbsp;&nbsp; Sign Out</div></a>
                             
                         
                        </li>
                    </ul>
                </div>
             
            </div>
        
 </div>
</div>