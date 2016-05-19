<?php
if(isset($_POST['update']))
{
    $title=mysql_real_escape_string($_POST['title']);
    $desc=mysql_real_escape_string($_POST['desc']);
    $btn=$_POST['btn'];
    $focus_keyword=mysql_real_escape_string($_POST['focus_keyword']);
    $metadesc=mysql_real_escape_string($_POST['metadesc']);
    $seotitle=mysql_real_escape_string($_POST['seotitle']);
    $imageurl=mysql_real_escape_string($_POST['imageurl']);
    $vediourl=mysql_real_escape_string($_POST['vediourl']);
    $youtubeurlimages=explode("=",$vediourl);
    $youtubeurlimages="//www.youtube.com/embed/".$youtubeurlimages[1];
    
    
    $date=date('Y-m-d')." ".date('h:i:s', time());
 
$ooferw=mysql_query("SELECT  *  FROM `tbl_offerword` WHERE session_id='$id'");
$homeword=mysql_fetch_row($ooferw);
$import=mysql_query("INSERT INTO `wp_posts`(`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`,`session_id`) VALUES ('1','$date','$date','','$title','','publish','open','open','','$title','','','$date','$date','','0','','0','page','','0','$id')");


if($import)
{
echo "<script>";
echo "alert('Your Title has been Added Successfully')";
echo "</script>";
echo "<SCRIPT LANGUAGE='JavaScript'>
document.location.href='wp.php' </SCRIPT>";
}
    
}
?>