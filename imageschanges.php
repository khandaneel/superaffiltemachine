<?php include_once('config.php'); $keyword_key1=$_SERVER['QUERY_STRING'];

$keyword_key= str_replace("%20"," ",$keyword_key1);

$id=$_SESSION['id'];


 
                                        

 
 $start=0;

 $keywordqueryimages =$keyword_key1."+images";  


$url = 'https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q='.$keywordqueryimages.'&start='.$start;

$body = file_get_contents($url);
$json = json_decode($body);
$x=rand(0,3);
    
     $youtubeurlimages= $json->responseData->results[$x]->url;
     
     $delet=mysql_query("DELETE FROM `tbl_images` WHERE session_id='$id' and keyword='$keyword_key' ");
     
        $updateted=mysql_query("INSERT INTO `tbl_images`(`keyword`, `session_id`, `images`, `activatation`) VALUES ('$keyword_key','$id','$youtubeurlimages','0')");
    
    
    $imgdata="<img src='$youtubeurlimages' height='200' alt='$youtubeurlimages' /><br>";
    
    $updatearticle=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_key' ");
$textdataPOST=mysql_fetch_array($updatearticle);

$textdataPOST=mysql_real_escape_string($imgdata."".$textdataPOST['post_content']);

$updatearticle=mysql_query("UPDATE `wp_posts` SET `post_content`='$textdataPOST' WHERE session_id='$id' and post_title='$keyword_key'");
$updatearticlen=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_key' ");
$textdataPOSTn=mysql_fetch_array($updatearticlen);
echo  $textdataPOSTn['post_content'];
    
    ?>