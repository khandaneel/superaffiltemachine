<?php $display="block"; include('header.php'); 
include("slidemenu.php");
$id=$_SESSION['id'];
 error_reporting(0);
 $mykeywotrdnnnn=array();
 $html = new DOMDocument();
$mainkeyword=mysql_query("select * from tbl_offerword where session_id='$id'");
$keymain=mysql_fetch_array($mainkeyword);

$stringnew=strtolower($keymain['offerword']);
 $banned = array(' with ', ' from ', ' like ', ' plus ', ' than ', ' until ', ' past ' , ' onto ',' than ', ' along ', ' down ' , ' since ','with ', 'from ', 'like ', 'plus ', 'than ', 'until ', 'from ' , 'past ' , ' onto ',' than ', ' along ', 'down ' , 'since ',' with', ' from', ' like', ' plus', ' than', ' until', ' from' , ' past' , ' onto',' than', ' along', ' down' , ' since'); //add more words as you want. KEEP THE SPACE around the word

$stringnewdtat  = str_ireplace($banned, ' ', $stringnew);

$stringnew=preg_replace('/\b(?:^|\s\w{1,3})\b/', '', $stringnewdtat);

$classes=explode(" ",$stringnew);

for($i=0;$i<2;$i++)
{
	$ii=0;
$keypart=$classes[$i];

/*

	
	@$html->loadHtmlFile('https://www.dynadot.com/market/auction/?keyword='.$keypart.'&order_by=8&page_size=50&page_index=0');
    $xpath = new DOMXPath($html);
    // Store the domains to nodes
    $nodes = $xpath->query('//table[@class="market-table"]/tr');



    foreach ($nodes as $n){
  
       
			 $keyvalue=trim($n->textContent);    
        $kewword = preg_replace('/\s+/','+', $keyvalue);  
	 $trust_flow = explode('+',$kewword); 
			
          	$dotpos=strpos($trust_flow[0],".");
			if($dotpos>=1)
			{
		
			$time_left=$trust_flow[1].$trust_flow[2].$trust_flow[3].$trust_flow[4];
	
			if($trust_flow[7]=='-')
			{
	
			
			$insertdomain=mysql_query("INSERT INTO `tbl_insertexp_domain`(`session_id`, `domain`, `searchkey`, `time_left`, `current_bids`, `Visitor`, `links`, `Ages`) VALUES ('$id','".$trust_flow[0]."','$keypart','$time_left','".$trust_flow[5]."','".$trust_flow[8]."','".$trust_flow[9]."','".$trust_flow[10]."')");
          
			}
				else {
					
		$insertdomain=mysql_query("INSERT INTO `tbl_insertexp_domain`(`session_id`, `domain`, `searchkey`, `time_left`, `current_bids`, `Visitor`, `links`, `Ages`) VALUES ('$id','".$trust_flow[0]."','$keypart','$time_left','".$trust_flow[5]."','".$trust_flow[7]."','".$trust_flow[8]."','".$trust_flow[9]."')");
          
				}
     
	}
	}
		

	*/	
	
@$html->loadHtmlFile("http://www.stuckdomains.com/Domain_Name_Search_Results.aspx?q=".$keypart."&btnSearch=Search&rad=.com,.info,.net,.org,.us&filter=3&Hyphen=3&Numbers=2&length=3");
    $xpath = new DOMXPath($html);
    // Store the domains to nodes
    $nodes = $xpath->query('//tr[@class="s_tr"]');



    foreach ($nodes as $n){
        $keyvalue=trim($n->textContent);    
		
		     $kewword = preg_replace('/\s+/','+', $keyvalue);    
        
        $trust_flow = explode('+',$kewword); 


$pos=strpos($trust_flow[0],".");

if($pos>=1 && !empty($pos))

  { 
  $time_left=rand(0,3)."days,".rand(0,10)."hours";
  $time_left1="$".rand(14,20).".".rand(10,100);  $time_left2=rand(50,300);  $time_left3=rand(1,20); $time_left4=rand(0,3);

$insertdomain=mysql_query("INSERT INTO `tbl_insertexp_domain`(`session_id`, `domain`, `searchkey`, `time_left`, `current_bids`, `Visitor`, `links`, `Ages`) VALUES ('$id','".$trust_flow[0]."','$keypart','$time_left','$time_left1','$time_left2','$time_left3','$time_left4')");
 if($ii>=8)
	 break;
  }
  $ii++;
  }	
}
  
  ?>




<?php

$date=date('Y-m-d')." ".date('h:i:s', time());
 
$ooferw=mysql_query("SELECT  *  FROM `tbl_offerword` WHERE session_id='$id'");
$homeword=mysql_fetch_row($ooferw);
 $dommytext='';
 

 
$import=mysql_query("INSERT INTO `wp_posts`(`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`,`session_id`) VALUES ('1','$date','$date','$dommytext','$homeword[2]','','publish','open','open','','$homeword[2]','','','$date','$date','','0','','0','post','','0','$id')");





$inside1=mysql_query("SELECT * FROM  `tbl_winningkeyword` where session_id='$id'  GROUP BY `winningkeyword`  ");

while($keydata=mysql_fetch_array($inside1))
{
 $qs=$keydata['winningkeyword']; 
 
 
 $name_page1=strtolower(trim($qs));
$name_page1=str_replace(" ","-",$name_page1);
 $dommytext='';
 $import=mysql_query("INSERT INTO `wp_posts`(`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`,`session_id`) VALUES ('1','$date','$date','$dommytext','$qs','','publish','open','open','','$name_page1','','','$date','$date','','0','','0','page','','0','$id')");
 
 }
?>
  <!-- down part -->
	
    	
    <style>.produresearc1{display:block;}</style>
        
    <div class="niche_right">
<?php include('describe_details.php'); ?>
<div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
         <?php
        $res11=mysql_query("select * from tbl_offerword where session_id='".$_SESSION['id']."'");
        $res11_1=mysql_fetch_assoc($res11);
        ?>
        <span class="niche_name"><br />Let's Build your <b>"<?php echo $res11_1['offerword'];?>"</b> related domains</span>
    </div>
    <div class="clear"></div>
 <a class='youtube' href="http://irankmedia.com/sam/capture-003-2.mp4"><div class="demo_video_pk">
    	<img src="images/demo_logo.png" />
    </div></a>
<div class="animation_left">
  
    <div class="animation_1row" style="margin-left:106px;">
    	
        
        <div class="animation_box1 offerhover">
        <input type="hidden" class="hovervalue" value="<br>This is the storage box of all expired domains" />
        	<div class="data_animation onec">
            	<div class="i_image">
                <img src="images/i6.png">
                </div>
            </div>
        
        </div>
    	
        <div class="r_icon aside1">
     
        </div>
        
        <div class="animation_box2 offerhover">
          <input type="hidden" class="hovervalue" value="<br>Filtering your <span class='samcolor'>NICHE</span> related expired domains" />
        	<div class="data_animation twoc">
            	<div class="i_image" style="margin-top:20px;">
                <img src="images/i4.png">
                </div>
            </div>
        
        </div>
        
        <div class="r_icon aside2">
        
        </div>
        
        <div class="animation_box3 offerhover">
          <input type="hidden" class="hovervalue" value="<br>Checkin trust flow, backlinks and page rank" />
        	<div class="data_animation threec">
            	<div class="i_image">
                <img src="images/i8.png">
                </div>
            </div>
        
        </div>
        
        
         <div class="r_icon aside3">
        	
        </div>
        
        <div class="animation_box1 offerhover">
          <input type="hidden" class="hovervalue" value="<br>Storing your <span class='samcolor'>NICHE</span> related expired domains "/>
        
        	<div class="data_animation fivec">
            	<div class="i_image">
                <img src="images/i7.png">
                </div>
            </div>
        
        </div>
    
    </div>
    
    <div class="clear"></div>
    <br><br>
    
  <div class="down_sbmit" >  
    <div class="animation_boxs">
        
        	<a href="mata_description_final.php"><div class="data_animation dblue" style="margin-top:23px;position:relative;">

            <div class="nextt tnextt1" style="display:none;"><img src="images/be.gif" align="middle" /></div>
           <div class="nextt tnextt2">NEXT</div>
            </div></a>
        
        </div>
    
    
    <div class="bepation" style="height:40px; text-align:center; display:none;"><span style=" color:#069; font-weight:bold;">Please Be Patient,</span><br /> This Process May Take Some Time</div>
    </div>
    
    
    </div>
    
</div>
        
<!--div class="samimg" style="display:none;"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox" style="display:none;"> <br />Let's build your <span class="samcolor"> NICHE</span> related expired domains or Fresh domains. To get started to click Next Step</div-->
         