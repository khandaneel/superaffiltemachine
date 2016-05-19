<?php  ob_start();    session_start(); include("config.php");    $id=$_SESSION['id'];  


$mainkey=mysql_query("SELECT * FROM  `tbl_offerword` where session_id='$id' ");
$mainkeyword=mysql_fetch_array($mainkey);
 $mkeyword=trim($mainkeyword['offerword']);
error_reporting(0);
$kewword = preg_replace('/\s+/','+', $mkeyword);


$html = new DOMDocument();
	@$html->loadHtmlFile('http://tools.seobook.com/keyword-tools/seobook/?keyword='.$kewword);
	$xpath = new DOMXPath($html);
	// Store the domains to nodes
	$nodes = $xpath->query('//tr');

	// Loop through the nodes to look for our domain


	foreach ($nodes as $n){
		$keyvalue=$n->textContent;		
		
		
		
		$keyvalue=str_replace(",","",$keyvalue);

$intvalue= preg_replace('/\D/', ' ', $keyvalue);
$intvalue=trim($intvalue);
$intone=explode(" ",$intvalue);
$keyword=explode($intone[0],$keyvalue);

	
	$in_offer=mysql_query("insert into finalkey (`session_id`,`key`) VALUES ('$id','$keyword[0]')");	
	

		
		
	}


header("location:final_keyword.php"); ob_end_flush();


?>
