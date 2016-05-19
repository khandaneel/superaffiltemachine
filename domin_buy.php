<?php $display="block"; include('header.php');  if(isset($_GET['domin_buy'])){$domin_buy=$_GET['domin_buy']; }

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
<style>
.dashborad_left{display:none;} .minbutton_active{top:60px;}
</style>


<?php include('slidemenu.php'); ?>
<div class="offer_top_buy" >
<div class="search_off">
    <form action="domain_book_cpanel.php" method="post">
      <div style="width:700px; height:25px; font-size:16px; color:#FFFFFF; text-align:center; font-weight:bold; color:#000000; letter-spacing:1px;">Please enter your Domain name and Billing ID </div>  
      
   
   
    	<input type="hidden" class="inp_in" name="name"  value="<?php echo $name; ?>"/>
 
    	<input type="hidden" class="inp_in" name="email" value="<?php echo $_SESSION['email']; ?>"/>
 
    	<input type="hidden" class="inp_in" name="mobile" value="<?php echo $mobile; ?>"/>
    
    	<textarea placeholder="Address" name="address" class="text_in" style="display:none;"><?php echo $addesss; ?></textarea>
      
      
    <div><input type="text" value="<?php echo $domin_buy;  ?>"class="inp_min" required="required" name="domainname" style="width:300px;"/></div>
        <div><div style="margin:10px 0px 0px 10px; float:left;" ><a class='tooltipnew45' id='Billing ID means after buy this domin you can get a billing trnsaction ID, please enter this id here'><img src="images/whyseo.png" /></a></div> <input type="text" placeholder="Enter Billing ID" class="inp_min" required="required" name="domainnameid" style="width:270px; margin-left:40px;"/></div>
        <div><input type="submit" value="SUBMIT" class="inp_sub" name="domainbook" style="margin-left:40px;" /></div>
        
        </form>
    </div>
    
     </div>
<div class="clear"></div>


 
   <br />

    
    <br />
    <div class="offer_if" style="margin-top:127px;">
    <div class="next_step"><img src="images/loading.gif" width="30" height="30" /></div>
      <div id="offerpages" class="ajxhere">
      
      <iframe src="https://www.godaddy.com/gdshop/registrar/search.asp?isc=DBCOM749&utm_medium=Other%2BOnline&utm_source=domainsbot&checkAvail=1&domainToCheck=<?php echo $domin_buy; ?>" height="3700" id="iframeID" width="1200" scrolling="no" frameborder="0"></iframe>
      </div>
      
    
   
</div>

<div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox"><br /> Buy your domain here<br /> and then you get a domain ID paste in top and submit</div>
          <?php include("footer.php"); ?>