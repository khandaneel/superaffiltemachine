<?php ob_start(); require_once('config.php'); 
?>

<?php // $_SESSION['id']="3749seo";   $_SESSION['email']="khanda.neel@gmail.com";
$id=$_SESSION['id'];
 
$i=0;
$keyword_key1=mysql_query("select * from wp_posts where session_id='$id'");

while($keyword_key=mysql_fetch_array($keyword_key1))
{
$keyword_key=trim($keyword_key['post_title']); 
 


$keywordurl = preg_replace('/\s+/','-',$keyword_key);

	
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

$article_insrt=mysql_query("INSERT INTO `tbl_article`(`session_id`, `keyword`, `article`) VALUES ('$id','$keyword_key','$articletext')");
	}
	header("location:wp.php");
	ob_end_flush();
		
		?>