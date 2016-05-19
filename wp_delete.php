<?php $display="block"; include('header.php');  $id=$_SESSION['id'];  $email=$_SESSION['email'];  
$del_id=$_GET['id'];
$msg=$_GET['msg'];
$del_res=mysql_query("DELETE FROM wp_posts WHERE session_id ='$del_id' and post_title='$msg'");
?>
<?php include('wpupdated.php'); ?>
<?php   include("wp_slidemenu.php"); ?>
<body style="background:#f1f1f1;">'
<div class="niche_right" style="padding-top:60px;">
<div class="wp_bttns" style="width:90%;">
 
        
   
      
    </div>
    
  <div class="wp_seo_yoast">
      		<p style="text-align:center;font-size:20px;"> Successfully Deleted</p>
      </div>