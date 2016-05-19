<?php $display="block"; include('header.php'); unset($_SESSION['id']); ?>

<?php include('slidemenu.php'); ?>
   	<?php

$i = 0; $hit = 0;

if($_POST) {

	// Clean the post data and make usable
	$domain = filter_var($_POST['domain'], FILTER_SANITIZE_STRING);
	$keywords = filter_var($_POST['keywords'], FILTER_SANITIZE_STRING);
		// Remove begining http and trailing /
		$domain = substr($domain, 0, 7) == 'http://' ? substr($domain, 7) : $domain;
		$domain = substr($domain, -1) == '/' ? substr_replace($domain, '', -1) : $domain;
		// Replace spaces with +
		$keywords = strstr($keywords, ' ') ? str_replace(' ', '+', $keywords) : $keywords;

	// Grab the Google page using the chosen keywords
	$html = new DOMDocument();
	@$html->loadHtmlFile('http://www.google.co.in/search?q='.$keywords.'&num=100');
	$xpath = new DOMXPath($html);
	// Store the domains to nodes
	$nodes = $xpath->query('//div[1]/cite');

	// Loop through the nodes to look for our domain
	$hit = 2;
	foreach ($nodes as $n){
		// echo '<div style="font-size:0.7em">'.$n->nodeValue.'<br /></div>'; // Show all links
		if (strstr($n->nodeValue, $domain)) {
			if($i==0)
			{$i=" ' TOP ' "; }
			$message = 'GooGle Position is  '.$i.'<br />'; $hit = 1;
		}
		else { ++$i; }
	}
}
?>
<style>
.produresearc{display:block;}
</style>

<div class="niche_right">
<?php include('describe_details.php'); ?>

    <div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Rank Booster</span>
    </div>
    <div class="clear"></div>
    <div class="niches">
        
     <div class="key" style="height: 100px;line-height:50px;width: 568px;margin-left: 50px;padding-left: 30px;border: 1px solid #ccc;">
   <?php // Echo the result
        if ($hit == 1) { echo '<h2>'.$message.'</h2>'; }
        else if ($hit >= 2) { echo '<h2>Not found! your website in top 100.</h2>'; }
        ?>
  

<a href="getidea.php?url=<?php echo $_POST['domain']; ?>"> <div class="geti">Boost Your Site</div></a>

        </div>

        
        
        
    </div>
    
   
        
        
        
    </div>
    


  <div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox">Here you need to search <br />  for some product name. Don't worry, <span class="samcolor">SAM</span> will find the easy keywords to target automatically for you.</div>

<?php include('footer.php');