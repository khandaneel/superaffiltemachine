<?php $display="block"; include('header.php'); 
include("slidemenu.php");
if(isset($_POST['offerkey']))
{
     $offerkey1=$_POST['offername'];
     $rvalue=mysql_query("select MAX(sino) from tbl_offerword");
 $maxvalu=mysql_fetch_array($rvalue);
      $_SESSION['id']=$maxvalu['MAX(sino)'].rand(0,100)."seo";
    $sid=$_SESSION['id'];
    date_default_timezone_set('Asia/Calcutta');
    $date=date('d-m-Y');
    $mycolor=rand(1,10);
    if($mycolor==1){$_SESSION['color']="#F00";} elseif($mycolor==2){$_SESSION['color']="#000";} elseif($mycolor==3){$_SESSION['color']="#f5ef58";} elseif($mycolor==4){$_SESSION['color']="#db5717";} elseif($mycolor==5){$_SESSION['color']="#839f54";} elseif($mycolor==6){$_SESSION['color']="#5c1f02";} elseif($mycolor==7){$_SESSION['color']="#595f23";} elseif($mycolor==8){$_SESSION['color']="#a2b863";} elseif($mycolor==9){$_SESSION['color']="#feaa9f";} else{$_SESSION['color']="#664e66";}
//$host= gethostname();
//$ip = gethostbyname($host);
$ip = $_SERVER['REMOTE_ADDR'];
    if(!empty($offerkey1))
    {

$offerkey1=explode("-",$offerkey1);
$offerkey2=explode(".",$offerkey1[0]);
$offerkey3=explode("(",$offerkey2[0]);
$offerkey4=explode("[",$offerkey3[0]);
$offerkey5=explode("/",$offerkey4[0]);

$in_offer=mysql_query("insert into tbl_offerword (`mainid`,`session_id`, `offerword`, `date`, `ip`) VALUES ('".$_SESSION['email']."','$sid','$offerkey5[0]','$date','$ip')");


$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    date_default_timezone_set('Asia/Calcutta');
     $activtytext=mysql_real_escape_string("Niche Selected  <br> <a href='lastvititpage.php?go=$sid&URI=$actual_link' class='samcolor'>".$offerkey5[0]."</a>");
     $timeno=date('h:i:s a', time());
     $monthday=date("d M");
     $year=date("Y");
 $imgin=mysql_real_escape_string('<img src="images/activity_icon1.png" align="middle" height="15" width="21" />');
  $activity=mysql_query("INSERT INTO `activity`(`activityname`, `email`, `datetime`, `month`, `year`, `sessionid`, `status`,`img`,`color`,`colorborder`) VALUES ('$activtytext','".$_SESSION['email']."','$timeno','$monthday','$year','".$_SESSION['id']."','1','$imgin','#5cb85c','".$_SESSION['color']."')");
}

}
  ?>
  
  <!-- Activity Part -->

  
  
  
  
  
  <!-- down part -->
	
    	
    <div class="niche_right">
<?php include('describe_details.php'); ?>

    <div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <?php
        $res11=mysql_query("select * from tbl_offerword where session_id='".$_SESSION['id']."'");
        $res11_1=mysql_fetch_assoc($res11);
        ?>
        <span class="niche_name"><br />Analyzing <b>"<?php echo $res11_1['offerword'];?>"</b></span>
        <a class='youtube' href="http://irankmedia.com/sam/capture-002-6.mp4"><div class="demo_video_pk">
    	<img src="images/demo_logo.png" />
    </div></a>
    </div>
    <div class="clear"></div>
    
  <div class="animation_left">
  
    <div class="animation_1row">
    	
        <div class="animation_box1 offerhover">
        <input type="hidden" class="hovervalue" value="Submitting  your  <span class='samcolor'>Keyword</span> so Search Engines" />
        	<div class="data_animation onec">
            	<div class="i_image">
                <img src="images/i1.png">
                </div>
            </div>
        
        </div>
    	
        <div class="r_icon aside1">
     
        </div>
        
        <div class="animation_box2 offerhover">
          <input type="hidden" class="hovervalue" value="<br> Fetching related keywords of your Niche" />
        	<div class="data_animation twoc">
            	<div class="i_image">
                <img src="images/i2.png">
                </div>
            </div>
        
        </div>
        
        <div class="r_icon aside2">
        
        </div>
        
        <div class="animation_box3 offerhover">
          <input type="hidden" class="hovervalue" value="<br>Checking keywords competition  & their SEO strength" />
        	<div class="data_animation threec">
            	<div class="i_image">
                <img src="images/i3.png">
                </div>
            </div>
        
        </div>
        
        
         <div class="r_icon aside3">
        	
        </div>
        
        <div class="animation_box4 offerhover">
          <input type="hidden" class="hovervalue" value="<br>Collecting relevant keyword to your Niche & searching easy keywords from Google " />
        	<div class="data_animation fourc">
            	<div class="i_image" style="margin-top:19px;">
                <img src="images/i4.png">
                </div>
            </div>
        
        </div>
        
     <div class="r_icon aside4">
      
        </div>
        
          <div class="animation_box1 offerhover">
          <input type="hidden" class="hovervalue" value="<br>Saving finalized keywords   " />
        
        	<div class="data_animation fivec">
            	<div class="i_image">
                <img src="images/i5.png">
                </div>
            </div>
        
        </div>
    
    </div>
    
    <div class="clear"></div>
    <br><br>
    
  <div class="down_sbmit" >  
    <div class="animation_boxs">
        
        	<a href="keywordcheck.php"><div class="data_animation dblue" style="margin-top:23px;position:relative;">

            <div class="nextt tnextt1" style="display:none;"><img src="images/be.gif" align="middle" /></div>
           <div class="nextt tnextt2">START</div>
            </div></a>
        
        </div>
    
    
    <div class="bepation" style="height:40px; text-align:center; display:none;"><span style=" color:#069; font-weight:bold;">Please Be Patient,</span><br /> This Process May Take Some Time</div>
    </div>
    
    
    </div>
    
    
   
    
</div>
        
    
        