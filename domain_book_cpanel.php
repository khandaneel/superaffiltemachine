<?php $display="block"; include('header.php'); 


$id=$_SESSION['id'];

if(isset($_POST['domainbook']))
{
	$domainname=trim($_POST['domainname']);
	$domainname=strtolower($domainname);
	$domainnameid=trim($_POST['domainnameid']);
	$email=trim($_POST['email']);
	
	mysql_query("INSERT INTO `tbl_c_s_record` (`session_id`, `domain_name`, `email`, `ordernumber`) VALUES ('$id', '$domainname', '$email', '$domainnameid')");
	
	$book="Domain BUY";
	$regdeatil=mysql_query("INSERT INTO `tbl_registation`(`session_id`, `domain_name`, `name`,`email`, `mobile`, `approved`, `status`, `acess_category`) VALUES ('$id','$domainname','".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','Pending','1','access')");
	
	

$fileclient=trim($_POST['domainname']);
$fileclient=strtolower($fileclient);
$folderclint=explode(".",$fileclient);
$folder_add=$id.$folderclint[0];
	
/*
mkdir($folder_add);

$zip = new ZipArchive;
if ($zip->open('wp-config-sample.zip') === TRUE) {
    $zip->extractTo($folder_add.'/');
    $zip->close();}*/
	
}


/* db selecting */
	
	
/* db selecting */
	

if(isset($_POST['cpanel_details']))
{
	$cpanelurl=trim($_POST['cpanelurl']);
	$cpanelusername=trim($_POST['cpanelusername']);
	$cpanelpassword=trim($_POST['cpanelpassword']);
	$domain=trim($_POST['domain']);
	$res=mysql_query("UPDATE tbl_c_s_record SET cpanelurl='$cpanelurl', cpanelusername='$cpanelusername',cpanelpassword='$cpanelpassword' WHERE session_id='$id'");
	
	$to="madhab.irank@gmail.com";
		
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
					padding-right:50px;width:250px;'> Domain name : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['domain'])."
				</td>
			</tr>
			
			
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> cPanel URL : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['cpanelurl'])."
				</td>
			</tr>
			
			
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> cPnael Useraname : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['cpanelusername'])."
				</td>
			</tr>
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> cPanel Password : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['cpanelpassword'])."
				</td>
			</tr>
			
			
			
			
		    
		</table>";
	$ma= mail($to, "Domain BUY", $body,$headers);
	
	
	if($res)
	{
		header('location:userregitation.php');
	}
	
}
if(isset($_POST['cpanel_server']))
{
	$hostingurl=trim($_POST['hostingurl']);
	$hostingusername=trim($_POST['hostingusername']);
	$hostingpassword=trim($_POST['hostingpassword']);
	$domainuserid=trim($_POST['domainuserid']);
	$domainpassword=trim($_POST['domainpassword']);
	
	$res=mysql_query("UPDATE tbl_c_s_record SET hostingurl='$hostingurl', hostingusername='$hostingusername',hostingpassword='$hostingpassword',domainuserid='$domainuserid',domainpassword='$domainpassword' WHERE session_id='$id'");
	
	
	$to="madhab.irank@gmail.com";
		
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
					padding-right:50px;width:250px;'> Domain name : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['domain'])."
				</td>
			</tr>
			
			
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Hosting URL : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['hostingurl'])."
				</td>
			</tr>
			
			
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Server Useraname : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['hostingusername'])."
				</td>
			</tr>
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Server Password : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['hostingpassword'])."
				</td>
			</tr>
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Domain User : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['domainuserid'])."
				</td>
			</tr>
			<tr> 
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:14px;color:#993300;text-align:right;
					padding-right:50px;width:250px;'> Domain Password : 
				</td>
				<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
				sans-serif;font-size:12px;color:#000;text-align:left;
					width:250px;'>".trim($_POST['domainpassword'])."
				</td>
			</tr>
			
			
			
			
		    
		</table>";
	$ma= mail($to, "Domain BUY", $body,$headers);
	
	
	
	
	if($res)
	{
		header('location:userregitation.php');
	}
	
}



?>


<?php 
    date_default_timezone_set('Asia/Calcutta');
    $dm="Domain Booked<br>"."<span class='samcolor'>".$_POST['domainname']."</span>";
     $activtytext=mysql_real_escape_string($dm);
    
     $timeno=date('h:i:s a', time());
     $monthday=date("d M");
     $year=date("Y");
  
 $imgin=mysql_real_escape_string('<img src="images/activity_icon3.png" style="margin-top:-2px;"  width="21" />');
 $activity=mysql_query("INSERT INTO `activity`(`activityname`, `email`, `datetime`, `month`, `year`, `sessionid`, `status`,`img`,`color`,`colorborder`) VALUES ('$activtytext','".$_SESSION['email']."','$timeno','$monthday','$year','".$_SESSION['id']."','1','$imgin','#52b4af','".$_SESSION['color']."')");
    
     ?>




<?php include('slidemenu.php'); ?>




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
        <span class="niche_name"><br /><h4>Congratulations, Domain registration is successfully completed  </h4></span>
    </div>
     <a class='youtube' href="http://irankmedia.com/sam/capture-003-2.mp4"><div class="demo_video_pk">
    	<img src="images/demo_logo.png" />
    </div></a>
  <center> 
  <div class="cpanl_server">
  	
    
   Now it's time to host your website on server. After submiting the details <span class="bluecolor">'Build Website'</span> will be unlocked.  
   </div>
   
   <div class="clear"></div>
  <!-- 
  <div class="btns">
 <!--   <div class="cpanl_server_btn" id="samserver">
   	 <span class="samcolor">TEST</span> Server
   </div>
  
   <div class="cpanl_server_btn" style="margin-left:160px;" id="ownserver">
   	 Use SAM server
   </div>
 <div class="cpanl_server_btn" id="buyserver" >
   	 Buy Hosting
   </div>
   </div>
  -->
  
  <!-- 
   <div class="own_server_details1" >
   
 <div class="domain_display" style="display:block; height:200px;  width:390px; margin:auto;">
            
            <h2><u>Buy Hosting here</u></h2><br />
     			<div style="width:341px;margin:auto;">  <a style="cursor:pointer;" onclick="return windowpop('http://goo.gl/kZxagS', 1100, 600)"> <div class="domname" style="float: left;margin-top: -10px;border-bottom: none;"><img src="images/na.jpg" /></div></a>
             <a style="cursor:pointer;" onclick="return windowpop('https://in.godaddy.com/hosting/web-hosting.aspx?isc=dbcom749&ci=9009', 1100, 600)"><div class="domname" style="float: left;margin-top: -10px;border-bottom: none;"><img src="images/go.jpg" /></div></a><br />
            <br />
         <h4>After completing web hosting registration you will get an email with the hosting details,<br /> <span class="clickmee">Please click here</span> <br />to submit the details</h4>
            </div>
        </div>
   
   </div>
   
   <div class="own_server_detail" style="display:block;">
   
   
   <?php 
   
   $cpanel=mysql_query("SELECT * FROM `tbl_wel_cpanel` WHERE email='".$_SESSION['email']."'");
   $cpnale_det=mysql_fetch_array($cpanel);   
   ?>
 <form action="userregitation.php" method="post">
   <br />
   	
   
   
     <input type="hidden" name="ftppass" class="server_inp"  value="<?php echo $ftp[0]; ?>"/>
  
    
    <br />
    <div>
    	Registered Domain<input type="text" name="adondomin" class="server_inp"  value="<?php echo $adondomin;?>" readonly="readonly"/>
    </div> <br />
    <div>
    <input type="submit" value="Submit" name="Confirm11" class="server_submit" />
  
  <div class="gif_im">
        	<img src="images/be.gif" />
        </div>
  
    </div>
 
    
    </form>
   
   </div>
   <div class="own_server_details">
   
   
   <?php 
   
   $cpanel=mysql_query("SELECT * FROM `tbl_wel_cpanel` WHERE email='".$_SESSION['email']."'");
   $cpnale_det=mysql_fetch_array($cpanel);   
   ?>
 <form action="userregitation.php" method="post">
   <br />
   	<p><b>Confirm your server details</b></p>
    <br />
    <div>
    	<input type="text" class="server_inp" required="required" name="hostname" placeholder="eg: godaddy.com"/>
    </div>
    
    <br />
    <div>
    	<input type="text" class="server_inp" required="required" name="cpaneluser"  placeholder="host username"/>
    </div>
    
    <br />
    <div>
    	<input type="text" class="server_inp" required="required" name="cpanelpass"  placeholder="host password"/>
    </div>
 
   
   
     <input type="hidden" name="ftppass" class="server_inp"  value="<?php echo $ftp[0]; ?>"/>
  
    
    <br />
    <div>
    	Registered Domain<input type="text" name="adondomin" class="server_inp"  value="<?php echo $adondomin;?>"/>
    </div> <br />
    <div>
    <input type="submit" value="Submit" name="serverdetails" class="server_submit" />
  
  <div class="gif_im">
        	<img src="images/be.gif" />
        </div>
  
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
   
 -->
 
 
 
 <div class="cpnale_back">
 
 <a href="buyhosting.php"><div class="buynewhosting">
 	
 </div></a>
 
 <div class="c_ba">
<?php
 $res_domain=mysql_query("select * from tbl_c_s_record where session_id='$id'");
 $res_domain1= mysql_fetch_assoc($res_domain);
 
 ?>
  <?php
			$domains=mysql_query("select * from tbl_registation where session_id='$id'");
			$domains1=mysql_fetch_assoc($domains);
			
			$domains_cpanel=mysql_query("select * from tbl_wel_cpanel where email='$email'");
			$domains_cpanel1=mysql_fetch_assoc($domains_cpanel);
			
			$domains_server=mysql_query("select * from tbl_wel_server where email='$email'");
			$domains_server1=mysql_fetch_assoc($domains_server);
			
			?>
<form method="post" action="">
<div class="left_cpanel">
<div class="h5" >Option 1<br /><br />If you have cPanel Dteails</div>
		<div class="in_bc">
        	<input type="text" class="inp_cpanel" name="cpanelurl" placeholder="cPanel Access URL" required="required" value="<?php echo $domains_cpanel1['hostname']; ?>" />
           
            <input type="hidden" value="<?php echo $domains1['name']; ?>" name="name" />
            <input type="hidden" value="<?php echo $domains1['email']; ?>" name="email" />
            
        </div>
        
        <div class="in_bc">
        	<input type="text" class="inp_cpanel" name="cpanelusername" placeholder="User Name" required="required" value="<?php echo $domains_cpanel1['username']; ?>"/>
        </div>
        
        <div class="in_bc">
        	<input type="password" class="inp_cpanel" name="cpanelpassword" placeholder="Password" required="required" value="<?php echo $domains_cpanel1['password']; ?>"/>
        </div>
        
        <div class="in_bc">
        	<input type="text" class="inp_cpanel" name="domain" placeholder="Domainname.com" required="required" value="<?php echo  $res_domain1['domain_name']; ?>" readonly="readonly"/>
        </div>
        <div class="in_bc1">
        	<input type="Submit" class="sub_cpanel" value="Submit" name="cpanel_details"/>
        </div>
</div>
 </form>

<div class="right_cpanel">
<div class="h5" >Option 2<br /><br />If You Have Hosting and Domain Login details</div>
<form method="post" action="">
	<div class="in_bc1">
	<strong> Hosting Merchant</strong>
        	<input type="text" class="inp_cpanel" name="hostingurl" placeholder="Eg: godaddy.com, Hostgator.com" required="required" value="<?php echo  $domains_server1['url']; ?>"/>
        </div>
        
        <div class="in_bc1">
        	<input type="text" class="inp_cpanel" name="hostingusername" placeholder="User Name" required="required" value="<?php echo  $domains_server1['username']; ?>"/>
              <input type="hidden" value="<?php echo $domains1['name']; ?>" name="name" />
            <input type="hidden" value="<?php echo $domains1['email']; ?>" name="email" />
        </div>
        
        <div class="in_bc1">
        	<input type="password" class="inp_cpanel" name="hostingpassword" placeholder="Password" required="required" value="<?php echo  $domains_server1['password']; ?>" />
        </div>
        
        <div class="in_bc1">
        	<img src="images/dns.jpg" />
        </div>
        
        
        <div class="in_bc1">
        	<input type="text" class="inp_cpanel" name="domainuserid" placeholder="Domian User Id" />
        </div>
        
        <div class="in_bc1">
        	<input type="password" class="inp_cpanel" name="domainpassword" placeholder="Domian Password" />
        </div>
        
        <div class="in_bc1">
        	<input type="text" class="inp_cpanel" name="domain" placeholder="Mydomian.com" value="<?php echo  $res_domain1['domain_name']; ?>" required="required" readonly="readonly" />
        </div>
        
         <div class="in_bc1">
        	<input type="Submit" class="sub_cpanel" value="Submit" name="cpanel_server"/>
        </div>
        
        </form>
</div>
 </div>

 
 </div>
   
 
</div>

 <!--div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox">Add your domain in  <br />    <span class="samcolor">SAM server</span><br /> or<br /> Your OWN server</div-->