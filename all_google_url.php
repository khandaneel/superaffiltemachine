   	<?php


	// Grab the Google page using the chosen keywords
	$html = new DOMDocument();
	@$html->loadHtmlFile('http://www.google.co.in/search?q=green+coffee+garcinia&num=10');
	$xpath = new DOMXPath($html);
	// Store the domains to nodes
	$nodes = $xpath->query('//div[1]/cite');

$i=0;
	foreach ($nodes as $n){
		if($i<=10)
		{
	echo '<div style="font-size:0.7em">'.$n->nodeValue.'<br /></div>'; // Show all links
		}
		else {break; }
	
		$i++;
	}
