<?php ob_start(); include('header.php');

if(isset($_POST['signup']))
{
@$fname=mysql_real_escape_string($_POST['fname']);
@$lname=mysql_real_escape_string($_POST['lname']);
@$email=mysql_real_escape_string($_POST['email']);
@$password=mysql_real_escape_string($_POST['password']);
@$mobile=mysql_real_escape_string($_POST['mobile']);
@$membership=mysql_real_escape_string($_POST['membership']);
@$city=mysql_real_escape_string($_POST['city']);
@$country=mysql_real_escape_string($_POST['country']);	
@$address=mysql_real_escape_string($_POST['address']);
$insert=mysql_query("INSERT INTO tbl_user_registation (`fname`, `lname`, `email`, `password`, `mobileno`, `membership`, `city`, `country`, `address`, `status`) VALUES ('$fname', '$lname', '$email', '$password', '$mobile', '$membership', '$city', '$country', '$address', '0')");
if($insert)
{
$name="Super Affiliate Machine";
$from="sam@gmail.com";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ".$name." <".$from.">\r\n";
$subject="Activation link seo software account";

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
                      <a href="http://teespool.com/index.php" style="color:#fff" target="_blank">
                        <img src="http://teespool.com/images/logo1.png"  alt="Super Affiliate Machine(SAM)" style="max-width:100%">
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
                  <p>Hello '.$fname.' &nbsp; '.$lname.',</p>
<p>You are almost done! Please click this link below to activate your Super Affiliate Machine(SAM) account and get started.</p>
<p>
    <a href="http://superaffiliatemachine.com/demo/active.php?email='.$email.'" style="background:#4d89ce;color:#fff;display:inline-block;padding:10px 20px;font-size:12px;text-decoration:none;font-weight:900;border:0px solid #8e9c1f;border-radius:3px;line-height:1" target="_blank">Activate Your Account</a>
</p>
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
                    <a href="http://teespool.com/index.php" style="padding:10px;color:#5ac7f2" target="_blank"><br>
                    &copy; 2013 Super Affiliate Machine(SAM)</a>
                  </td>
                  <td align="right" style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;font-size:10px">
                    <h6 style="margin:0 0 5px 0;line-height:1.1;padding:0;font-weight:900;font-size:14px">Follow us and stay in touch</h6>
                    <a href="#" style="color:#5ac7f2;text-decoration:none" target="_blank">
                      <img src="http://irankmedia.com/test_seosw/images/rss.png" width="24" height="24" alt="RSS" style="max-width:100%;background:#fdb04c">
                    </a>
                    <a href="#" style="color:#5ac7f2;text-decoration:none" target="_blank">
                      <img src="http://irankmedia.com/test_seosw/images/twitter.png" width="24" height="24" alt="Twitter" style="max-width:100%;background:#7bbfe0">
                    </a>
                    <a href="#" style="color:#5ac7f2;text-decoration:none" target="_blank">
                      <img src="http://irankmedia.com/test_seosw/images/fb.png" width="24" height="24" alt="Facebook" style="max-width:100%;background:#6884c2">
                    </a>
                    <a href="#" style="color:#5ac7f2;text-decoration:none" target="_blank">
                      <img src="http://irankmedia.com/test_seosw/images/in.png" width="24" height="24" alt="LinkedIn" style="max-width:100%;background:#4487c6">
                    </a>
                    <a href="#" style="color:#5ac7f2;text-decoration:none" target="_blank">
                      <img src="http://irankmedia.com/test_seosw/images/g+.png" width="24" height="24" alt="Google+" style="max-width:100%;background:#bd3034">
                    </a>
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

$to=$email;

if(mail($to,$subject,$body,$headers))
{
header("location:dispaly_confirm.php");
 } 
 
 





}
}


 ?>