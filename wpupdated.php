<?php  
		
		if(isset($_GET['domainid']))
		{
			$_SESSION['id']=$_GET['domainid'];
		}
		$id=$_SESSION['id'];
	
	 
                 $i=0; $j=0;
 $session_id=mysql_query("select * from tbl_registation where email='$email' and session_id='$id'");
 $seeid=mysql_fetch_array($session_id);
 $folderclint=explode(".",$seeid['domain_name']);
 if(isset($_GET['menuactive']))
{$keyword_key=$_GET['menuactive'];}  else { 

$keyword_key=mysql_query("select * from wp_posts where session_id='".$seeid['session_id']."'  GROUP BY post_title ORDER BY ID ASC");

$keyword_key=mysql_fetch_array($keyword_key);
$keyword_key=$keyword_key['post_title']; }
 

if(isset($_POST['header_submit']))
{
    $keywords=$_POST['keywords'];
    $desc=mysql_real_escape_string($_POST['desc']);
    $file=$_POST['file'];
    $check=$_POST['check'];
     if($check=='def')
	{
		$width="940";
		$height="198";
	}
	else{
		$width=$_POST['width'];
		$height=$_POST['height'];
		}
    
	
    
        if(!empty($_FILES['file']['name']))
    {
        
        $image2=$_FILES['file']['name'];
$getExt = explode ('.', $image2);
$file_ext = $getExt[count($getExt)-1];
$rand_name = md5(time());
$rand_name= rand(0,999999999);

$imagename1=$rand_name.".".$file_ext;

copy($_FILES['file']['tmp_name'],"Products/".$imagename1);
    }
    
    else
    {
    $imagename1='';    

    }
    
    $id=$_POST['session_id'];
    $res=mysql_query("INSERT INTO header (`session_id`, `keyword`, `description`, `image`, `width`, `height`) VALUES ('$id', '$keywords', '$desc', '$imagename1', '$width', '$height')");
    $email = $_SESSION['email'];
//echo $email;

      
       //The form has been submitted, prep a nice thank you message
       $output = '<h1>Thanks for your file and message!</h1>';

       $flags = 'style="display:none;"';
 $to = "contactsamdesk@gmail.com";

        $subject = 'Order Header';

        $message="key words:$keywords \n\n\n\n Description:$desc \n\n\n\n width:$width \n\n\n\n heigt:$height";
       @ $attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
        $filename = $_FILES['file']['name'];

date_default_timezone_set('Asia/Kolkata');
        $boundary =md5(date('r', time()));
$from=$_SESSION['email'];



$headers ="FROM:$from";
        //$headers = "From:mpriyanka.irank@gmail.com\r\nReply-To:$email";
        $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";




$message.="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment

$attachment
--_1_$boundary--";


$ma= mail($to, $subject, $message,$headers);

if(isset($ma))
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Header order has been completed Successfully.')
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

<?php

if(isset($_POST['upload_bann']))

{
	if($_FILES['fileup']['name'])
    {
   $image2=$_FILES['fileup']['name'];
      $image_1=$_FILES['fileup']['tmp_name'];
	  
	  copy($image_1,"images/".$image2);
    }
    else{$image2=$_POST['file'];
    $image2=$_POST['file'];
    
    }
    
	
	$res_h=mysql_query("select * from tbl_wp_headers where session_id='$id' ");
	if(mysql_num_rows($res_h)==0)
	{
	
		$header_res=mysql_query("INSERT INTO `tbl_wp_headers` (`session_id`, `imagename`) VALUES ('$id', '$image2')");
if($header_res)
{
 echo "<script>";
echo "alert('Header Successfully Uploaded')";
echo "</script>";
}
	}
	else
	{
		$header_res=mysql_query("UPDATE tbl_wp_headers  SET imagename='$image2' WHERE session_id='$id'");
		if($header_res)
{
 echo "<script>";
echo "alert('Header Successfully Uploaded')";
echo "</script>";
}
	}
}


?>

<?php
if(isset($_POST['article_submit']))
{
    
    $keywordupdate=$_POST['heading'];
    $desc=mysql_real_escape_string($_POST['desc']);
        $id=$_POST['session_id'];
		$delet=mysql_query("DELETE FROM `tbl_article` WHERE session_id='$id' and keyword='$keywordupdate' ");
		$res1=mysql_query("INSERT INTO `tbl_article`(`session_id`, `keyword`, `article`, `activatation`) VALUES ('$id','$keywordupdate','$desc','0')");

       if($res1)
    {
    echo "<script>";
echo "alert('New Article Successfully Submitted')";
echo "</script>";

}
}
?>



<?php
if(isset($_POST['tagline']))
{
    
    $tagkey=$_POST['tagkey'];
    $taglinein=mysql_real_escape_string($_POST['taglinein']);
        $id=$_POST['session_id'];
		
mysql_query("DELETE FROM `tbl_tagline` WHERE `session_id`='$id'");
$tagin=mysql_query("INSERT INTO `tbl_tagline`(`session_id`, `tagline`) VALUES ('$id','$taglinein')");
       if($res1)
    {
    echo "<script>";
echo "alert('New Tag Line Successfully Submitted')";
echo "</script>";

}
}
?>






<?php
if(isset($_POST['article_order_submit']))
{
    
    $keywords=$_POST['heading'];
    $desc=mysql_real_escape_string($_POST['desc']);
        $id=$_POST['session_id'];
    
    $keyword=$_POST['article'];
    $res1=mysql_query("INSERT INTO orderarticle(`session_id`, `heading`, `description`, `keyword`) VALUES ('$id', '$keywords', '$desc', '$keyword')");
   
   
   $name="From SEO Software";
   $email=$_SESSION['email'];
   $headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ".$name." <".$email.">\r\n";
$to="contactsamdesk@gmail.com";
$body="
<table width='500px' style='background-color:#666666;'>
<tr> 
<td  colspan='2' align='center' style='background-color:#CCCCCC'>
<font color='#006699' face='Arial, Helvetica, sans-serif' size='+3'>Order Article</font>
</td> 
</tr>
<tr> 
<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
sans-serif;font-size:14px;color:#993300;text-align:right;
padding-right:50px;width:250px;'>Topic :
</td>
<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
sans-serif;font-size:12px;color:#000;text-align:left;
width:250px;'>".$keywords."
</td>
</tr>
  <tr> 
<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
sans-serif;font-size:14px;color:#993300;text-align:right;
padding-right:50px;width:250px;'> Description
</td>
<td style='background-color:#FFFFFF;font-family:Arial, Helvetica, 
sans-serif;font-size:12px;color:#000;text-align:left;
width:250px;'>".$desc."
</td>
</tr> 
   
</table>";


$ma= mail($to, "Order For Article", $body,$headers);

if(isset($ma))
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Your article order has been Submitted Successfully.')
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
<?php
if(isset($_POST['ImageUrl']))
{
    
    $keywordupdate=$_POST['keywordunq'];
    $urlimages=mysql_real_escape_string($_POST['urlimages']);
        $id=$_POST['session_id'];
		
		$delet=mysql_query("DELETE FROM `tbl_images` WHERE session_id='$id' and keyword='$keywordupdate' ");

			$resimg=mysql_query("INSERT INTO `tbl_images`(`keyword`, `session_id`, `images`, `activatation`) VALUES ('$keywordupdate','$id','$urlimages','0')");
	
		
		
       if($resimg)
    {
    echo "<script>";
echo "alert('Image has been submited Successfully')";
echo "</script>";

}
}
?>

<?php
if(isset($_POST['seotitlesum']))
{
    
    $keywordupdate=$_POST['keywordunq'];
    $urlimages=mysql_real_escape_string($_POST['seotitle']);
        $id=$_POST['session_id'];
		
	$resimg=mysql_query("INSERT INTO `tbl_metadata`(`session_id`, `fkey`, `seoarticle`, `keyword`, `cato`) VALUES  ('$id','','$urlimages','$keywordupdate','seotit')");
	
		
       if($resimg)
    {
    echo "<script>";
echo "alert('SEO title has been submited Successfully')";
echo "</script>";

}
}
?>






<?php
if(isset($_POST['fukkeysum']))
{
    
    $keywordupdate=$_POST['keywordunq'];
    $urlimages=mysql_real_escape_string($_POST['fukkey']);
        $id=$_POST['session_id'];
		
	$resimg=mysql_query("INSERT INTO `tbl_metadata`(`session_id`, `fkey`, `seoarticle`, `keyword`, `cato`) VALUES  ('$id','$urlimages','','$keywordupdate','fkey')");
	
		
       if($resimg)
    {
    echo "<script>";
echo "alert('Focus keyword has been submited Successfully')";
echo "</script>";

}
}
?>


<?php
if(isset($_POST['metakeysum']))
{
    
    $keywordupdate=$_POST['keywordunq'];
    $urlimages=mysql_real_escape_string($_POST['metakey']);
        $id=$_POST['session_id'];
		$article_insrt=mysql_query("DELETE FROM `tbl_meta_description_final` WHERE session_id='$id' and keyword='$keywordupdate' ");
		
		$metain=mysql_query("INSERT INTO `tbl_meta_description_final`(`session_id`, `metadescription`, `keyword`, `activatation`) VALUES ('$id','$urlimages','$keywordupdate','0')");

	
		
       if($metain)
    {
    echo "<script>";
echo "alert('Meta Data has been submited Successfully')";
echo "</script>";

}
}
?>




<?php
if(isset($_POST['VedioUrl']))
{
    
    $keywordupdate=$_POST['keywordunq'];
    $urlimages=mysql_real_escape_string($_POST['urlimages']);
        $id=$_POST['session_id'];
		
		if (preg_match('/youtube/',$urlimages))
		{
			$urlimages=explode("=",$urlimages);
	$urlimages="//www.youtube.com/embed/".$urlimages[1];
		} else {
			$urlimages=mysql_real_escape_string($_POST['urlimages']);
			}
		
	
	
	
		$delet=mysql_query("DELETE FROM `tbl_youtube` WHERE session_id='$id' and keyword='$keywordupdate' ");
	
			$resimg=mysql_query("INSERT INTO `tbl_youtube`(`keyword`, `session_id`, `youtube`, `activatation`) VALUES ('$keywordupdate','$id','$urlimages','0')");
	
		
		
       if($resimg)
    {
    echo "<script>";
echo "alert('Video has been submited Successfully')";
echo "</script>";

}
}
?>