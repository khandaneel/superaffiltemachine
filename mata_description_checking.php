<?php $display="block"; include('header.php'); 
include("slidemenu.php");


error_reporting(0);
$id=$_SESSION['id'];





$getanchore=mysql_query("select * from `wp_posts`  WHERE session_id='$id' GROUP BY `post_title`  ");
while($anchoredec=mysql_fetch_array($getanchore))
{
	
	//article start functionality
	 $keywordurl = preg_replace('/\s+/','-',$anchoredec['post_title']);
	
$mainurl="http://ezinemark.com/a/".$keywordurl."/";
$homepage = file_get_contents($mainurl);



preg_match("/<div[^>]*class=\"l_search\">(.*?)<\\/div>/si", $homepage, $match);
 $content = $match[1]; 

preg_match("/href=\"(.*?)\"/i", $content, $matches);

$url = file_get_contents($matches[1]);

preg_match("/<div[^>]*id=\"art_content\">(.*?)<\\/div>/si", $url, $match);

$articletext=mysql_real_escape_string($match[1]);

$banned = array('.com', ' .com ', '.com ','.net', ' .net ', '.net ','.net', ' .co.in ', '.co.in ','.co.in', ' .org ', '.org ','.org', ' .org ', '.edu ', '.edu ','.uk', ' .us ', '.us ', '.uk ','.us', ' .gov ', '.gov','.org ','.info', ' .info ', '.biz ', 'www.', ' www.', 'http://', 'http:// ','â€“',' â€“ ',' â€“','Â',' Â','Â ');

$articletext  = trim(str_ireplace($banned, ' ', $articletext));
$articletext=str_replace("div","p",$articletext); 

$article_insrt=mysql_query("INSERT INTO `tbl_article`(`session_id`, `keyword`, `article`) VALUES ('$id','".$anchoredec['post_title']."','$articletext')");

//article End functionality


//Mata description start functionality

$query=$anchoredec['post_title']; $query = preg_replace('/\s+/','%20',$query);

$url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=".$query.'&start=5';
$body = file_get_contents($url);
$json = json_decode($body);
$x=0;
$mataurl=$json->responseData->results[$x]->url;
$content=$json->responseData->results[$x]->content; 
$anchoretext=$json->responseData->results[$x]->title; 	
$tags =get_meta_tags($mataurl);

if(!empty($content))
{
	 $banned = array('.com', ' .com ', '.com ','.net', ' .net ', '.net ','.net', ' .co.in ', '.co.in ','.co.in', ' .org ', '.org ','.org', ' .org ', '.edu ', '.edu ','.uk', ' .us ', '.us ', '.uk ','.us', ' .gov ', '.gov','.org ','.info', ' .info ', '.biz ', '-', '- ', ' -', ' - ', '_', ' _', ' _ ', '_ ', '(', ' (', '( ', ' ( ', ')', ' )', ') ', ' ) ', '{', ' {', '{ ', ' { ', '}', ' }', '} ', ' } ', '[', ' [', '[ ', ' [ ', ']', ' ]', '] ', ' ] ', '+', ' +', '+ ', ' + ', '=', ' =', '= ', ' = ', 'http', ' http ', ' http', 'http ', ' http: ', ' http:', 'http:', ' http:', '//', '// ', ' //', ' // ', '\\', ' \\ ', '.html', '.html ', ' .html ', ' amazon ', 'amazon ', ' amazon', 'amazon', ':', 'Amazon', 'Amazon ', ' Amazon', ' WebMD ', 'WebMD', 'WebMD ', ' WebMD', 'Webmd', 'Webmd ');

$meta_description  = trim(str_ireplace($banned, ' ', $content));
$metades=mysql_real_escape_string($meta_description);
$insertmetyadec=mysql_query("INSERT INTO `tbl_meta_description_final`(`session_id`, `metadescription`, `keyword`) VALUES ('$id','$metades','".$anchoredec['post_title']."')");	
	
}


//Anchore text start functionality

 $anchoretext=explode(" | ",$anchoretext);
  
     $banned = array('.com', ' .com ', '.com ','.net', ' .net ', '.net ','.net', ' .co.in ', '.co.in ','.co.in', ' .org ', '.org ','.org', ' .org ', '.edu ', '.edu ','.uk', ' .us ', '.us ', '.uk ','.us', ' .gov ', '.gov','.org ','.info', ' .info ', '.biz ', ' amazon ', 'amazon ', ' amazon', 'amazon', ':', 'Amazon', 'Amazon ', ' Amazon', ' WebMD ', 'WebMD', 'WebMD ', ' WebMD', 'Webmd', 'Webmd '); //add more words as you want. KEEP THE SPACE around the word

$anchoretextnew  = trim(str_ireplace($banned, ' ', $anchoretext[0]));



	
	$anchoreurl=mysql_real_escape_string("<a href='".$mataurl."' target='_blank'>".$anchoretextnew."</a>");

	$insertanchor=mysql_query("INSERT INTO `tb_anchoretext`(`session_id`,`anchoretext`, `keyword`) VALUES ('$id','$anchoreurl','".$anchoredec['post_title']."')");

}

?>
	
    	
    
        
    <div class="niche_right">
<?php include('describe_details.php'); ?>
<div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Build Meta Description for your NICHE</span>
    </div>
    <div class="clear"></div>



   <div class="animation_left">
  
    <div class="animation_1row" style="margin-left:211px;">
    	
        
        
        <div class="animation_box2 offerhover">
          <input type="hidden" class="hovervalue" value="<br>Expired domains storage HUB" />
        	<div class="data_animation twoc">
            	<div class="i_image">
                <img src="images/i7.png">
                </div>
            </div>
        
        </div>
        
        <div class="r_icon aside2">
        
        </div>
        
        <div class="animation_box3 offerhover">
          <input type="hidden" class="hovervalue" value="<br>Checkin trust flow, backlinks and page rank" />
        	<div class="data_animation threec">
            	<div class="i_image" style="margin-top:27px;">
                <img src="images/i8.png">
                </div>
            </div>
        
        </div>
        
        
         <div class="r_icon aside3">
        	
        </div>
        
        
        
          <div class="animation_box1 offerhover">
          <input type="hidden" class="hovervalue" value="<br>Storing best expired domains" />
        
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
        
      <div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox"> <span class="samcolor"> SAM</span> is Analyzing and Searching the Most Suitable Domains for Your New Website, Click to Next step </div>
          <?php include("footer.php"); ?>