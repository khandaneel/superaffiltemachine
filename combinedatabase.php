<?php ob_start();  include_once('config.php');
error_reporting(0);
$id=$_SESSION['id'];

$getkeyword=mysql_query("select * from wp_posts where session_id='$id'  GROUP BY post_title ORDER BY ID ASC");

while($keywordvalue=mysql_fetch_array($getkeyword))
{
$keyword_key=$keywordvalue['post_title'];

$tbl_images=mysql_query("select * from tbl_images where session_id='$id' and keyword='$keyword_key'");
$tbl_images=mysql_fetch_array($tbl_images);


$tb_anchoretext=mysql_query("SELECT * FROM `tb_anchoretext` WHERE session_id='$id' and keyword='$keyword_key'"); 

$tb_anchoretext=mysql_fetch_array($tb_anchoretext);


$tbl_article=mysql_query("select * from tbl_article where session_id='$id' and keyword='$keyword_key'");

$tbl_article=mysql_fetch_array($tbl_article);
$tbl_articlenew=$tbl_article['article'];


 
$tbl_internallinking=mysql_query("select * from tbl_internallinking where session_id='$id' and keyword='$keyword_key'");

$tbl_internallinking=mysql_fetch_array($tbl_internallinking);


$tbl_youtube=mysql_query("select * from tbl_youtube where session_id='$id' and keyword='$keyword_key'");
 
$tbl_youtube=mysql_fetch_array($tbl_youtube);




$description=mysql_real_escape_string("<br><br><img src='".$tbl_images['images']."' height='200' alt='".$tbl_images['images']."' /><br><br>".$tbl_internallinking['anchorlink']."<br><br>".$tbl_articlenew."<br><br>".$tb_anchoretext['anchoretext']."<br><br><iframe src='".$tbl_youtube['youtube']."' height='300' width='610' frameborder='0' allowfullscreen ></iframe><br>");


 
$tbl_meta=mysql_query("select * from `tbl_meta_description_final` where session_id='$id' and keyword='$keyword_key'");

$tbl_meta=mysql_fetch_array($tbl_meta);
 $metades=mysql_real_escape_string($tbl_meta['metadescription']);

$updatearticle=mysql_query("UPDATE `wp_posts` SET `post_content`='$description',`meta_description`='$metades' WHERE session_id='$id' and post_title='$keyword_key'");
						
}
			
	
	
	
	
					 
?>
 
 

 