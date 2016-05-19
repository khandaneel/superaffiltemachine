<?php ob_start(); require_once('config.php'); 
if(!isset($_SESSION['email']))
{header("location:index.php");}
?>

<?php
if(isset($_POST['article_submit']))
{
    
    $keywordupdate=$_POST['heading'];
    $desc=mysql_real_escape_string($_POST['desc']);
    if(get_magic_quotes_gpc())
{
   $desc = stripslashes($desc);
}
$desc=str_replace("rn","",$desc);
        $id=$_POST['session_id'];
		$delet=mysql_query("DELETE FROM `tbl_article` WHERE session_id='$id' and keyword='$keywordupdate' ");
		$res1=mysql_query("INSERT INTO `tbl_article`(`session_id`, `keyword`, `article`, `activatation`) VALUES ('$id','$keywordupdate','$desc','0')");
header("Location:wp.php?menuactive=$keywordupdate");
ob_end_flush();
}
?>

<?php 
$id=$_SESSION['id'];
 if(isset($_GET['menuactive']))
{$keyword_key=$_GET['menuactive'];}
$article=mysql_query("select * from tbl_article where session_id='$id' and keyword='$keyword_key' and activatation='0' "); $article=mysql_fetch_array($article); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Super Affiliate Machine</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>



<div style="height:10px; width:100%"></div>

    
<form action="" method="post" enctype="multipart/form-data" style="width:98%; margin:auto;">

    <input type="hidden" name="session_id"  value="<?php echo $id;?>" /><br>
<input type="text"  name="heading" class="inp_order"  style="display:none;" value="<?php echo $keyword_key;  ?>"/>
    
    
    
<div class="wp_bttns1" style="position:absolute;right:10px;">
      <div style="margin-left:20px;float:left;"><a  href="<?php echo "wp.php"?>?menuactive=<?php echo $keyword_key;?>" ><input type="button" value="Cancel" class="post_btns1" name="cancel" style="border:none;"></a></div>
        <div style="margin-left:20px;float:left;"><input type="submit" value="Update" class="post_btns" name="article_submit" style="border:none;"></div>
        
    </div>
    
 <textarea id="editor2" name="desc" style="width:100%; min-height:400px;">
 <?php if(!empty($article['article']))
										{ echo $article['article'];} ?>
                                        
                                        </textarea>
  <div class="wp_bttns1" style="margin-top:10px;">
    <div style="margin-left:20px;float:left;"> <a  href="<?php echo "wp.php"?>?menuactive=<?php echo $keyword_key;?>" ><input type="button" value="Cancel" class="post_btns1" name="cancel" style="border:none;"></a></div>
        <div style="margin-left:20px;float:left;"><input type="submit" value="Update" class="post_btns" name="article_submit" style="border:none;"></div>
        
    </div>
    
 </form>
</body>

</html>

 <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
  <script type="text/javascript">
                  
    

        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

  </script>