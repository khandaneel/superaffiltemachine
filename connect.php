<?php $display="block"; include('header.php'); ?>

<?php include('slidemenu.php'); ?>
<?php
if(isset($_POST['contctt']))
{
	$name=$_POST['name'];
	$from=$_POST['email'];
	$message=$_POST['message'];
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ".$name." <".$from.">\r\n";
$subject="SAM Support";

   $body='<table style="margin:0;padding:0;width:100%;border-collapse:collapse">
  <tbody><tr>
    <td style="margin:0;padding:0"></td>
    <td bgcolor="#FFFFFF" style="margin:0 auto;padding:0;border:1px solid #e5e5e5;display:block;max-width:600px;clear:both">
      <table bgcolor="#405364"style="margin:0;padding:0;width:100%">
        <tbody><tr>
          <td style="margin:0;padding:0"></td>
          <td style="margin:0;padding:0">
              <div style="max-width:600px;margin:0 auto;display:block;padding:10px 15px">
                <table style="margin:0;padding:0;width:100%">
                  <tbody><tr>
                    <td width="90" style="margin:0;padding:0;color:#fff;font-size:12px">
                      <a href="'.$domain_variable.'/index.php" style="color:#fff" target="_blank">
                        <img src="'.$domain_variable.'/images/logo1.png"  alt="Super Affiliate Machine(SAM)" style="max-width:100%">
                      </a>
                    </td>
                    <td align="right" style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;color:#fff;font-size:12px"></td>
                  </tr>
                </tbody></table>
              </div>

          </td>
          <td style="margin:0;padding:0"></td>
        </tr>
      </tbody></table>
      <div style="max-width:600px;margin:0 auto;display:block">
        <div style="padding:10px 15px">
          <table style="margin:0;padding:0;width:100%">
            <tbody><tr>
              <td style="margin:0;padding:20px 0;color:#4e4e4e;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif">
                  <p>Name '.$name.' <br><br> Email '.$from.',</p><br>
<p>'.$message.'</p>


              </td>
            </tr>
          </tbody></table>
        </div>
        <table cellspacing="0" style="margin:0;padding:0;border-top:1px solid #e5e5e5;color:#7b7b7b;width:100%">
          <tbody><tr>
            <td bgcolor="#405364" style="margin:0;padding:0;font-size:10px">
              <div style="padding:10px 15px">
              <table style="margin:0;padding:0;width:100%">
                <tbody><tr>
                  <td style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;font-size:10px">
                    <a href="'.$domain_variable.'/index.php" style="padding:10px;color:#5ac7f2" target="_blank"><br>
                    &copy; 2013 Super Affiliate Machine(SAM)</a>
                  </td>
                  <td align="right" style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;font-size:10px">
                    <h6 style="margin:0 0 5px 0;line-height:1.1;padding:0;font-weight:900;font-size:14px"></h6>
                    
                  </td>
                </tr>
              </tbody></table>
              </div>
            </td>
          </tr>
        </tbody></table>
      </div>
    </td>
    <td style="margin:0;padding:0"></td>
  </tr>
</tbody></table>';

$to="contactsamdesk@gmail.com";

mail($to,$subject,$body,$headers);
 
 
 
 $name=$_POST['name'];
	$from="contactsamdesk@gmail.com";

 
 $headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ".$name." <".$from.">\r\n";
$subject="SAM Support";

   $body='<table style="margin:0;padding:0;width:100%;border-collapse:collapse">
  <tbody><tr>
    <td style="margin:0;padding:0"></td>
    <td bgcolor="#FFFFFF" style="margin:0 auto;padding:0;border:1px solid #e5e5e5;display:block;max-width:600px;clear:both">
      <table bgcolor="#405364"style="margin:0;padding:0;width:100%">
        <tbody><tr>
          <td style="margin:0;padding:0"></td>
          <td style="margin:0;padding:0">
              <div style="max-width:600px;margin:0 auto;display:block;padding:10px 15px">
                <table style="margin:0;padding:0;width:100%">
                  <tbody><tr>
                    <td width="90" style="margin:0;padding:0;color:#fff;font-size:12px">
                      <a href="'.$domain_variable.'/index.php" style="color:#fff" target="_blank">
                        <img src="'.$domain_variable.'/images/logo1.png"  alt="Super Affiliate Machine(SAM)" style="max-width:100%">
                      </a>
                    </td>
                    <td align="right" style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;color:#fff;font-size:12px"></td>
                  </tr>
                </tbody></table>
              </div>

          </td>
          <td style="margin:0;padding:0"></td>
        </tr>
      </tbody></table>
      <div style="max-width:600px;margin:0 auto;display:block">
        <div style="padding:10px 15px">
          <table style="margin:0;padding:0;width:100%">
            <tbody><tr>
              <td style="margin:0;padding:20px 0;color:#4e4e4e;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif">
                  <p>Hey '.$name.',</p><br>
<p>Thank you for requesting our supporting team willbe get back you shrotly</p><br>

<p>Love,</p>
<p>SAM Team</p>
              </td>
            </tr>
          </tbody></table>
        </div>
        <table cellspacing="0" style="margin:0;padding:0;border-top:1px solid #e5e5e5;color:#7b7b7b;width:100%">
          <tbody><tr>
            <td bgcolor="#405364" style="margin:0;padding:0;font-size:10px">
              <div style="padding:10px 15px">
              <table style="margin:0;padding:0;width:100%">
                <tbody><tr>
                  <td style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;font-size:10px">
                    <a href="'.$domain_variable.'/index.php" style="padding:10px;color:#5ac7f2" target="_blank"><br>
                    &copy; 2013 Super Affiliate Machine(SAM)</a>
                  </td>
                  <td align="right" style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;font-size:10px">
                    <h6 style="margin:0 0 5px 0;line-height:1.1;padding:0;font-weight:900;font-size:14px"></h6>
                    
                  </td>
                </tr>
              </tbody></table>
              </div>
            </td>
          </tr>
        </tbody></table>
      </div>
    </td>
    <td style="margin:0;padding:0"></td>
  </tr>
</tbody></table>';

$to=$_POST['email'];

mail($to,$subject,$body,$headers);
	
	$res=mysql_query("INSERT INTO tbl_samcontact (`name`, `email`, `message`) VALUES ('$name', '$from', '$message')");
	if($res)
{
	echo "<script>";
echo "alert('Your request hasbeen Submitted')";
echo "</script>";
}
}

?>

 

<div class="niche_right">
<?php include('describe_details.php'); ?>

<div class="soc_media" style="margin-top:60px;">
	
    <div class="soc_media1" style="background:#fbb36a;margin-left:136px;">
    	<div class="soc_left">
    	<img src="images/sam.png" width="38" height="36">
        </div>
        <a href="contact.php"><div class="soc_right">
        Contact SAM Support
        </div></a>
    </div>
</div>
<div class="clear"></div>

<div class="contact_frm" style="display:block;">
<?php
$res=mysql_query("select * from tbl_user_registation where email='".$_SESSION['email']."'");
$res1=mysql_fetch_assoc($res);
?>
<center>
<!--p style="padding-top:10px;text-align:center;"><b>Submit Your Query</b></p-->
<br>
<form method="post" action="">
<div>
<input type="text" class="server_inp" name="name" placeholder="Name" value="<?php echo $res1['fname']; ?>" readonly>
</div>
<br>
<div>
<input type="hidden" class="server_inp" name="email" placeholder="Email" value="<?php echo $res1['email']; ?>" readonly>
</div>
<br>
<div>
<textarea placeholder="How can we help you with" class="server_inp" name="message" style="height:60px;resize:none;" required></textarea>
</div>
<br>
<div>
    <input type="submit" value="SEND" name="contctt" class="server_submit">
  
    </div>
    </form>
    <p style="text-align:center;margin-top:20px;"><b>(OR)</b></p>
    <p style="text-align:center;margin-top:20px;">Email : <a href="mailto:contactsamdesk@gmail.com" target="_top">contactsamdesk@gmail.com</a></p>
</center>

</div>

</div>