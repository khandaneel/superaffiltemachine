<?php $display="block"; include('header.php'); 
include("slidemenu.php"); $id=$_SESSION['id'];  
error_reporting(0);

$keyword=mysql_query("select * from tbl_offerword where session_id='$id'");
$searchkey=mysql_fetch_array($keyword);
$kewword=$searchkey['offerword'];


// new API intigartion



//$kewword = preg_replace('/\s+/','+', $searchkey['offerword']);
 $kewword = preg_replace('/\s+/','+',$searchkey['offerword']);

$html = new DOMDocument();
@$html->loadHtmlFile('http://7search.com/Scripts/Advertiser/v3/ExternalTools/KeywordSuggestions?Keyword="'.$kewword.'"&showestimates=false&ShowAdult=false');
$xpath = new DOMXPath($html);
$nodes = $xpath->query('//td[@class="left"]');
$t=0; // for total key
foreach ($nodes as $n){
	
	$a=$n->textContent;
	 $banned = array(' http://','http://',' www.','www.','.co','.c','.com', ' .com ', '.com ','.net', ' .net ', '.net ','.net', ' .co.in ', '.co.in ','.co.in', ' .org ', '.org ','.org', ' .org ', '.edu ', '.edu ','.uk', ' .us ', '.us ', '.uk ','.us', ' .gov ', '.gov','.org ','.info', ' .info ', '.biz ', '-', '- ', ' -', ' - ', '_', ' _', ' _ ', '_ ', '(', ' (', '( ', ' ( ', ')', ' )', ') ', ' ) ', '{', ' {', '{ ', ' { ', '}', ' }', '} ', ' } ', '[', ' [', '[ ', ' [ ', ']', ' ]', '] ', ' ] ', '+', ' +', '+ ', ' + ', '=', ' =', '= ', ' = '); //add more words as you want. KEEP THE SPACE around the word

$mkeyword  = trim(str_ireplace($banned, ' ', $a)); 

if(!empty($mkeyword))
{
$in_offer=mysql_query("insert into finalkey (`session_id`,`key`) VALUES ('$id','$mkeyword')");
	$t++;	
}}
/*
$html = new DOMDocument();
	@$html->loadHtmlFile('http://tools.seobook.com/keyword-tools/seobook/?keyword='.$kewword);
	$xpath = new DOMXPath($html);
	// Store the domains to nodes
	$nodes = $xpath->query('//tr');

	// Loop through the nodes to look for our domain


	foreach ($nodes as $n){
		$keyvalue=$n->textContent;		
		
		
		
		$keyvalue=str_replace(",","",$keyvalue);

$intvalue= preg_replace('/\D/', ' ', $keyvalue);
$intvalue=trim($intvalue);
$intone=explode(" ",$intvalue);
$keyword=explode($intone[0],$keyvalue);
if(!empty($keyword[0]))
{
$keywordnew=trim($keyword[0]);
	$in_offer=mysql_query("insert into finalkey (`session_id`,`key`) VALUES ('$id','$keywordnew')");	
	

		$t++;
		
	}} */
	
	
	$html = new DOMDocument();
	@$html->loadHtmlFile('https://yoast.com/suggest/?s='.$kewword.'&lang=en');
	$xpath = new DOMXPath($html);
	// Store the domains to nodes
	$nodes = $xpath->query('//td/a');

	// Loop through the nodes to look for our domain


	foreach ($nodes as $n){
		$keyvalue=$n->textContent;		
		if(!empty($keyvalue))
		{
		
		
		$keywordnew=trim($keyvalue);
	$in_offer=mysql_query("insert into finalkey (`session_id`,`key`) VALUES ('$id','$keywordnew')");
		$t++;
	}}
	
	
	if($t<20)
	{
		$keyvalue=trim($searchkey['offerword']);

 $query = preg_replace('/\s+/','%20',$keyvalue);

 $start=0;  





for ($start=0; $start<28; $start+=4)
{
$url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=".$query.'&start='.$start;

$body = file_get_contents($url);
$json = json_decode($body);

for($x=0;$x<count($json->responseData->results);$x++){
$a=$json->responseData->results[$x]->url; 
$tags = get_meta_tags($a);

if(isset($tags['keywords']))
{
	
	$in_offer=mysql_query("insert into tbl_googleurl (`session_id`,`url`) VALUES ('$id','$a')");
	
	}
	

}}
		
		
		
		} else {
	header('location:google_AD_key.php');

	}
		
	ob_end_flush();
	?>

<div class="niche_right">
<?php include('describe_details.php'); ?>
<div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Let's find your keyword list using Google Keyword Planner</span>
    </div>
    <a class='youtube' href="http://irankmedia.com/sam/capture-002-6.mp4"><div class="demo_video_pk">
    	<img src="images/demo_logo.png" />
    </div></a>
    <div class="clear"></div>

<div class="animation_left">
  
    <div class="animation_1row" style="margin-left:90px;">
    	
        
        
        <div class="animation_box2 offerhover">
          <input type="hidden" class="hovervalue" value="<br>This Box is searching  your  <span class='samcolor'>NICHE</span>" Competition in Keyword Planner  />
        	<div class="data_animation twoc">
            	<div class="i_image">
                <img src="images/i2.png">
                </div>
            </div>
        
        </div>
        
        <div class="r_icon aside2">
        
        </div>
        
        <div class="animation_box3 offerhover">
          <input type="hidden" class="hovervalue" value="<br>This Box is finding your Competition  Keywords" />
        	<div class="data_animation threec">
            	<div class="i_image">
                <img src="images/i3.png">
                </div>
            </div>
        
        </div>
        
        
         <div class="r_icon aside3">
        	
        </div>
        
        <div class="animation_box4 offerhover">
          <input type="hidden" class="hovervalue" value="<br>This Box is filtering top Competition  keywords  " />
        	<div class="data_animation fourc">
            	<div class="i_image" style="margin-top:19px;">
                <img src="images/i4.png">
                </div>
            </div>
        
        </div>
        
     <div class="r_icon aside4">
      
        </div>
        
          <div class="animation_box1 offerhover">
          <input type="hidden" class="hovervalue" value="<br>This Box is storing your winning keywords for next procedure " />
        
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
        
        	<a href="google_AD_key.php"><div class="data_animation dblue" style="margin-top:23px;position:relative;">

            <div class="nextt tnextt1" style="display:none;"><img src="images/be.gif" align="middle" /></div>
           <div class="nextt tnextt2">NEXT</div>
            </div></a>
        
        </div>
    
    
    <div class="bepation" style="height:40px; text-align:center; display:none;"><span style=" color:#069; font-weight:bold;">Please Be Patient,</span><br /> This Process May Take Some Time</div>
    </div>
    
    
    </div>
    
</div>


        
        
<!--div class="samimgbox"><span class="samcolor"> Great!,</span> Now lets fillter<br /> your keyword list using Google Keyword Planner.</div-->
         
          
          
