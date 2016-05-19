<?php 

  $keyword_keynew=trim($keyword_key);

$article_RE=mysql_query("SELECT * FROM `tbl_meta_description_final` WHERE session_id='$id' and keyword='$keyword_keynew' ");

    $mydatanewmeta=mysql_fetch_array($article_RE);
    $metades=$mydatanewmeta['metadescription'];
    
    $article_REtt=mysql_query("SELECT * FROM `tbl_meta_title_final` WHERE session_id='$id' and keyword='$keyword_keynew' ");

    $mydatanewmetatt=mysql_fetch_array($article_REtt);
    $metadestt=$mydatanewmetatt['metatitle'];


  ?>