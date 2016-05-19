<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
require_once('config.php'); 
$pagekeyword = mysql_query("SELECT * FROM wp_posts where session_id='4268seo' GROUP BY `post_title`");
while($metakeyword=mysql_fetch_array($pagekeyword))
{$query=$metakeyword['post_title']; $query = preg_replace('/\s+/','%20',$query);

$url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=".$query.'&start=10';
$body = file_get_contents($url);
$json = json_decode($body);
$x=0;
$mataurl=$json->responseData->results[$x]->url; 	
$tags =get_meta_tags($mataurl);

if($tags['description'])
{
	 $banned = array('.com', ' .com ', '.com ','.net', ' .net ', '.net ','.net', ' .co.in ', '.co.in ','.co.in', ' .org ', '.org ','.org', ' .org ', '.edu ', '.edu ','.uk', ' .us ', '.us ', '.uk ','.us', ' .gov ', '.gov','.org ','.info', ' .info ', '.biz ', '-', '- ', ' -', ' - ', '_', ' _', ' _ ', '_ ', '(', ' (', '( ', ' ( ', ')', ' )', ') ', ' ) ', '{', ' {', '{ ', ' { ', '}', ' }', '} ', ' } ', '[', ' [', '[ ', ' [ ', ']', ' ]', '] ', ' ] ', '+', ' +', '+ ', ' + ', '=', ' =', '= ', ' = ', 'http', ' http ', ' http', 'http ', ' http: ', ' http:', 'http:', ' http:', '//', '// ', ' //', ' // ', '\\', ' \\ ', '.html', '.html ', ' .html ', ' amazon ', 'amazon ', ' amazon', 'amazon', ':', 'Amazon', 'Amazon ', ' Amazon', ' WebMD ', 'WebMD', 'WebMD ', ' WebMD', 'Webmd', 'Webmd ');

$meta_description  = trim(str_ireplace($banned, ' ', $tags['description']));
$metades=mysql_real_escape_string($meta_description);
	echo $metakeyword['post_title']."==". $metades."<br>";	
		
	
}
}



?>
