<?php include('header.php'); $email=$_SESSION['email'];  ?>

<?php include('slidemenu.php'); ?>
<?php
error_reporting(0);
if(isset($_POST['mail_submit']))
{
	$name=mysql_real_escape_string($_POST['name']);
	$email=mysql_real_escape_string($_POST['email']);
	$message=mysql_real_escape_string($_POST['message']);
	$to="sandeep4549@gmail.com";
		
        
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$headers .= "From: ".$name." <".$email.">\r\n";
		
		$body="
		<table width='500px' style='background-color:#666666;'>
			<tr> 
				<td  colspan='2' align='center' style='background-color:#CCCCCC'>
					<font color='#006699' face='Arial, Helvetica, sans-serif' size='+3'>Rank Booster </font>
				</td> 
			</tr>
		
		
			
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'>Name :
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($name)."
				</td>
			</tr>
			
			   	<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Email
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($email)."
				</td>
			</tr> 
			
			
			
			
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Message 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".$message."
				</td>
			</tr>
			
		    
		</table>";
		if(mail("$to","Rank Booster","$body",$headers))
		{
		echo "<script>";
echo "alert('sucessfully mail hasbeen sent')";
echo "</script>";
echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='index.php' </SCRIPT>";
		}
	
}
?>
<style>
.produresearc{display:block;}
</style>
<link rel="stylesheet" href="css/colorbox.css" />
<link rel="stylesheet" href="css/rankbooster.css" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.colorbox.js"></script>
<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".domain_txt").click(function(){
    $(".domain_im").toggle();
  });
});
				
			
</script>

<div class="niche_right">
<?php include('describe_details.php'); ?>

    <div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Rank Booster</span>
    </div>
    <div class="clear"></div>
    <div class="niches">
        
    <div class="con_main" style="min-height:550px;">
    <div class="container" style="margin-top:108px;">
    
 
<div class="insidebody">

	<div class="final">
    <div class="msg_final">
	<p class="msg_fin">
     <?php error_reporting(0); $value="http://www.".$_GET['url']; ?>
    	"<strong><?php echo $value; ?></strong> "  improvement steps
    </p>
    </div>
    <!-- page title -->
  
    <?php
function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

$html = file_get_contents_curl($value);

//parsing begins here:
$doc = new DOMDocument();
@$doc->loadHTML($html);
$nodes = $doc->getElementsByTagName('title');
$h1 = $doc->getElementsByTagName('h1');

//get and display what you need:
$title = $nodes->item(0)->nodeValue;
$h1 = $h1->item(0)->nodeValue;

$metas = $doc->getElementsByTagName('meta');

for ($i = 0; $i < $metas->length; $i++)
{
    $meta = $metas->item($i);
    if($meta->getAttribute('name') == 'description')
        $description = $meta->getAttribute('content');
    if($meta->getAttribute('name') == 'keywords')
        $keywords = $meta->getAttribute('content');
}

?>

    <!-- meta keywords and description -->
    <?php
// Assuming the above tags are at www.example.com
$tags = get_meta_tags($value);
?>


    <div class="final_res">
   <div class="result_profile">
                
                <ul id="toggle-view">
                	<li>
                    <div class="pro_1">
                   	 <div class="pdiv sli1">
                    		Title
                       
                       	</div>
                       
                       <div class="sli2">
                       
					   <?php 
					   if((strlen($title))<=60 && !empty($title))
					   {
						    ?>
                       
                        <span class="msg">Ok</span>
                        <?php
					   }
					   else
					   {
					   ?>
                        <span class="msg">Warning</span>
                        <?php
					   }
					   ?>
                        
                       
                       </div>
                       </div>
                       <?php
					   if(sizeof($title)>0){
						   ?>
                        <div class="panel_1" style="display:block;">
                        	<div class="pane2_data">
                           		<div class="panel_res">
        						
                            <?php echo $title; ?>
                               </div>
                              
                                </div>
        				</div>
                        <?php
					   }?>
                       
                        
                        
                     </li>
                     <div class="clear"></div>
                     
                     <li>
                    <div class="pro_1">
                   	 <div class="pdiv sli1">
                    		Meta Description
                       
                       	</div>
                       
                       <div class="sli2">
                        <?php 
					   if((strlen($tags['description']))<=160 && !empty($tags['description']))
					   {
						    ?>
                       
                        <span class="msg">Ok</span>
                        <?php
					   }
					   else
					   {
					   ?>
                        <span class="msg">Warning</span>
                        <?php
					   }
					   ?>
                        
                      
                       </div>
                       </div>
                       <?php
					   if(sizeof($tags['description'])>0){
						   ?>
                        <div class="panel_1" style="display:block;">
                        	<div class="pane2_data">
                           
        				<div class="panel_res">		
                           <?php echo $tags['description']; ?>
                               
                             </div> 
                             
                          
                                
                                </div>
        				</div>
                        <?php
					   }
						?>
                        
                        
                     </li>
                     <div class="clear"></div>
                     
                     <li>
                    <div class="pro_1">
                   	 <div class="pdiv sli1">
                    		Meta Keywords
                       
                       	</div>
                       
                       <div class="sli2">
                        <?php 
					   if(!empty($tags['keywords']))
					   {
						    ?>
                       
                        <span class="msg">Ok</span>
                        <?php
					   }
					   else
					   {
					   ?>
                        <span class="msg">Warning</span>
                        <?php
					   }
					   ?>
                    
                       
                       
                       </div>
                       </div>
                       <?php
					   if(sizeof($tags['keywords'])>0){
						   ?>
                        <div class="panel_1" style="display:block;">
                        	<div class="pane2_data">
                           
        					<div class="panel_res">	
                           <?php echo @$tags['keywords'];   ?>
                           </div>    
                              
                                </div>
        				</div>
                        
                         <?php
					   }
						?>
                        
                        
                     </li>
                     <div class="clear"></div>
                     
                  
                     <div class="clear"></div>
                     
                     <li>
                    <div class="pro_1" >
                   	 <div class="pdiv sli1">
                    		Heading tags
                       
                       	</div>
                       
                       <div class="sli2">
                        <?php 
					   if(!empty($h1))
					   {
						    ?>
                       
                        <span class="msg">Ok</span>
                        <?php
					   }
					   else
					   {
					   ?>
                        <span class="msg">Warning</span>
                        <?php
					   }
					   ?>
                        
                       
                        
                        
                       </div>
                       </div>
                        <?php
					   if(sizeof($h1)>0){
						   ?>
                        <div class="panel_1" style="display:block;">
                        	<div class="pane2_data">
                           
        					<div class="panel_res">	
                           <?php echo  $h1; ?>
                             </div>  
                              
                                </div>
        				</div>
                        
                         <?php
					   }
						?>
                        
                        
                     </li>
                     <div class="clear"></div>
                   
                     
                     
                     </ul>
                     </div>
                     </div>
   
   <div class="result_profile_bac1">



        

<!-- :::::::::::::::::::::::::::::  end  Google position ::::::::::: -->


<!-- :::::::::::::::::::::::::::::   ahref data for Ip's,Refering Domians,Backlinks,Refering subnets ::::::::::: -->

   <?php
$token="596b1f51527a18f0ce0a1fb11d5825d4d962ec46";
$website=$value;
$format="json";

//$url = 'http://apiv2.ahrefs.com/?token'.$token.'&target='.$website.'&limit=1000&from=refdomains&mode=domain&output='.$format;

$url1 ='http://apiv2.ahrefs.com/?from=refdomains&target='.$website.'&mode=subdomains&limit=1000&output='.$format.'&token='.$token;

$a=file_get_contents($url1);
$input = json_decode($a, true);
$users=$input['refdomains'];
$ab=$input['stats'];


$i=0;
foreach($users as $user)
{
   $reddomains=$user['refdomain'];
	@$backlinks+=$user['backlinks'];


$i++;
}



?>
<div class="clear"></div>
        
    <div class="clear"></div>
    <div class="bac_1">
     <div class="bac_1_left">
	
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                       Refering Domians
                        </div>
                        
                        <div class="sli2" style="margin-right:125px;">
                        <?php echo $i; ?>
                        </div>
                        
                        
                       </div>
                       
                       
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
                        	<div class="order_bn">
                            <?php
							if($i<2){echo "Poor";} 
							else if($i<5){echo "Good";}
							else if($i<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>
                        </div>
                    	
    </div>
    </div>
        <div class="clear"></div>
        
    <div class="bac_1">
     <div class="bac_1_left">
	
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                        Backlinks
                        </div>
                        
                        <div class="sli2" style="margin-right:125px;">
                       <?php echo @$backlinks; ?>
                        </div>
                        
                        
                       </div>
                       
                     
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
                        	<div class="order_bn">
                            <?php
							if($backlinks<2){echo "Poor";} 
							else if($backlinks<5){echo "Good";}
							else if($backlinks<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>
                        </div>
                    	
    </div>
    </div>
        <div class="clear"></div>
    <div class="bac_1">
     <div class="bac_1_left">
	<ul id="toggle-view">
                	<li class="bac_1">
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                      Refering subnets
                        </div>
                        
                         <div class="sli2" style="margin-right:125px;">
                       <?php echo $ab['class_c']; ?>
                        </div>
                        
                        
                       </div>
                       
                       </li>
                       
                      
                       
                       
                       </ul>
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
                        	<div class="order_bn">
                            <?php
							$ref=$ab['class_c'];
							if($ref<2){echo "Poor";} 
							else if($ref<5){echo "Good";}
							else if($ref<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>

                        </div>
                    	
    </div>
    </div>
    
    <!-- ::::::::::::::::::::::::::::: end  ahref data for Ip's,Refering Domians,Backlinks,Refering subnets ::::::::::: -->
    
   
     <!-- ::::::::::::::::::::::::::::: start moz data for Page Authority,Domain Authority ::::::::::: -->
    <?php

// you can obtain you access id and secret key here: http://www.seomoz.org/api/keys
$accessID = "member-a197abce33"; // * Add unique Access ID
$secretKey = "f50864230ebd9592e5a2d1af0646c722"; // * Add unique Secret Key
 
// Set your expires for several minutes into the future.
// Values excessively far in the future will not be honored by the Mozscape API.
$expires = time() + 300;
 
// A new linefeed is necessary between your AccessID and Expires.
$stringToSign = $accessID."\n".$expires;
 
// Get the "raw" or binary output of the hmac hash.
$binarySignature = hash_hmac('sha1', $stringToSign, $secretKey, true);
 
// We need to base64-encode it and then url-encode that.
$urlSafeSignature = urlencode(base64_encode($binarySignature));
 
// This is the URL that we want link metrics for.
@$objectURL = $value;

// Add up all the bit flags you want returned.
// Learn more here: http://apiwiki.seomoz.org/categories/api-reference
$cols = "103079215140";
 
// Now put your entire request together.
// This example uses the Mozscape URL Metrics API.
$requestUrl = "http://lsapi.seomoz.com/linkscape/url-metrics/".urlencode($objectURL)."?Cols=".$cols."&AccessID=".$accessID."&Expires=".$expires."&Signature=".$urlSafeSignature;




// We can easily use Curl to send off our request.
$options = array(
    CURLOPT_RETURNTRANSFER => true
    );

$ch = curl_init($requestUrl);

curl_setopt_array($ch, $options);
$content = curl_exec($ch);

curl_close($ch);
 
// * Store URL metrics in array

$json_a = json_decode($content);

// * Assign URL metrics to separate variables

@$pageAuthority = round($json_a->upa,0); // * Use the round() function to return integer
@$domainAuthority = round($json_a->pda,0);
@$externalLinks = $json_a->ueid;
@$internal = $json_a->fuid;
@$theUrl = $json_a->uu;
@$theUrl1 = $json_a->upa;
?>
    <div class="clear"></div> 
    <div class="bac_1">
     <div class="bac_1_left">
	
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                      Page Authority
                        </div>
                        
                       <div class="sli2" style="margin-right:125px;">
                       <?php echo $pageAuthority; ?>
                        </div>
                        
                        
                       </div>
                       
                      
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
                        	<div class="order_bn">
                            <?php
							
							if($pageAuthority<2){echo "Poor";} 
							else if($pageAuthority<5){echo "Good";}
							else if($pageAuthority<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>
                        </div>
                    	
    </div>
    </div>
    
    <div class="clear"></div> 
    <div class="bac_1">
     <div class="bac_1_left">
	<ul id="toggle-view">
                	<li class="bac_1">
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                      Domain Authority
                        </div>
                        
                        <div class="sli2" style="margin-right:125px;">
                       <?php echo $domainAuthority; ?>
                        </div>
                        
                        
                       </div>
                       
                       </li>
                       
                      
                       
                       
                       </ul>
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
    		<div class="order_bn">
                          
                        	
                            <?php
							if($domainAuthority<2){echo "Poor";} 
							else if($domainAuthority<5){echo "Good";}
							else if($domainAuthority<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>
                            
                            
                        </div>
                    	
    </div>
    </div>
    
    
    
    
         <!-- :::::::::::::::::::::::::::::end  start moz data for Page Authority,Domain Authority ::::::::::: -->
         
      
 
 
  

 
 
  <!-- ::::::::::::::::::::::::::::: Social Information::::::::::: -->
  
  <?php

class shareCount {
private $url,$timeout;
function __construct($url,$timeout=10) {
$this->url=rawurlencode($url);
$this->timeout=$timeout;
}
function get_tweets() {
$json_string = $this->file_get_contents_curl('http://urls.api.twitter.com/1/urls/count.json?url=' . $this->url);
$json = json_decode($json_string, true);
return isset($json['count'])?intval($json['count']):0;
}
function get_linkedin() {
$json_string = $this->file_get_contents_curl("http://www.linkedin.com/countserv/count/share?url=$this->url&format=json");
$json = json_decode($json_string, true);
return isset($json['count'])?intval($json['count']):0;
}
function get_fb() {
$json_string = $this->file_get_contents_curl('http://api.facebook.com/restserver.php?method=links.getStats&format=json&urls='.$this->url);
$json = json_decode($json_string, true);
return isset($json[0]['total_count'])?intval($json[0]['total_count']):0;
}
function get_plusones()  {
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc");
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"'.rawurldecode($this->url).'","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
$curl_results = curl_exec ($curl);
curl_close ($curl);
$json = json_decode($curl_results, true);
return isset($json[0]['result']['metadata']['globalCounts']['count'])?intval( $json[0]['result']['metadata']['globalCounts']['count'] ):0;
}
function get_stumble() {
$json_string = $this->file_get_contents_curl('http://www.stumbleupon.com/services/1.01/badge.getinfo?url='.$this->url);
$json = json_decode($json_string, true);
return isset($json['result']['views'])?intval($json['result']['views']):0;
}
function get_delicious() {
$json_string = $this->file_get_contents_curl('http://feeds.delicious.com/v2/json/urlinfo/data?url='.$this->url);
$json = json_decode($json_string, true);
return isset($json[0]['total_posts'])?intval($json[0]['total_posts']):0;
}
function get_pinterest() {
$return_data = $this->file_get_contents_curl('http://api.pinterest.com/v1/urls/count.json?url='.$this->url);
$json_string = preg_replace('/^receiveCount\((.*)\)$/', "\\1", $return_data);
$json = json_decode($json_string, true);
return isset($json['count'])?intval($json['count']):0;
}
private function file_get_contents_curl($url){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
$cont = curl_exec($ch);
if(curl_error($ch))
{
die(curl_error($ch));
}
return $cont;
}
}
?>
<?php
$obj=new shareCount($value); 
?>
  
<div class="clear"></div> 
    <div class="bac_1">
     <div class="bac_1_left">
	
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                        Facebook
                      
                        </div>
                        
                     <div class="sli2" style="margin-right:125px;">
                   <?php    echo $obj->get_fb(); ?>
                        </div>
                        
                        
                       </div>
                       
                      
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
                        	<div class="order_bn">
                            <?php
							$fb=$obj->get_fb();
							if($fb<2){echo "Poor";} 
							else if($fb<5){echo "Good";}
							else if($fb<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>
                        </div>
                    	
    </div>
    </div>

 
 <div class="clear"></div> 
    <div class="bac_1">
     <div class="bac_1_left">
	
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                        pinterest
                      
                        </div>
                        
                      <div class="sli2" style="margin-right:125px;">
                       <?php echo $obj->get_pinterest(); ?>
                        </div>
                        
                        
                       </div>
                       
                      
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
                        	<div class="order_bn">
                            <?php
							$pin=$obj->get_pinterest();
							if($pin<2){echo "Poor";} 
							else if($pin<5){echo "Good";}
							else if($pin<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>
                        </div>
                    	
    </div>
    </div>
    
    <div class="clear"></div> 
    <div class="bac_1">
     <div class="bac_1_left">
	
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                        Twitter
                      
                        </div>
                        
                        <div class="sli2" style="margin-right:125px;">
                       <?php echo $obj->get_tweets(); ?>
                        </div>
                        
                        
                       </div>
                       
                      
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
                        	<div class="order_bn">
                            <?php
							$twi=$obj->get_tweets();
							if($twi<2){echo "Poor";} 
							else if($twi<5){echo "Good";}
							else if($twi<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>
                        </div>
                    	
    </div>
    </div>
    
    <div class="bac_1">
     <div class="bac_1_left">
	
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                        Linkedin
                      
                        </div>
                        
                          <div class="sli2" style="margin-right:125px;">
                       <?php echo $obj->get_linkedin(); ?>
                        </div>
                        
                        
                       </div>
                       
                      
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
                        	<div class="order_bn">
                            <?php
							$lin=$obj->get_tweets();
							if($lin<2){echo "Poor";} 
							else if($lin<5){echo "Good";}
							else if($lin<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>
                        </div>
                    	
    </div>
    </div>
    <div class="clear"></div>
      <div class="bac_1">
     <div class="bac_1_left">
	
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                        Stumbleupon
                      
                        </div>
                        
                       <div class="sli2" style="margin-right:125px;">
                       <?php echo $obj->get_stumble(); ?>
                        </div>
                        
                        
                       </div>
                       
                      
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
                        	<div class="order_bn">
                            <?php
							$sub=$obj->get_stumble();
							if($sub<2){echo "Poor";} 
							else if($sub<5){echo "Good";}
							else if($sub<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>
                        </div>
                    	
    </div>
    </div>
    
   
    
    
       <div class="clear"></div>
      <div class="bac_1">
     <div class="bac_1_left">
	
                    <div class="pro_1">
                    	<div class="pdiv sli1">
                        Google Plus
                      
                        </div>
                        
                        <div class="sli2" style="margin-right:125px;">
                       <?php echo $obj->get_plusones(); ?>
                        </div>
                        
                        
                       </div>
                       
                      
    </div>
    <div class="bac_1_right">
    <div class="pro_bac3">
                        	<div class="order_bn">
                            <?php
							$gplus=$obj->get_plusones();
							if($gplus<2){echo "Poor";} 
							else if($gplus<5){echo "Good";}
							else if($gplus<8){echo "Very good";}
							else{echo "Excellent";}
                           ?> 
                           </div>
                        </div>
                    	
    </div>
    </div>
 

  
    <!-- ::::::::::::::::::::::::::::: end Social Information::::::::::: -->
 </div>
   
    </div>
    
    
</div>
    
    </div>
    </div>
    
    
    
 
 
<a class='inline' href="#inline_content"><div class="getideabutton">
 	Get idea from exports
 </div></a>
 
 
 <div style='display:none'>
			<div id='inline_content' style='padding:10px; background:#fff;'>
            <center>
            <div class="header_or_top_right" style="width:400px;height: 30px;line-height: 30px;">
                    <b>Submit your message to experts</b>
                </div>
                <br>
					<form method="post" action="">
                    <div class="inp_main" style="width:350px;">
                    <?php
					$details=mysql_query("select * from tbl_user_registation where email='$email'" );
					$details1=mysql_fetch_assoc($details);
					?>
      			<span class="inp_na" style="display:block;">Name</span>
    			<input type="text" name="name" class="inp" required style="width:300px;" value="<?php echo $details1['fname']; ?>">
                </div>
                
                  <div class="inp_main" style="width:350px;">
      			<span class="inp_na" style="display:block;">Email</span>
    			<input type="email" name="email" class="inp" required style="width:300px;" value="<?php echo $details1['email']; ?>">
                </div>
                
                  <div class="inp_main" style="width:350px;">
      			<span class="inp_na" style="display:block;">Message</span>
    				<textarea name="message" class="inp_txt"></textarea>
                </div>
                
                <div style="margin-top:30px;"><input type="submit" class="inp_sub" name="mail_submit" value="Send To Experts" style="margin-left:244px;"/></div>
                    </form>
                    </center>
			</div>
		</div>
   
        
        
        
    </div>
    


  <div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox">Here you need to search <br />  for some product name. Don't worry, <span class="samcolor">SAM</span> will find the easy keywords to target automatically for you.</div>

<?php include('footer.php');