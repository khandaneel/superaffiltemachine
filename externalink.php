<?php  include_once('config.php'); $keyword_key=$_SERVER['QUERY_STRING']; $id=$_SESSION['id'];

  $keyword_keynew= str_replace("%20"," ",$keyword_key);
   $keyword_keynewmm= str_replace("%20","+",$keyword_key);

/*
$url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=".$keyword_key.'&start=5';
$body = file_get_contents($url);
$json = json_decode($body);
$x=0;
$mataurl=$json->responseData->results[$x]->url;
$anchoretext=$json->responseData->results[$x]->title;     
Anchore text start functionality
$anchoretext=explode(" | ",$anchoretext);
  
     $banned = array('.com', ' .com ', '.com ','.net', ' .net ', '.net ','.net', ' .co.in ', '.co.in ','.co.in', ' .org ', '.org ','.org', ' .org ', '.edu ', '.edu ','.uk', ' .us ', '.us ', '.uk ','.us', ' .gov ', '.gov','.org ','.info', ' .info ', '.biz ', ' amazon ', 'amazon ', ' amazon', 'amazon', ':', 'Amazon', 'Amazon ', ' Amazon', ' WebMD ', 'WebMD', 'WebMD ', ' WebMD', 'Webmd', 'Webmd '); //add more words as you want. KEEP THE SPACE around the word 

$anchoretextnew  = trim(str_ireplace($banned, ' ', $anchoretext[0])); */


$mainurl="http://www.bing.com/search?q=".$keyword_keynewmm."";
$homepage = file_get_contents($mainurl);



preg_match("/<h2>(.*?)<\\/h2>/si", $homepage, $match);
 $content = $match[1]; 

$article_insrt=mysql_query("DELETE FROM `tb_anchoretext` WHERE session_id='$id' and keyword='$keyword_keynew' ");
    
   // $anchoreurl=mysql_real_escape_string("<a href='".$mataurl."' target='_blank'>".$anchoretextnew."</a>");
    $anchoreurl=mysql_real_escape_string($content);

    $insertanchor=mysql_query("INSERT INTO `tb_anchoretext`(`session_id`,`anchoretext`, `keyword`) VALUES ('$id','$anchoreurl','$keyword_keynew')");
    $selectdataanchure=mysql_query("SELECT * FROM tb_anchoretext WHERE session_id='$id' and keyword='$keyword_keynew' ");
    $dataurlnn=mysql_fetch_array($selectdataanchure);
    

$updatearticle=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_keynew' ");
$textdataPOST=mysql_fetch_array($updatearticle);

$textdataPOST=mysql_real_escape_string($textdataPOST['post_content']."<br>".$dataurlnn['anchoretext']);

$updatearticle=mysql_query("UPDATE `wp_posts` SET `post_content`='$textdataPOST' WHERE session_id='$id' and post_title='$keyword_keynew'");
$updatearticlen=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_keynew' ");
$textdataPOSTn=mysql_fetch_array($updatearticlen);
echo  $textdataPOSTn['post_content'];    


  ?>