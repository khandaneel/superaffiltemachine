<?php $display="block"; include('header.php');  $id=$_SESSION['id'];  $email=$_SESSION['email'];  
$key_title=trim($_POST['title_widgtes']);
$keywordntk=trim($_POST['dsc_widgtes']);

$descriptionnew=str_replace("rn","SAM",$keywordntk);
 $description=mysql_real_escape_string($descriptionnew);
    if(get_magic_quotes_gpc())
{
$description= stripslashes($description);
}

$description=str_replace("rn","",$description);
$description=str_replace("SAM","rn",$description);
$deletethis=mysql_query("DELETE FROM `tbl_widget` WHERE session_id='$id' and email='$email'  ");

$insertdataofwidget=mysql_query("INSERT INTO `tbl_widget`(`session_id`, `title`, `description`, `email`) VALUES ('$id','$key_title','$description','$email')");
?>
<style>ul {padding:0px;margin: 0px;}
#list li {list-style: none; p{padding:4px 0px;}
.img_load{margin-left:400px;}</style>


<?php include('wpupdated.php'); ?>


       
<?php $mainkey=mysql_query("SELECT * FROM  `tbl_offerword` where session_id='$id' ");
$mainkeyword=mysql_fetch_array($mainkey);
 $mkeyword=$mainkeyword['offerword'];?>
 
    <?php $Domain_p=mysql_query("SELECT * FROM `tbl_registation` WHERE session_id='$id' ");
$Domain_p=mysql_fetch_array($Domain_p);
 $Domain_p=$Domain_p['domain_name'];?>
   
      <?php   include("wp_slidemenu.php"); ?>
<body style="background:#f1f1f1;">'
<div class="niche_right" style="padding-top:60px;">
	
    <?php include('describe_details.php'); ?>
    

<div class="wp_bttns" style="width:90%;">
 <a  href='javascript:history.back(1);' ><div class="post_btns" style="float:left;">
        Back To Page 
        </div></a>
        
   
      <a  href='preview.php?SAM_id=<?php echo $id; ?>' target="_blank" >    <div class="post_btns" style="margin-right:20px; float:right;">
        Preview</div></a>
    
        <a  href="publish_conformation_new.php" target="_blank" style="color:#fff;"><div class="post_btns" style="margin-right:20px; float:right;" >
        Publish  </div> </a>
     
    </div>
    
  <div class="wp_seo_yoast">
      		<p style="text-align:center;font-size:20px;">Widgets Is Successfully Updated</p>
      </div>
 
 