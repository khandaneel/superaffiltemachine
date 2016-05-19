
<?php
//echo file_get_contents("https://yoast.com/suggest/?s=HGH+Energizer&lang=en");

$html = new DOMDocument();
	@$html->loadHtmlFile('https://yoast.com/suggest/?s=green+coffee&lang=en');
	$xpath = new DOMXPath($html);
	// Store the domains to nodes
	$nodes = $xpath->query('//td/a');

	// Loop through the nodes to look for our domain


	foreach ($nodes as $n){
		$keyvalue=$n->textContent;		
		if(!empty($keyvalue))
		{
		
		echo $keyvalue."<br>";
		}
	}
	
	
	
	?>