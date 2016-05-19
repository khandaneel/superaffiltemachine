<?php $display="block"; include('header.php'); 
include("slidemenu.php");
error_reporting(0);
$id=$_SESSION['id'];
$keyword=mysql_query("select * from tbl_offerword where session_id='$id'");
$searchkey=mysql_fetch_array($keyword);
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






?>
  <div class="niche_right">
<?php include('describe_details.php'); ?>
<div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Let's find your keyword list using Google Keyword Planner</span>
    </div>
    <div class="clear"></div>

<br /><br />
<div class="niche_names" style="padding-left:65px; margin-top:50px; margin-left:370px; position:absolute;">
  
 <span class="image_name" style="margin-left:30px;">      <a class="tooltipnew" id="Related Keywords storage HUB"><img src="images/3.jpg" /></a></span>
         <span class="image_name" style="margin-left:35px;"> <a class="tooltipnew" id="Google Keyword Planner valume checking"><img src="images/4.jpg" /></a></span>
   <span class="image_name" style="margin-left:35px;"> <a class="tooltipnew" id="Filtering More and Less valume keywords"><img src="images/2.jpg" /></a></span>
      <span class="image_name" style="margin-left:35px;"> <a class="tooltipnew" id="Storing the NICHE relevant keywords"><img src="images/5.jpg" /></a></span>
    </div>
    <div class="clear"></div>
   <div class="gif_back">
            	<div class="gif_images">
                      <img src="images/animation2.jpg" />
                </div>
                
                <div class="gif_images2">
                      <img src="images/animation2.gif" />
                </div>
                
                
<a href="google_AD_key.php">
                            
   <div class="gif_submit"> <div class="classname"> Start <img src="images/sub_arr.png" /> </div>  </div>
</a>
                
                
                
                <div class="after_submit">
                
                
					<div class="clear"></div>
                	<img src="images/catnew.gif" width="100" height="80" style="margin-left:30px;"/>
                    <br />
                   <p style="text-align:center;font-size:14px;color:#333;font-style:italic;"> Please Be Patient, This Process May Take Some Time</p>
                </div>
                
                
                
                
                
                
            </div>
    
</div>

<div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox"><span class="samcolor"> Great!,</span> Now lets fillter<br /> your keyword list using Google Keyword Planner.</div>
          <?php include("footer.php"); ?>
          
          
