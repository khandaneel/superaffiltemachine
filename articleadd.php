<?php include_once('config.php'); $keyword_key1=$_SERVER['QUERY_STRING']; $id=$_SESSION['id'];

$keyword_key= str_replace("%20"," ",$keyword_key1);


$dataselect=mysql_query("select * from tbl_article  WHERE session_id='$id' and keyword='$keyword_key'");
$textdata=mysql_fetch_array($dataselect);
$textdata['article'];
if($textdata['article']=="")
{
    
    $keywordurl = preg_replace('/\s+/','-',$keyword_key1);

    
$mainurl="http://ezinemark.com/a/".$keywordurl."/";
$homepage = file_get_contents($mainurl);



preg_match("/<div[^>]*class=\"l_search\">(.*?)<\\/div>/si", $homepage, $match);
 $content = $match[1]; 

preg_match("/href=\"(.*?)\"/i", $content, $matches);

$url = file_get_contents($matches[1]);

preg_match("/<div[^>]*id=\"art_content\">(.*?)<\\/div>/si", $url, $match);

$articletext=mysql_real_escape_string($match[1]);

$banned = array('.com', ' .com ', '.com ','.net', ' .net ', '.net ','.net', ' .co.in ', '.co.in ','.co.in', ' .org ', '.org ','.org', ' .org ', '.edu ', '.edu ','.uk', ' .us ', '.us ', '.uk ','.us', ' .gov ', '.gov','.org ','.info', ' .info ', '.biz ', 'www.', ' www.', 'http://', 'http:// ','â€“',' â€“ ',' â€“','Â',' Â','Â ');

$articletext  = trim(str_ireplace($banned, ' ', $articletext));
$articletext=str_replace("div","p",$articletext); 
$article_insrt=mysql_query("DELETE FROM `tbl_article` WHERE session_id='$id' and keyword='$keyword_key' ");

$article_insrt=mysql_query("INSERT INTO `tbl_article`(`session_id`, `keyword`, `article`,activatation) VALUES ('$id','$keyword_key','$articletext','1')");
$dataselect=mysql_query("select * from tbl_article  WHERE session_id='$id' and keyword='$keyword_key'");
$textdata=mysql_fetch_array($dataselect);
$textdata['article'];
}
$updatearticle=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_key' ");
$textdataPOST=mysql_fetch_array($updatearticle);

$textdataPOST=mysql_real_escape_string($textdataPOST['post_content']."<br>".$textdata['article']);

$updatearticle=mysql_query("UPDATE `wp_posts` SET `post_content`='$textdataPOST' WHERE session_id='$id' and post_title='$keyword_key'");
$updatearticlen=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_key' ");
$textdataPOSTn=mysql_fetch_array($updatearticlen);
echo  $textdataPOSTn['post_content'];

    ?>