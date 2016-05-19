
		<?php 
   	
			$mkeywordnew1=trim('green coffee');
	$keyworddomain1=$keyworddomain=str_replace(" ","+",$mkeywordnew1);
					$html = new DOMDocument();
@$html->loadHtmlFile('https://who.is/domain-suggestions/'.$keyworddomain1);
$xpath = new DOMXPath($html);
$nodes = $xpath->query('//tr');
$k=0;
foreach ($nodes as $n){
$dominname=$n->textContent;

$pos = strpos($dominname,".");

if ($pos === false) {} else{
$dominname = preg_replace('/\s+/','+',$dominname);    
        
$dominname = explode('+',$dominname); 
$url= $dominname[1]; 
?>
<li><div class="dname"><?php echo $url; ?></div>

<a style="cursor:pointer;" onclick="return windowpop('https://www.godaddy.com/gdshop/registrar/search.asp?isc=DBCOM749&utm_medium=Other%2BOnline&utm_source=domainsbot&checkAvail=1&domainToCheck=<?php echo $url; ?>', 1100, 600)"><div class="dbook">BUY<input type="hidden" value="<?php echo $url; ?>" class="takeit" /></div></a> </li>
<?php
if($k==9){break;}$k++;}}
 ?> 

 