<?php $display="block"; include('header.php'); 


$id=$_SESSION['id'];

if(isset($_POST['domainbook']))
{
	
	$address=mysql_real_escape_string($_POST['address']);
	$book="Domain BUY";
	$regdeatil=mysql_query("INSERT INTO `tbl_registation`(`session_id`, `domain_name`, `name`,`email`, `mobile`, `address`, `status`) VALUES ('$id','".$_POST['domainname']."','".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','$address','$book')");
	
	
	$to="sandeep4549@gmail.com";
		
        $name=trim($_POST['name']);
		$from=trim($_POST['email']);
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$headers .= "From: ".$name." <".$from.">\r\n";
		
		$body="
		<table width='500px' style='background-color:#666666;'>
			<tr> 
				<td  colspan='2' align='center' style='background-color:#CCCCCC'>
					<font color='#006699' face='Arial, Helvetica, sans-serif' size='+3'>Domain Book</font>
				</td> 
			</tr>
		
		
			
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'>Name :
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['name'])."
				</td>
			</tr>
			
			   	<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Email
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['email'])."
				</td>
			</tr> 
			
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Mobile : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['mobile'])."
				</td>
			</tr>
			
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Domain name : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['domainname'])."
				</td>
			</tr>
			
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Address 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($address)."
				</td>
			</tr>
			
		    
		</table>";
	$ma= mail($to, "Domain BUY", $body,$headers);

/*if(isset($ma))
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Your Details has been Submitted Successfully.')
    </SCRIPT>");

}
else
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('\u2297\u2297\u2297 Errors in your  submission ..!!!!.\u2297\u2297\u2297')
	</SCRIPT>");
	}
 */
	
}?>





 






<?php include('slidemenu.php'); ?>

<link rel="stylesheet" href="css/lightwindow.css" />


<div class="niche_right">
<?php include('describe_details.php'); ?>

<!-- retrive domin from register -->
<?php 
$email=$_SESSION['email'];
$bookdomin=mysql_query("SELECT * FROM `tbl_registation` WHERE session_id='$id' and email='$email'");
$fetchdomin=mysql_fetch_array($bookdomin);
$adondomin=$fetchdomin['domain_name'];
$ftp=explode('.',$adondomin);
?>


<div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br /><h2>Congratulations, Domain registration is sucessfuly completed  </h2></span>
    </div>
  <center> 
  <div class="cpanl_server">
  	
    
   Now it's time to host your website either on your own server or SAM server. After submiting the details <span class="bluecolor">'Build Website'</span> will be unlocked.  
   </div>
   
   <div class="btns">
<a href="domain_book_cpanel.php">   <div class="cpanl_server_btn" >
   	 <span class="samcolor">TEST</span> Server
   </div></a>
   
  <a href="domain_book_cpanel.php">  <div class="cpanl_server_btn" >
   	 Own Server
   </div></a>
   <a href="domain_book_cpanel_host.php">  <div class="cpanl_server_btn" >
   	 Buy Hosting
   </div></a>
   </div>
   
   <div class="own_server_details1" style="display:block;">
   
 <div class="domain_display" style="display:block; height:200px;  width:390px; margin:auto;">
            
            <h2><u>Buy Hosting here</u></h2><br />
     			<div style="width:341px;margin:auto;"> <a href="http://www.namecheap.com/?aff=73936" params="lightwindow_type=external,lightwindow_width=1100,lightwindow_height=600" class="lightwindow " title="null" rel="null">  <div class="domname" style="float: left;margin-top: -10px;border-bottom: none;"><img src="images/na.jpg" /></div></a>
            <a href="https://www.godaddy.com" params="lightwindow_type=external,lightwindow_width=1100,lightwindow_height=600" class="lightwindow " title="null" rel="null">	<div class="domname" style="float: left;margin-top: -10px;border-bottom: none;"><img src="images/go.jpg" /></div></a><br />
            <br />
         <h4>After completing web hosting registration you will get an email with the hosting details.</h4>
            </div>
        </div>
   
   </div>
   
   
   <div class="own_server_details">
   
 <form action="userregitation.php" method="post">
   <br />
   	<p><b>Submit your cPanel details</b></p>
    <br />
    <div>
    	<input type="text" class="server_inp" required="required" name="hostname" placeholder="Host Name ( eg. example.com )"/>
    </div>
    
    <br />
    <div>
    	<input type="text" class="server_inp" required="required" name="cpaneluser" placeholder="cPanel username"/>
    </div>
    
    <br />
    <div>
    	<input type="text" class="server_inp" required="required" name="cpanelpass" placeholder="cPanel password"/>
    </div>
    <br />
    <div>
    	<input type="text" class="server_inp" required="required" name="cpanelskinname" placeholder="cPanel skinname ( eg. x,x1,x2 )"/>
    </div>
    <br />
     
    <div>
    	FTP Password: <input type="text" name="ftppass" class="server_inp"  value="<?php echo $ftp[0]; ?>"/>
    </div>
    
    <br />
    <div>
    	Registered Domain<input type="text" name="adondomin" class="server_inp"  value="<?php echo $adondomin;?>"/>
    </div> <br />
    <div>
    <input type="submit" value="Submit" name="Confirm11" class="server_submit" />
  
    </div>
 
    
    </form>
   
   </div>
   
   <div class="samserver">
<form action="userregitation.php" method="post">
   <br />
   	<p><b>FTP Details</b></p>
    <br />
    <div>
    	FTP Password: <input type="text" name="ftppass" class="server_inp" readonly="readonly" value="<?php echo $ftp[0]; ?>"/>
    </div>
    
    <br />
    <div>
    	Registered Domain<input type="text" name="adondomin" class="server_inp" readonly="readonly" value="<?php echo $adondomin;?>"/>
    </div>
    
    <br />
    
    <div>
    <input type="submit" value="Confirm" name="Confirm" class="server_submit" id="Confirmadon"/>
    <span class="Confirmadonwait"><img src="images/loading.gif" height="30" width="30" /> Wait a moment..</span>
    </div>
  
     </form>
   </div>
   
 
   
 
</div>

 <div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox">Add your domain in  <br />    <span class="samcolor">SAM server</span><br /> or<br /> Your OWN server</div>

<?php include('footer.php'); ?>


<script type="text/javascript" src="js/prototype.js"></script>
	<script type="text/javascript" src="js/effect.js"></script>
	<script type="text/javascript" src="js/lightwindow.js"></script> 