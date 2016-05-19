<div class="clear"></div>
<div class="minbutton_active"><img src="images/min.png" height="19" width="24" title="Show Menu" class="rotedimg" /></div>
<div class="dashborad_left">

 <div class="left_dashboard">

    	<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                         <li>
                            <a class="active"  ><i ><img src="images/dash_icon.png" /></i>&nbsp;&nbsp;Build Website</a><div class="minbutton" ><img src="images/min.png" height="19" width="24" title="Hide Menu" /></div>
                        </li>
                        <li style="height:45px;">
                           <a href="profile_eidt.php"> <div class="pro_file_name">
                           <?php
						    $profile=mysql_query("select * from tbl_user_registation where email='".$_SESSION['email']."'");
							$pro_res=mysql_fetch_assoc($profile);
							 ?>
                <span class="pro_image"><?php $string=strtoupper($pro_res['fname']); echo $string[0]; ?></span>
                    <span class="pro_name1"><span>Hello,</span>&nbsp;<span style="color:#e9a856;"><?php echo ucfirst($pro_res['fname']); ?></span> </span>
                </div></a></li>
                        
                        
                        <!-- start here -->
                        
                        
                         <li>
                           <a> <div class="abc"><i><img src='images/wp1.png' height='15' weidth='15'></i>&nbsp;&nbsp; Pages<span class="fa arrow"><img src="images/d_icon.png" /></span></div></a>
                          <div class="panel_1" style="display:block;" >
                            <ul class="nav nav-second-level">
                            
                             <?php
			
$subpagekey=mysql_query("select * from wp_posts where session_id='".$seeid['session_id']."'  GROUP BY post_title ORDER BY ID ASC");

while($recwinkey=mysql_fetch_array($subpagekey))
{
	
	
	
 ?>
                                <li style="margin-left:-28px; font-size:14px;">
                                   <a   href="wp.php?menuactive=<?php echo $recwinkey['post_title'];?>" ><?php if($i==0)
                             {echo "<span class='$active'>&nbsp;&nbsp;Home Page</span>"; }else { echo  "<span class='$active'> &nbsp;&nbsp;".$recwinkey['post_title']."</span>"; }  ?></a>
                                </li>
                                                               
                               
                                           
                                            
                                             <?php $i++;} ?>
                                             
                                             <li style="margin-left:-20px; font-size:14px;">
                                   <a href="wp_edit.php" class="samcolor1">Add New</a>
                                </li>
                            </ul>
                            </div> 
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        
                        
                        
     
     
         
                    </ul>
                </div>
            
            </div>
        
 </div>
</div>