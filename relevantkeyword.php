<?php $display="block"; include('header.php'); ?>

<?php include('slidemenu.php'); ?>

  <!-- CSS -->
   
  <link rel="stylesheet" href="css/colorbox.css" />

<script src="js/jquery.colorbox.js"></script>
<script>
$(document).ready(function(){
//Examples of how to assign the Colorbox event to elements

$(".inline").colorbox({inline:true, width:"80%"});

});
</script>

  <!-- Javascript -->

<script>
  $(document).ready(function(){
	  $(".sub_key").hover(function() {

        $('.k3').removeClass("k31");
		$(this).find('.k3').addClass("k31");
		$('.savednew').removeClass("savednew1");
		$(this).find('.savednew').addClass("savednew1");
		$('.saved').removeClass("saved1");
		$(this).find('.saved').addClass("saved1");
		  $('.dimg').removeClass("dimg1");
		$(this).find('.dimg').addClass("dimg1");

});
 $('.dominncheck').click(function(){
			
$('.lch').css( "display", "block" );
		
 });
	
$('.add').click(function(){
	
$('.dimg1').css( "display", "block" );
		$k=$(this).val();
		$(this).css( "display", "none" );
		$k=($k.replace(/[ ]+/g, "%20"));
	    $('.k31').load('anlyser.php?'+$k);});
	    
	    
  });
		
		</script>
        
          <?php
$id=$_SESSION['id'];
$mainkey=mysql_query("SELECT * FROM  `tbl_offerword` where session_id='$id' ");
$mainkeyword=mysql_fetch_array($mainkey);
 $mkeyword=$mainkeyword['offerword'];
  
    if(isset($_SESSION['nottake']))
  {
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    date_default_timezone_set('Asia/Calcutta');
     $activtytext=mysql_real_escape_string("Relevant Keyword <br> <a href='lastvititpage.php?go=$id&URI=$actual_link' class='samcolor'>".$mkeyword."</a>");
     $timeno=date('h:i:s a', time());
     $monthday=date("d M");
     $year=date("Y");
 $imgin=mysql_real_escape_string('<img src="images/activity_icon1.png" align="middle" height="15" width="21" />');
  $activity=mysql_query("INSERT INTO `activity`(`activityname`, `email`, `datetime`, `month`, `year`, `sessionid`, `status`,`img`,`color`,`colorborder`) VALUES ('$activtytext','".$_SESSION['email']."','$timeno','$monthday','$year','".$_SESSION['id']."','1','$imgin','#5cb85c','".$_SESSION['color']."')");
  unset($_SESSION['nottake']);
  
  }
?>

<div class="niche_right">
<?php include('describe_details.php'); ?>

 <?php


$url=mysql_query("SELECT * FROM  `tbl_finalkey` where session_id='$id'  GROUP BY `keyword` ORDER BY rand() ");

 $totalkeyword=mysql_num_rows($url);
 if($totalkeyword<10)
 {$colo="red";}
 elseif($totalkeyword>=10 && $totalkeyword<20 )
 {
	 $colo="orange";
 }
 else { $colo="green";
 }
 ?>

<div class="niche_names newniceee" style="text-align:right; font-size:17px; color:#333333;">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Your Niche <strong class="samcolor"> "<?php echo  $mkeyword; ?>"</strong> </span>
    <br />  <div style="height:20px; width:20px; background:<?php echo $colo; ?>; float:right; margin-right:100px;"></div> &nbsp;&nbsp; <strong>Competition Predict </strong>&nbsp;&nbsp;
    </div>
    <div class="clear"></div>

<a class='youtube' href="http://irankmedia.com/sam/capture-003-2.mp4"><div class="demo_video_pk">
    	<img src="images/demo_logo.png" />
    </div></a>
<br />
	
    <div class="result_realvent1" id="hidenow" style="display:none; border:none; background:#FFF; text-align:center; height:50px;">
  
       <img src="images/loading.gif" align="middle" height="26" width="26"  /><br />
        <span style=" color:#069; font-weight:bold;">Please Be Patient,</span><br /> This Process May Take Some Time
    
    </div>
    
    
    <div class="result_realvent1"  id="hidenow1">
    
    <a class='inline' href="#inline_content"><div class="preview_btn_relevant">
        Preview
        </div></a>
        
        <div class="con_btn_relevant">
        Please mark the winning keywords, and export them for domain checking
        </div>
       
                            
                            
       <a href="expdomain_checking.php"> <div class="domain_btn_relevant">
       <span class="check_btn"> Check Domain</span>
        <span class="check_btn1"  ><img src="images/loading.gif" width="22" height="20" align="left" /><span class="loa2" style="color:#333333; font-size: 18px;"> Loading...</span></span>
        </div></a>
       
        
    
    </div>
    <br />
    
    <div class="result_realvent">
    <div class="wemenu">
                     <?php
                     
                     $inside1=mysql_query("SELECT * FROM  `tbl_winningkeyword` where session_id='$id'  GROUP BY `winningkeyword`");
if(mysql_num_rows( $inside1)>=1)
{
?>

<div class="menumy">Home</div>
<?php
while($keydata=mysql_fetch_array($inside1))
{
?>
<div class="menumy"><?php echo $keydata['winningkeyword']; ?></div>
<?php }} else {
?>
                     
                     <div class="menumy">Home</div><div class="menumy">Inside Page1</div><div class="menumy">Inside Page2</div>
                     
                     <?php } ?>
                  </div>
    </div>
    
    <div class="remainingbar">
   
    </div>
  <div class="website_info">
  
  



                    	
                        <div class="web_site_top bold">
                          	<div class="left_1 left mycssnew " ><a class='tooltipnew136' id='Select the keywords for their competition analysis' style="position:absolute; margin-top:11px; z-index:0;"> <img src='images/whyseo.png' /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select   </div>
                            <div class="left_2 left mycssnew1" >Easy Relevent Keywords List  </div>
                            <div class="left_2 left mycssnew2">Keyword Reports</div>
                            
                          </div>
                          
                          <div class="web_site_result">
                         
    		
                          	<ul>
                             <?php
						
						
						
						if($totalkeyword<=4)
{?>
<div style="height:120px; width:97.76%; padding:10px; background:#F5F5F5; border-radius:3px; box-shadow:0px 0px 3px #CCCCCC; color:#000;"> <strong>&nbsp;&nbsp;<strong style="font-size:22px;">Sorry! </strong>  This Niche has a tough competition, it will take quite long to rank this keyword. <br />
<strong style="color:#FF0000">Suggestion :</strong>	<a href="index.php?vid=01">Change the Niche (recommended)</a><br />

</strong></div>


<?php }
		$odd=0; $top_high=0; $top_midium=0; $top_low=0;
		while($urlfectch=mysql_fetch_array($url))
{
	$chekey=trim($urlfectch['keyword']);
	$chekey1=substr($chekey, 0, -1);
	$mkeyword1=strtolower($mkeyword); $mkeyword2=ucwords($mkeyword); $mkeyword3=ucfirst($mkeyword); $mkeyword4=strtoupper($mkeyword);
	
	if($chekey!=$mkeyword && $chekey!=$mkeyword1 && $chekey!=$mkeyword2 && $chekey!=$mkeyword3 && $chekey!=$mkeyword4 && $chekey1!=$mkeyword && $chekey1!=$mkeyword1 && $chekey1!=$mkeyword2 && $chekey1!=$mkeyword3 && $chekey1!=$mkeyword4)
	{
if($odd==100)
{break;}
	
	
	 ?>
                            	
                              
                                
                             
                                
                                <li class="sub_key" style="border-left:<?php echo $bcolon ?>;">
                                <div class="k1 left mycssnew" > 
                                	<input type="checkbox" name="check" class="add" value="<?php echo trim($urlfectch['keyword']); ?>" style="margin-top:19px;"/>
                                 </div>
                            	<div class="k2 left mycssnew1"><?php echo  trim($urlfectch['keyword']); ?></div>
                            	<div class="k3 left mycssnew2nn" ><img src="images/loading.gif"  width="35" height="17" class="dimg"/></div>
                            
                                </li>
                             
                           
                                <?php } $odd++;}?>
                            </ul>
                          </div>
                          
                         
                          
                         
                           
                    </div>  
   
    
</div>





<div style='display:none'>
            <div id='inline_content' style='padding:10px; background:#fff;'>
           
           <div style="height:1040px; width:1034px; background:rgba(0,0,0,0.6); position:absolute;  z-index:1;"></div>
<div class="wp_preview">
                <div class="wp_preview_left"><?php echo  $mkeyword; ?></div>
                    
                    <div class="wp_preview_right">Get best information of <?php echo  $mkeyword; ?> here</div>
                </div>
                <br /><br />
                <div class="wp_preview">
                <img src="images/theme1.jpg" width="932" />
                </div>
                <div class="clear"></div>
                 <div class="wemenu" style="margin-left:50px; background:#1a4673; width:933px; position:absolute; z-index:2; border-radius:2px; height:40px;">
                     
                     
                       <?php
                     
                     $inside1=mysql_query("SELECT * FROM  `tbl_winningkeyword` where session_id='$id'  GROUP BY `winningkeyword`");
if(mysql_num_rows( $inside1)>=1)
{
?>

<div class="menumy">Home</div>
<?php
while($keydata=mysql_fetch_array($inside1))
{
?>
<div class="menumy"><?php echo $keydata['winningkeyword']; ?></div>
<?php }} else {
?>
                     
                     <div class="menumy">Home</div><div class="menumy">Inside Page1</div><div class="menumy">Inside Page2</div>
                     
                     <?php } ?>
           
                     
                     
                     </div>
               <div class="clear"></div>
              <div class="wp_preview" style="font-size:18px;margin-top:40px;">
               
              <img src="images/reflect.png" style="z-index:2; position:absolute;" />
               <br /><br /><br />
               <img src="images/demop.jpg" width="920" height="690" align="middle" /></div>
               
                
</div>
          
</div>
<!--<div class="samimg" style="display:none;"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox" style="display:none;"> <br /><span class="samcolor"> SAM</span> find the best and easy keywords for your new project</div> -->
         