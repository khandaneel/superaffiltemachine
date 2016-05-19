<?php ob_start(); $display="block"; include("header.php"); include("slidemenu.php"); ?>

<!-- down part -->
<?php 

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

  
    
        
    
    
<div class="niche_right">
<?php include('describe_details.php'); ?>



    <div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Enter buying domain</span>
        
    </div>
  
    <div class="clear"></div>
    <div class="workingplace_offer" style="height:550px;">
        	<br />
            <div class="domain_display" style="display:block; height:120px;  width:600px; margin:auto;">
            <br />
            <h2><u>BUY your domain here</u></h2><br />
     			<div style="width:341px;margin:auto;"> <a style="cursor:pointer;" onclick="return windowpop('http://goo.gl/kZxagS', 1100, 600)"> <div class="domname" style="float: left;margin-top: -10px;border-bottom: none;"><img src="images/na.jpg" /></div></a>
           <a style="cursor:pointer;" onclick="return windowpop('https://in.godaddy.com/', 1100, 600)"> <div class="domname" style="float: left;margin-top: -10px;border-bottom: none;"><img src="images/go.jpg" /></div></a>
            </div>
        </div>
         <center>
            <div class="login_error" style="height: 219px;box-shadow: 0px 0px 4px #999999;width: 607px;border-radius: 3px;margin-top: 10px;}">
                <br>
       
          
                <form method="post" action="domain_book_cpanel.php" >
    <div class="inp_main">
                <span class="inp_na"><p style="color:#428bca;font-size:14px;font-weight:bold;">Enter Your Domain Name:</p></span><br />
          </div>      
     <input type="text"    name="domainname" class="inp_in applypie" required="required" placeholder="Enter new Domain name" /><br />
     <input type="text"    name="domainnameid" class="inp_in applypie" style="display:none" placeholder="Order ID" />
   
    	<input type="hidden" class="inp_in" name="name"  value="<?php echo $name; ?>"/>
   
    	<input type="hidden" class="inp_in" name="email" value="<?php echo $_SESSION['email']; ?>"/>

    	<input type="hidden" class="inp_in" name="mobile" value="<?php echo $mobile; ?>"/>
 
    	<textarea placeholder="Address" name="address" class="text_in" style="display:none;"><?php echo $addesss; ?></textarea>

    	
                                
                
                      <div style="margin-left:10px;margin-top:20px;"><input type="submit" value="OK" class="sub_reg" name="domainbook"/></div>  
                </form>
                
             
                </div>
                 </center>  
        </div>
            
            

        </div>
    
      
    
    
    
</div>
<div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox"><br /> Inseart here your buying domain and Billing ID, Then Submit it</div>
          <?php include("footer.php"); ?>


<script type="text/javascript" src="js/prototype.js"></script>
	<script type="text/javascript" src="js/effect.js"></script>
	<script type="text/javascript" src="js/lightwindow.js"></script> 