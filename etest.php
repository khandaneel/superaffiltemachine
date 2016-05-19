<?php

$url = "https://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=green&start=5";
$body = file_get_contents($url);
$json = json_decode($body);
$x=0;
echo $mataurl=$json->responseData->results[$x]->url;
$anchoretext=$json->responseData->results[$x]->title;   
?>