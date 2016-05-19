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

  ?>
  


<link rel="stylesheet" href="css/lightwindow.css" />

<style>
 .minbutton_active{top:60px;}
</style>

 
<?php include('slidemenu.php'); ?>


<div class="offer_top_buy" >
<div class="search_off">
    <form action="domain_book_cpanel.php" method="post">
      <div style="width:700px; height:25px; font-size:16px; color:#FFFFFF; text-align:center; font-weight:bold; color:#000000; letter-spacing:1px;"> Enter new Domain name and Customer ID</div>  
      
   
   
    	<input type="hidden" class="inp_in" name="name"  value="<?php echo $name; ?>"/>
 
    	<input type="hidden" class="inp_in" name="email" value="<?php echo $_SESSION['email']; ?>"/>
 
    	<input type="hidden" class="inp_in" name="mobile" value="<?php echo $mobile; ?>"/>
    
    
      
      
    <div><input type="text" value="<?php echo $domin_buy;  ?>"class="inp_min inp_min11" required="required" name="domainname" style="width:300px;"/></div>
        <div><div style="margin:10px 0px 0px 10px; float:left;" ><a class='tooltipnew45' id='Billing ID means after buy this domin you can get a billing trnsaction ID, please enter this id here'><img src="images/whyseo.png" /></a></div> <input type="text" placeholder="Enter Customer ID" class="inp_min" required="required" name="domainnameid" style="width:270px; margin-left:20px;"/></div>
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
        <span class="niche_name"><br />Suggested Domains for your niche</span>
        
      

    </div>
    
    <div class="clear"></div>
    <div class="workingplace_offer" style="height:250px;">
        	
            
            
            <div class="gif_back" style="height:0px;padding-bottom:20px;">
            	
            
            
            <!-- paste here -->
            
            
            
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
        <span class="niche_name"><br />Suggested Expired Domains for your niche</span>
        
        
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
<div class="qustion" style="float: left;width: 20px;height: 25px;margin-top: 7px; margin-right:15px;"> <a class="tooltip" href="#demo2_tip11" onmouseover="tooltip.pop(this, '#demo2_tip11')"><img src="images/whyseo.png" /></a></div>


<div style="display:none;">
            <div id="demo2_tip11">
              <table width="400" cellspacing="8" cellpadding="5">
  <tr>
    <td width="33" height="47" ><img src="images/time_iocn.jpg" width="33" height="34" /></td>
    <td width="128" height="47" style="color:#3773b2; font-weight:bold;"><?php echo $fdomain['time_left'];?></td>
    <td width="33" height="47"><img src="images/link.jpg" width="33" height="34" /></td>
    <td width="105" height="47" style="color:#3773b2; font-weight:bold;"><?php echo $fdomain['current_bids'];?></td>
  
  </tr>
  <tr>
    <td height="34"><img src="images/bid_iocn.jpg" width="33" height="34" /></td>
    <td height="34" style="color:#3773b2; font-weight:bold;"><?php echo $fdomain['links'];?></td>
    <td height="34"><img src="images/age_icon.jpg" width="33" height="34" /></td>
    <td height="34" style="color:#3773b2; font-weight:bold;"><?php echo $fdomain['Ages'];?></td>
  
  </tr>
</table>

               
               
               
               
  </div>
        </div>                         
                         
                         
                         
                           <div class="check" style="margin-left:130px;">
                           <a style="cursor:pointer;" onclick="return windowpop('https://www.godaddy.com/gdshop/registrar/search.asp?isc=DBCOM749&utm_medium=Other%2BOnline&utm_source=domainsbot&checkAvail=1&domainToCheck=<?php echo $url; ?>', 1100, 600)">	
      
      
Check</a>
						   
						   
						   </div>
                           <a style="cursor:pointer;" onclick="return windowpop('https://www.godaddy.com/gdshop/registrar/search.asp?isc=DBCOM749&utm_medium=Other%2BOnline&utm_source=domainsbot&checkAvail=1&domainToCheck=<?php echo $url; ?>', 1100, 600)"><div class="dbook" style="margin-left:124px;">BUY <input type="hidden" value="<?php echo $url; ?>" class="takeit" /></div></a>
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
<div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox"> <br /><span class="samcolor">SAM</span> find the best and easy domains for your new project</div>
          <?php include("footer.php"); ?>

   