<?php $display="block"; include('header.php'); $id=$_SESSION['id'];  $email=$_SESSION['email'];   ?>

<?php include('editpageupad.php'); ?>

 <?php
$session_id=mysql_query("select * from tbl_registation where email='$email' and session_id='$id'");
 $seeid=mysql_fetch_array($session_id);
 $folderclint=explode(".",$seeid['domain_name']);
 if(isset($_GET['menuactive']))
{$keyword_key=$_GET['menuactive'];}  else { 

$keyword_key=mysql_query("select * from wp_posts where session_id='".$seeid['session_id']."'  GROUP BY post_title ORDER BY ID ASC");

$keyword_key=mysql_fetch_array($keyword_key);
$keyword_key=$keyword_key['post_title']; }
?> 
    
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckfinder/ckfinder.js"></script>

      <?php   include("wp_slidemenu1.php"); ?>
<body style="background:#f1f1f1;">
<div class="niche_right">
    
    <?php include('describe_details.php'); ?>
    
<form method="post" action="">
<div class="wp_bttns">
          <input type="submit" value="Add" class="post_btns" name="update" style="border:none;">
        
    </div>
    
 



<div class="clear"></div>



    <p class="wp_panel_heading">Title</p>
        <input type="text" class="wp_inp key_new" name="title" required style="text-transform:capitalize;"/><br>
        <div style="margin-top:20px;">
       
        
        <?php
        $i=0;
       $msres = mysql_query("select * from tbl_finalkey where session_id='$id'");
             while($ms1=mysql_fetch_assoc($msres))
       {
        ?>
        <input type="hidden" value="<?php echo $ms1['keyword']; ?>" class="change_key<?php echo $i; ?>" />
        <?php
        $i++;
       }
        ?>
        <span class="btn chanegkeyword">Get Keyword</span>
        </div>
        <br />