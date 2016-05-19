<?php ob_start(); $display="block"; include ('header.php'); include("slidemenu.php"); ?>
<?php
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

if(isset($ma))
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

	
}



?>


 
        
    
    <div class="niche_right">
<?php include('describe_details.php'); ?>
    
          
    	<div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Enter buying domain</span>
        
    </div>
    	
    	<div class="workingplace" style="height:450px;">
        	<div class="amazing">
            <p class="amzing1">You have successfully done keyword research and ordered your domain.</p><br />
<p class="amzing2">This may take few hours or days to complete your registation. Meanwhile, Let's get busy in developing your new optimized website</p><br />

	
    <a  href='wp.php'><div class="signup_in" style="width:150px; margin-left:260px; text-align:center;">Yes, Let's Do</div></a>
            </div>
        
        </div>
        </div>
        
                  <div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox">Let's get busy in <br />developing your new optimized website  click <br /><span class="samcolor">Yes, let's DO</span></div>
          <?php include("footer.php"); ?>