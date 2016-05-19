<?php include_once('config.php'); $keyword_key1=$_SERVER['QUERY_STRING'];

  $keyword_key= str_replace("%20"," ",$keyword_key1);

$id=$_SESSION['id'];
// $id="534seo";

 
 
 $start=0;

 $keywordqueryimages =$keyword_key1."+video";  


 $start=0;
$url = 'https://ajax.googleapis.com/ajax/services/search/video?v=1.0&q='.$keywordqueryimages.'&start='.$start;

$body = file_get_contents($url);
$json = json_decode($body);
$x=rand(0,3);
    
     $youtubeurlimages= $json->responseData->results[$x]->url;
    
    $youtubeurlimages=explode("=",$youtubeurlimages);
    $youtubeurlimages="//www.youtube.com/embed/".$youtubeurlimages[1];
     
    $delet=mysql_query("DELETE FROM `tbl_youtube` WHERE session_id='$id' and keyword='$keyword_key' ");
         
$updateted=mysql_query("INSERT INTO `tbl_youtube`(`keyword`, `session_id`, `youtube`, `activatation`) VALUES ('$keyword_key','$id','$youtubeurlimages','0')");
    

    $videoeurl="<br><br><iframe src='$youtubeurlimages' height='300' width='610' frameborder='0' allowfullscreen ></iframe><br>";
    
    
$updatearticle=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_key' ");
$textdataPOST=mysql_fetch_array($updatearticle);

$textdataPOST=mysql_real_escape_string($textdataPOST['post_content']."".$videoeurl);

$updatearticle=mysql_query("UPDATE `wp_posts` SET `post_content`='$textdataPOST' WHERE session_id='$id' and post_title='$keyword_key'");
$updatearticlen=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_key' ");
$textdataPOSTn=mysql_fetch_array($updatearticlen);
echo  $textdataPOSTn['post_content'];    
    
    ?>