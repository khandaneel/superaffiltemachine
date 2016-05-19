<div class="clear"></div>

<div class="clear"></div>
<div class="minbutton_active"><img src="images/min.png" height="19" width="24" title="Show Menu" class="rotedimg" /></div>
<div class="dashborad_left">

 <div class="left_dashboard">

        <div class="navbar-default sidebar" role="navigation">
        <div class="res_teknav" style="float:left; width:30px; background:#A0A2A3;  height:550px; text-align:center; margin-top:86px;">
        
      
                      
                   
               <a href="websitelist.php" title="Website"> <div class="abc"  style="height:42px; border-bottom:1px dotted #FFF; padding-top:12px; background:#f8f8f8; border-top:1px solid #e7e7e7;"><i><img src="images/web_icon.png"  /></i></div></a>
                                
                                       <a href="activity.php" title="Activity"> <div class="abc"  style="height:32px; border-bottom:1px dotted #FFF; padding-top:19px;"><i><img src="images/activity_icon1.png" /></i></div></a>
                                    
                                <a href="video.php" title="Video Tutorial"> <div class="abc"  style="height:32px; border-bottom:1px dotted #FFF; padding-top:19px;"><i><img src="images/vedio_icon1.png"  /></i></div></a>
                                 <a href="wp_admin.php" title="Access to Wordpress"> <div class="abc"  style="height:32px; border-bottom:1px dotted #FFF; padding-top:19px;"><i><img src="images/wp_ion1.png"  /></i></div></a>
                                  <a href="connect.php" title="Connect"> <div class="abc"  style="height:32px; border-bottom:1px dotted #FFF; padding-top:19px;"><i><img src="images/coonect1.png"  /></i></div></a>
                                   <a href="signout.php" title="Sign Out"> <div class="abc"  style="height:32px; border-bottom:1px dotted #FFF; padding-top:19px;"><i><img src="images/signout_icon1.png"  /></i></div></a>                   
                         
                             
                         
                       
                      
                 
        </div>
                <div class="sidebar-nav navbar-collapse resnav_n" >
                    <ul class="nav resnav_n" id="side-menu">
                         <li >
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
                        <?php if(isset($_SESSION['id'])){ ?>
                <li style="height:45px;width:214px;overflow:hidden">
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
                        
                        <!-- start here -->
                        
                        
                         <li class="changeplz">
                           <a> <div class="abc"><i><img src='images/wp1.png' height='15' weidth='15'></i>&nbsp;&nbsp; Pages<span class="fa arrow"><img class="changeimgn" src="images/d_icon.png" /></span></div></a>
                          <div class="panel_1" style="display:block;" >
                            <ul class="nav nav-second-level">
                            
                             <?php
            
$subpagekey=mysql_query("select * from wp_posts where session_id='".$seeid['session_id']."'  GROUP BY post_title ORDER BY ID ASC");

while($recwinkey=mysql_fetch_array($subpagekey))
{
    
    if($keyword_key==$recwinkey['post_title'])
    {$active="samcolor1";} else { $active="not";}
    
 ?>
                                <li style="margin-left:-28px; font-size:14px;">
                                   <a   href="wp.php<?php echo $inistalation?>?menuactive=<?php echo $recwinkey['post_title'];?>" ><?php if($i==0)
                             {echo "<span class='$active'>&nbsp;&nbsp;Home Page</span>"; }else { echo  "<span class='$active'> &nbsp;&nbsp;".$recwinkey['post_title']."</span>"; }  ?></a>
                                </li>
                                                               
                               
                                           
                                            
                                             <?php $i++;} ?>
                                               <li style="margin-left:-20px; font-size:14px;">
                                   <a href="wp_edit.php">Add New</a>
                                </li>
                            </ul>
                            </div> 
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        
                        
                        
     
     
          <!-- Article Strat here::::::::::::::::::::::::: -->    
                        
                        
<li style="border:none;" >
<!--a> <div class="abc"><i><img src='images/wp2.png' height='15' weidth='15'></i>&nbsp;&nbsp; Article<span class="fa arrow"><img class="changeimgn" src="images/d_icon.png" /></span></div></a-->
   <div class="panel_1" >
    <ul class="nav nav-second-level">
                            
                                
                                 <li>
                                    <!--a class='articleadd'><img src="images/web_icon.png"  /> Generate
                                            <input type="hidden" value="<?php echo $keyword_key;  ?>" class="articlebttn" /></a-->
                                </li>
                            
                                
                                    <li>
                                    <a class='inline' href="#inline_content_orderarticle"><img src="images/web_icon.png"  /> Order 
                                            <input type="hidden" value="<?php echo $keyword_key;  ?>" class="articlebttn" /></a>
                                </li>
                                
                                 <li>
                                    <a href="http://goarticles.com/" target="_blank"><img src="images/web_icon.png"  />Search</a>
                                </li>
        
                                
                            </ul>
                            </div> 
                         
                        </li>
                        
                        
                        
                        <div style='display:none'>
            <div id='inline_content_orderarticle' style='padding:10px; background:#fff;height:300px;'>
                  <div class="header_order_frm" style="margin-top: 30px;height: 150px;margin-left:100px;">
            <div class="header_or_top">
                <div class="header_or_top_left">
                    
                </div>
                <div class="header_or_top_right">
                    <b>Please fill the below fields for article order</b>
                </div>
            </div>
<form method="post" action="" enctype="multipart/form-data">
    <br>
        <input type="hidden" name="article" value="<?php echo $keyword_key; ?>" />
        <input type="hidden" name="session_id" value="<?php echo  $seeid['session_id'];?>" />
    <div class="or_inp"><input type="text" name="heading" class="inp_order" required value="<?php echo $keyword_key; ?>"/></div>
    
        
    
        
   <br>
    <div class="or_inp"><input type="text" name="desc" class="inp_order1" required placeholder="please enter your article"></div>
    
    <div class="or_inp"><input type="submit" name="article_order_submit" value="Submit" class="inp_order2"  style="margin-top:10px;"/></div>
    </form>
</div>
            </div>
        </div>
                        
                        
               <!-- Article END here::::::::::::::::::::::::: -->         
                        
                        
                         <!-- linking start  here::::::::::::::::::::::::: -->
                         
                         <li style="border:none;">
                           <!--a> <div class="abc"><i><img src='images/wp3.png' height='15' weidth='15'></i>&nbsp;&nbsp; Linking<span class="fa arrow"><img src="images/d_icon.png" /></span></div></a-->
                          <div class="panel_1" >
                            <ul class="nav nav-second-level">
                                <li class="interlinknew">
                                    <a><img src="images/web_icon.png"  /> Internal Linking</a>
                                </li>
                                <li class="externalink">
                                    <a><img src="images/web_icon.png"  /> External Linking</a>
                                </li>
                              
                              
                            </ul>
                            </div> 
                            <!-- /.nav-second-level -->
                        </li>
                        
                           <!-- linking end  here::::::::::::::::::::::::: -->
                        
                       <!-- Images Strat here::::::::::::::::::::::::: -->   
                        
                         <li style="border:none;">
                           <!--a> <div class="abc imageschanges"><i><img src='images/wp4.png' height='15' weidth='15'></i>&nbsp;&nbsp;Insert  Images<span class="fa arrow"><img src="images/d_icon1.png" /></span></div></a-->
                         
                           
                        </li>
                        
                        
                        
                                  <!-- Images end here::::::::::::::::::::::::: --> 
                                  
                                  
                                  
                                  
               <!-- Video Start here::::::::::::::::::::::::: -->   
                        
                   
                        
                        
                        
                        <li style="border:none;">
                           <!--a> <div class="abc"><i><img src='images/wp4.png' height='15' weidth='15'></i>&nbsp;&nbsp; Video<span class="fa arrow"><img src="images/d_icon.png" /></span></div></a-->
                          <div class="panel_1" >
                            <ul class="nav nav-second-level">
                             <li class="youtubechange">
                                    <a ><img src="images/web_icon.png"  /> Insert Video</a>
                                </li>
                                <li>
                                    <a class='inline' href="#inline_content_youtube"> <img src="images/web_icon.png"  /> Add Video</a>
                                </li>
                                 
                                
                                <div style='display:none'>
            <div id='inline_content_youtube' style='padding:10px; background:#fff;height:300px;'>
            <div class="header_order_frm" style="margin-top: 100px;height: 150px;margin-left:100px;">
            <div class="header_or_top">
                <div class="header_or_top_left">
                    
                </div>
                <div class="header_or_top_right">
                    <b>Insert video Url</b>
                </div>
            </div>
<form method="post" action="update_article_url.php" enctype="multipart/form-data">
<br>
     <input type="hidden" name="keywordunq" value="<?php echo $keyword_key;?>" />
        <input type="hidden" name="session_id" value="<?php echo  $seeid['session_id'];?>" />
    <div class="or_inp"><input type="text" name="urlimages" class="inp_order" required placeholder="video url"/></div>
    
        
    
        
    
    <div class="or_inp"><input type="submit" name="VedioUrl" value="Submit" class="inp_order2"  style="margin-top:10px;"/></div>
    </form>
</div>
            </div>
        </div>
                            
                            </ul>
                            </div> 
                        
                        </li>
                        
                                <!-- Video end here::::::::::::::::::::::::: -->  
                                
                                
                        
                         <!-- Header start  here::::::::::::::::::::::::: -->  
                        <li style="border:none;">
                           <!--a> <div class="abc"><i><img src='images/wp4.png' height='15' weidth='15'></i>&nbsp;&nbsp; Header(Banner)<span class="fa arrow"><img src="images/d_icon.png" /></span></div></a-->
                          <div class="panel_1" >
                            <ul class="nav nav-second-level">
                               
                                 <li>
                                    <a class='inline_new' href="#inline_content_header_own"><img src="images/web_icon.png"  />Upload/select</a>
                                </li>
                                 <li>
                                    <a href="https://www.fiverr.com/s/77rk17" target="_blank"><img src="images/web_icon.png"  />Outsource</a>
                                </li>
                                
                            </ul>
                            <div style='display:none'>

           <div id='inline_content_header_own' style='padding:10px; background:#fff;height:400px;'>
                    
                    
             <center>    <div class="header_or_top_right">
                    <b>Pre-Installed Headers</b>
                </div></center><br />
               <form method="post" action="" enctype="multipart/form-data">
                          <div style="background:#EEEEEE; padding:6px 0px;">
                   <p style="font-size:12px;">Choose an image from your computer:</p>
              <div class="file">
               <input type="file" name="fileup" style="padding-top:3px;" /><br />
               </div>
               
               <input type="submit" value="Upload" class="button" name="upload_bann" style="padding:5px 106px;float:right;margin-top: -45px;
margin-right: 105px;"/></div>
               <div class="clear"></div>
               
                
                <?php
                $i=1;
                    $headers=mysql_query("select * from headers");
                    while($res_headers=mysql_fetch_assoc($headers))
                    {
                 ?>
                <div class="wh">
                  <div class="radio">
                      <input type="radio" name="file" value="<?php echo $res_headers['path']; ?>"/>
                    
                  </div>
                    <div class="banner">
                        <img src="images/<?php echo $res_headers['path']; ?>" width="265" height="58" class="img_bor"/>
                    </div>
                </div>
                
                <?php
                if(($i%3)==0){ ?>
                    <div class="clear"></div>
                <br />
                <?php }
                    $i++;}
                ?>
                
                
                
                <div class="clear"></div>
                
               
               
             
               
              
                </form>
                
            </div>
            
            
          

</div>
                            
        
        
        
        
        
        
                            </div> 
                   
                        </li>
                        
                        
                           <!-- Header end  here::::::::::::::::::::::::: -->  
                        
                        
                        
                           
                           
                             <!-- meta description start here  here::::::::::::::::::::::::: -->
                        
                        
                        
                      
                        
                       
                        
                        
                        
                         <!-- SEO Title end here::::::::::::::::::::::::: -->
                         
                         
                         
                         <li style="border:none;">
                           <!--a> <div class="abc"><i><img src='images/wp1.png' height='15' weidth='15'></i>&nbsp;&nbsp; Tag & Widgets<span class="fa arrow"><img src="images/d_icon.png" /></span></div></a-->
                          <div class="panel_1" >
                            <ul class="nav nav-second-level">
                               <li>
                                    <a class='inline' href="#inline_tag"><img src="images/web_icon.png"  />Change It</a>
                                </li>
                               
                               <?php 
                               $metadtaseo=mysql_query("SELECT * FROM `tbl_metadata` WHERE cato='seotit' and keyword='$keyword_key' ORDER BY `id` DESC ");
                              $metadtafetch=mysql_fetch_array($metadtaseo); if(!empty($metadtafetch['seoarticle'])) {$seotitle=$metadtafetch['seoarticle'];} else{ $seotitle=$mkeyword;}
                               ?>
                             
                                <div style='display:none'>
                                
                                
                                
            <div id='inline_tag' style='padding:10px; background:#fff;height:300px;'>
            <div class="header_order_frm" style="margin-top: 100px;height: 150px;margin-left:100px;">
            <div class="header_or_top">
                <div class="header_or_top_left">
                    
                </div>
                <div class="header_or_top_right">
                    <b>Change Tag Line</b>
                </div>
            </div>
           
<form method="post" action="" enctype="multipart/form-data">
   <br>
        <input type="hidden" name="tagkey" value="<?php echo $keyword_key;?>" />
        <input type="hidden" name="session_id" value="<?php echo  $seeid['session_id'];?>" />
    <div class="or_inp"><input type="text" name="taglinein" class="inp_order tag_new" value=" A perfect <?php echo $keyword_key;?> Website" /></div>
    
        
    
        
    
   <div class="or_inp" >
    
    <input type="hidden" value="Get all latest info about <?php echo $keyword_key;?>" class="hid_tag1" />
    
    <input type="hidden" value="Enhance your <?php echo $keyword_key;?>" class="hid_tag2" />
    
    <input type="hidden" value="Learn all about <?php echo $keyword_key;?> with us" class="hid_tag3" />
    
    <input type="hidden" value="All what you need about <?php echo $keyword_key;?> is here" class="hid_tag4" />
    
    <input type="hidden" value="A perfect <?php echo $keyword_key;?> website" class="hid_tag5" />
    <input type="hidden" value="Get all latest info about <?php echo $keyword_key;?>" class="hid_tag6" />
    
    <input type="hidden" value="Enhance your <?php echo $keyword_key;?>" class="hid_tag7" />
    
    <input type="hidden" value="Learn all about <?php echo $keyword_key;?> with us" class="hid_tag8" />
    
    <input type="hidden" value="All what you need about <?php echo $keyword_key;?> is here" class="hid_tag9" />
     <input type="hidden" value="A perfect <?php echo $keyword_key;?> website" class="hid_tag10" />
    
<input type="button" name="gg" value="Change" class="inp_order2 change_tag"  style="margin-top:10px;margin-left:70px;background:orange;color:#fff;"/>
    
  <input type="submit" name="tagline" value="Submit" class="inp_order2"  style="margin-top:10px;margin-left:20px;"/></div>
    </form>
</div>
            </div>
        </div>
                            </ul>
                            </div> 
                      
                        </li>
                         
                         
                        
                         
                         <!-- theme start here::::::::::::::::::::::::: -->
                        
                        <li class="changeplz1">
                           <a> <div class="abc"><i><img src='images/wp6.png' height='15' weidth='15'></i>&nbsp;&nbsp; Themes<span class="fa arrow"><img class="changeimgn1" src="images/d_icon.png" /></span></div></a>
                          <div class="panel_1" >
                            <ul class="nav nav-second-level">
                                <li>
                                <div class="hover_image" style="height:42px;">
                                            <a href="#"><div class="txt_hide" style="margin-left:32px;">
                                               <span><img src="images/theme4.png" width="200" height="200" class="imagehover"/></span><img src="images/web_icon.png"  />Earth-Pro
                                            </div></a>
                                             </div>
                                   
                                </li>
                                <li>
                                    <div class="hover_image" style="height:42px;">
                                            <a href="#">
                                            <div class="txt_hide" style="margin-left:32px;">
                                               <span><img src="images/theme1.png" width="200" height="200" class="imagehover"/></span><img src="images/web_icon.png"  />Twenty Ten
                                            </div></a>
                                            </div>
                                             
                                </li>
                                
                                <li>
                                    <div class="hover_image" style="height:42px;">
                                            <a href="#"><div class="txt_hide" style="margin-left:32px;">
                                               <span><img src="images/theme2.png" width="200" height="200" class="imagehover"/></span><img src="images/web_icon.png"  />Twenty Twelve
                                            </div></a>
                                             </div>
                                </li>
                                
                                <li>
                                <div class="hover_image" style="height:42px;">
                                            <a href="#"><div class="txt_hide" style="margin-left:32px;">
                                               <span><img src="images/theme3.png" width="200" height="200" class="imagehover"/></span><img src="images/web_icon.png"  />Colorful-Delight
                                            </div></a>
                                             </div>
                                    
                                </li>
                            </ul>
                            </div> 

                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                                <!-- theme end here::::::::::::::::::::::::: -->
                                
                                
                                
                                 <!-- main menu start here::::::::::::::::::::::::: -->
                        
                  
                      
                        
                    </ul>
                </div>
            
            </div>
        
 </div>
</div>