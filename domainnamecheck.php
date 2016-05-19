<?php  ob_start(); $display="block"; include('header.php');
error_reporting(0); 

$id=$_SESSION['id'];
$mainkey=mysql_query("SELECT * FROM  `tbl_offerword` where session_id='$id' ");
$mainkeyword=mysql_fetch_array($mainkey);
 $mkeyword=$mainkeyword['offerword'];
 

$userdetail=mysql_query("select * from tbl_user_registation where email='".$_SESSION['email']."'");
$redata=mysql_fetch_array($userdetail);
$mobile=$redata['mobileno'];
$name=$redata['fname'];
$addesss=mysql_real_escape_string($redata['address']);
if(isset($_SESSION['nottake']))
  {
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    date_default_timezone_set('Asia/Calcutta');
     $activtytext=mysql_real_escape_string("Domain List <br> <a href='lastvititpage.php?go=$id&URI=$actual_link' class='samcolor'>".$mkeyword."</a>");
     $timeno=date('h:i:s a', time());
     $monthday=date("d M");
     $year=date("Y");
 $imgin=mysql_real_escape_string('<img src="images/activity_icon3.png" style="margin-top:-2px;"  width="21" />');
  $activity=mysql_query("INSERT INTO `activity`(`activityname`, `email`, `datetime`, `month`, `year`, `sessionid`, `status`,`img`,`color`,`colorborder`) VALUES ('$activtytext','".$_SESSION['email']."','$timeno','$monthday','$year','".$_SESSION['id']."','1','$imgin','#52b4af','".$_SESSION['color']."')");
  unset($_SESSION['nottake']);
  
  }

  ?>

  ?>
  


<link rel="stylesheet" href="css/lightwindow.css" />

<style>
 .minbutton_active{top:60px;}
</style>

 <script>
function frmValidate()
{

  var val=document.frmDomin.domainname.value;
}
}
</script>
<?php include('slidemenu.php'); ?>


<div class="offer_top_buy" >
<div class="search_off">
    <form action="domain_book_cpanel.php" method="post" onsubmit="return frmValidate()" name="frmDomin">
      <div style="width:700px; height:25px; font-size:16px; color:#FFFFFF; text-align:center; font-weight:bold; color:#000000; letter-spacing:1px;"> Enter New Domain Name</div>  
      
   
   
    	<input type="hidden" class="inp_in" name="name"  value="<?php echo $name; ?>"/>
 
    	<input type="hidden" class="inp_in" name="email" value="<?php echo $_SESSION['email']; ?>"/>
 
    	<input type="hidden" class="inp_in" name="mobile" value="<?php echo $mobile; ?>"/>
    
    
      
      
    <div style="margin-left:15%;"><input type="text" value="<?php echo $domin_buy;  ?>"class="inp_min inp_min11 responseme" required="required" name="domainname"  placeholder="Select Domain"/></div>
        <div><div style="margin:10px 0px 0px 10px; float:left; display:none;" ><a class='tooltipnew45' id='For New Domains, SAM will get the info automatically. 
If you want to add existing Domain then please enter your Domain Name here & Order ID as 1234'><img src="images/whyseo.png" /></a></div> <input type="text" value="12345" class="inp_min responseme1" name="domainnameid" style="margin-left:20px; display:none;"/></div>
        <div><input type="submit" value="SUBMIT" class="inp_sub" name="domainbook" style="margin-left:20px;" /></div>
         <a href="outsie_domin.php"> <div class="web_btn_domain">Select Your Own Domain</div></a>
        
        </form>
    </div>
    
     </div>
<div class="clear"></div>
<div class="niche_right">
<?php include('describe_details.php'); ?>

    <div class="niche_names newniceee"><br /><br />
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <?php
        $res11=mysql_query("select * from tbl_offerword where session_id='".$_SESSION['id']."'");
        $res11_1=mysql_fetch_assoc($res11);
        ?>
        <span class="niche_name"><br />Suggested Domains for your <b>"<?php echo $res11_1['offerword'];?>"</b></span>
        
      

    </div>
    
    <div class="clear"></div>
   <a class='youtube' href="http://irankmedia.com/sam/capture-003-2.mp4"><div class="demo_video_pk" style="top:190px;">
    	<img src="images/demo_logo.png" />
    </div></a>
    <div class="workingplace_offer" style="height:250px;">
        	
            
            
            <div class="gif_back" style="height:0px;padding-bottom:20px;">
            	
            
            
<div class="domain_check11" style="padding-bottom:0px;margin-top:30px;margin-right:10px;border-right:none;">
 					<ul class="domain_name11">
             
		<?php 
   	
			$mkeywordnew1=trim($mkeyword);
	$keyworddomain1=$keyworddomain=str_replace(" ","+",$mkeywordnew1);
					$html = new DOMDocument();
@$html->loadHtmlFile('https://who.is/domain-suggestions/'.$keyworddomain1);
$xpath = new DOMXPath($html);
$nodes = $xpath->query('//tr');
$k=0;
foreach ($nodes as $n){
$dominname=$n->textContent;

$pos = strpos($dominname,".");

if ($pos === false) {} else{
$dominname = preg_replace('/\s+/','+',$dominname);    
        
$dominname = explode('+',$dominname); 
$url= $dominname[1]; 
?>
<li><div class="dname"><?php echo $url; ?></div>

<a style="cursor:pointer;" onclick="return windowpop('https://domize.com/go/1/<?php echo $url; ?>', 1100, 600)"><div class="dbook">BUY<input type="hidden" value="<?php echo $url; ?>" class="takeit" /></div></a> </li>
<?php
if($k==9){break;}$k++;}}
 ?> 

 
 
               
		         
		<?php	if(	$k<=4)
		{

$mkeywordnew1=trim($mkeyword);
	$keyworddomain1=$keyworddomain=str_replace(" ","+",$mkeywordnew1);
$tld=array('.com','.net','.us','.info','.org','.net','.com','.us');

					$html = new DOMDocument();
@$html->loadHtmlFile('http://www.dotsolutions.co.in/domain.php?formaction=domain-name-registration.php&action=dom_suggest_check_avail&txtdomainName='.$keyworddomain1);
$xpath = new DOMXPath($html);
$nodes = $xpath->query('//tr');
$km=0;
foreach ($nodes as $n){
$dominname=$n->textContent;
$dominname=trim($dominname);

$kk= strpos($dominname,":");

if($kk>0) {break;}
$pos = strpos($dominname,".");

if ($pos == false) {
 $url=trim($dominname.$tld[$k]); ?>
 
 <li><div class="dname"><?php echo $url; ?></div>

<a style="cursor:pointer;" onclick="return windowpop('https://domize.com/go/1/<?php echo $url; ?>', 1100, 600)"><div class="dbook">BUY<input type="hidden" value="<?php echo $url; ?>" class="takeit" /></div></a> </li>
 
 <?php
if($km==7){break;}$km++;}
} }
 ?>    	
                    	
                    </ul>
				
            </div>
            
            
            
        </div>

        </div>
    
      
    
    <div class="clear"></div>
    
     <div class="niche_names newniceee">
     
                   <?php
 $id=$_SESSION['id'];
$i=0; 
//$finaldomina=mysql_query("SELECT * FROM `tbl_insertexp_domain_final` WHERE session_id='$id' GROUP BY `domain`");

$finaldomina=mysql_query("SELECT a.domain,b.time_left,b.current_bids,b.Visitor,b.links,b.Ages  FROM tbl_insertexp_domain_final a INNER JOIN tbl_insertexp_domain b ON a.domain=b.domain WHERE a.session_id='$id' GROUP BY a.domain ");


if(mysql_num_rows($finaldomina)==0)
{?>
     
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />&nbsp;&nbsp;<strong style="font-size:22px;">Sorry! </strong> There is no Expired domain available at this moment for this Niche .<br /></span>
        <?php } else { ?>

       <link href="css/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="js/tooltip.js" type="text/javascript"></script>
         <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Suggested Expired Domains for your <b>"<?php echo $res11_1['offerword'];?>"</b></span>
        
        
    </div>
      <div class="clear"></div>
    
    <div class="workingplace_offer1" style="padding-bottom:20px;float:left;">
        	
            
            <div class="gif_back">
            	<div class="domain_check" style="padding-bottom:0px;margin-top:30px;width:840px; border-right:none;">
 					
				<ul class="domain_name">


<?php

	
}

while($fdomain=mysql_fetch_array($finaldomina))
{
	

$url= $fdomain['domain'];

					
                    	echo "<li>";
                        	echo "<div class='dname'>".$fdomain['domain']."</div>";
                           ?>
<div class="qustion" style="float: left;width: 20px;height: 25px;margin-top: 7px; margin-right:15px;"> <a class="tooltip" href="#demo2_tip<?php echo $fdomain['id'];?>" onmouseover="tooltip.pop(this, '#demo2_tip<?php echo $fdomain['id'];?>')"><img src="images/whyseo.png" /></a></div>


<div style="display:none;">
            <div id="demo2_tip<?php echo $fdomain['id'];?>">
              <table width="400" cellspacing="8" cellpadding="5">
  <tr>
    <td width="33" height="47" ><img src="images/time_iocn.jpg" width="33" height="34" /></td>
    <td width="128" height="47" style="color:#3773b2; font-weight:bold;"><?php echo $fdomain['time_left'];?></td>
    <td width="33" height="47"><img src="images/link.jpg" width="33" height="34" /></td>
    <td width="105" height="47" style="color:#3773b2; font-weight:bold;"><?php echo $fdomain['links'];?></td>
  
  </tr>
  <tr>
    <td height="34"><img src="images/bid_iocn.jpg" width="33" height="34" /></td>
    <td height="34" style="color:#3773b2; font-weight:bold;"><?php echo $fdomain['current_bids'];?></td>
    <td height="34"><img src="images/age_icon.jpg" width="33" height="34" /></td>
    <td height="34" style="color:#3773b2; font-weight:bold;"><?php echo $fdomain['Ages'];?></td>
  
  </tr>
</table>

               
               
               
               
  </div>
        </div>                         
                         
                         
                         
                          
                           <a style="cursor:pointer;" onclick="return windowpop('https://domize.com/go/1/<?php echo $url; ?>', 1100, 600)"><div class="dbook resdd" >BUY <input type="hidden" value="<?php echo $url; ?>" class="takeit" /></div></a>
                            <?php 
                        echo "</li>";
						$i++; }
						?>

                        
        
        <!-- for below book domin -->
        
        
       
                        
                       
                    	
                    	
                    </ul>
            </div>
           
            
            
        </div>
           

        </div>
    
    
</div>
<!--div class="samimg" style="display:none;"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox" style="display:none;"> <br /><span class="samcolor">SAM</span> find the best and easy domains for your new project</div-->
         

   