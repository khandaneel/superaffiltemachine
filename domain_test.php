<?php 
error_reporting(0);
//echo file_get_contents('https://www.dynadot.com/market/auction/?keyword=green&order_by=8&page_size=50&page_index=0');
 $html = new DOMDocument();

	@$html->loadHtmlFile('https://www.dynadot.com/market/auction/?keyword=sleep&order_by=8&page_size=50&page_index=0');
    $xpath = new DOMXPath($html);
    // Store the domains to nodes
    $nodes = $xpath->query('//table[@class="market-table"]/tr');



    foreach ($nodes as $n){
  
       
			 $keyvalue=trim($n->textContent);    
        $kewword = preg_replace('/\s+/','+', $keyvalue);  
	 $trust_flow = explode('+',$kewword); 
			
          	$dotpos=strpos($trust_flow[0],".");
			if($dotpos>=1)
			{
			echo "domin anme=".$trust_flow[0];
			echo " and time left=".$trust_flow[1].$trust_flow[2].$trust_flow[3].$trust_flow[4];
			echo " and current bids=".$trust_flow[5];
			if($trust_flow[7]=='-')
			{
				echo " and Visitor=".$trust_flow[8];
					echo " and Links=".$trust_flow[9];
					echo " and Ages=".$trust_flow[10]."<br>";
			}
				else {echo " and Visitor=".$trust_flow[7];
					echo " and Links=".$trust_flow[8];
					echo " and Ages=".$trust_flow[9]."<br>";
				}
     
	}
	}
		

?> 