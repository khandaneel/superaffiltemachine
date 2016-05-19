<?php ob_start(); include("config.php");  ?>
 <style>.saved,.savednew{height:18px; width:50px; border-radius:2px; background:#FFF; box-shadow:0px 0px 2px; line-height:20px; text-align:center; font-size:14px; transition:all 2s;float: left;margin-left: 20px;margin-top: 13px; cursor:pointer;}
.savednew{display:none; color:red;}</style>
<script>
  $(document).ready(function(){

  
  $('.saved').click(function(){

$(this).css( "display", "none" );
$('.savednew1').css( "display", "block" );
$('.winning').removeClass("winning1");
$(this).find('.winning').addClass("winning1");
$key=$('.winning1').val();
        
$key=($key.replace(/[ ]+/g, "%20"));
$('.wemenu').load('winningkeyword.php?'+$key);});
     
     
     
     $('.savednew').click(function(){
$(this).css( "display", "none" );
$('.saved1').css( "display", "block" );

        
          $('.winning').removeClass("winning1");
        $(this).find('.winning').addClass("winning1");
        $key=$('.winning1').val();
        
        $key=($key.replace(/[ ]+/g, "%20"));
        $('.wemenu').load('delwinningkeyword.php?'+$key);});
     
     $(this).removeClass("savednew");
     
     
 
   }); 
   
  
  </script>
<?php
$qsnn=$_SERVER['QUERY_STRING'];
 $kewword = str_replace('%20','+',$qsnn);
  $kewword12 = str_replace('%20',' ',$qsnn);

 $html = new DOMDocument();
@$html->loadHtmlFile('http://7search.com/Scripts/Advertiser/v3/ExternalTools/KeywordSuggestions?Keyword="'.$kewword.'"&showestimates=false&ShowAdult=false');
$xpath = new DOMXPath($html);
$nodes = $xpath->query('//td');
$t=0; // for total key
error_reporting(0);
foreach ($nodes as $n){
    
    if(trim($n->textContent)==trim($kewword12))
    {$r=$t+1;}
    
        if($r==$t)
    {
     $a=$n->textContent;
    }
    
    $t++;
    
} 
$a=str_replace(',','',$a);
if($a=="")
{
    $valome="less then 1000";
} 
    else {
        $valome=$a;
    
    if($valome==0)
    {
        $valome="less then 1000";
    }
    }

if($a>1000)
{
    echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => 0 out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => 0 out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => 0 out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => 0 out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 30%</span></div>";
    
}
else {
    



$start=0;
 $token="596b1f51527a18f0ce0a1fb11d5825d4d962ec46";

$format="json";


$query1=$_SERVER['QUERY_STRING']; 
$qs=$_SERVER['QUERY_STRING']; 


$seosite=0;
$total=array();
$total_ip=array();
$total_rd=array();
$total_backlinks=array();

$html = new DOMDocument();
    @$html->loadHtmlFile('http://www.google.co.in/search?q='.$query1.'&num=10');
    $xpath = new DOMXPath($html);
    $nodes = $xpath->query('//div/cite');

$i=0;
    foreach ($nodes as $n){
        if($i<=10)
        {
    $URLrequred=$n->nodeValue;
    $URL=str_replace('http://', '', $URLrequred);
    $URL=str_replace('https://', '', $URL);
    
    $URLnew=explode('/',$URL);
$a=$URLnew[0];
    


if (preg_match('/google/',$a) || preg_match('/wikipedia/',$a) || preg_match('/amazon/',$a) || preg_match('/ebay/',$a) || preg_match('/%/',$a) || 

preg_match('/esurance/',$a) || preg_match('/facebook/',$a) || preg_match('/yahoo/',$a) || preg_match('/msn/',$a) || preg_match('/youtube/',$a) || 

preg_match('/apple/',$a) || preg_match('/java/',$a) || preg_match('/bing/',$a) || preg_match('/about.com/',$a) || preg_match('/www.apple.com/',$a) || preg_match('/store.apple.com/',$a) || preg_match('/mysmartprice/',$a) || preg_match('/ndtv/',$a) || preg_match('/flipkart/',$a) || preg_match('/snapdeal/',$a) || preg_match('/alibaba/',$a) || preg_match('/news/',$a) || preg_match('/myntra/',$a) || preg_match('/airltel/',$a) || preg_match('/bsnl/',$a) || preg_match('/dlf/',$a) || preg_match('/hp/',$a) || preg_match('/webmd/',$a) || preg_match('/cnn/',$a) || preg_match('/twitter/',$a) )
{}
else {

$bacurl ='http://apiv2.ahrefs.com/?from=refdomains&target='.$a.'&mode=exact&limit=1000&output='.$format.'&token='.$token;    
$bacurlget=file_get_contents($bacurl);
 $bacurlgetinput = json_decode($bacurlget, true);
 $backusers=$bacurlgetinput['refdomains'];
 $backlinksn=0;
foreach($backusers as $backusersn)
{
   $reddomainsn=$backusersn['refdomain'];
     @$backlinksn+=$backusersn['backlinks'];


}
$backlinksnresult=$backlinksn;
if($backlinksnresult<601) {
    

    
    $seosite++;
$url1 ='http://apiv2.ahrefs.com/?from=refdomains&target='.$URLrequred.'&mode=exact&limit=1000&output='.$format.'&token='.$token;

$a=file_get_contents($url1);
$input = json_decode($a, true);
$users=$input['refdomains'];
$ab=$input['stats'];
 $ip=$ab['ips'];

if($ip>=0 && $ip<=10){ $ip1=1;} elseif($ip>=10 && $ip<=20){ $ip1=2;} elseif($ip>=11 && $ip<=20){ $ip1=3;} elseif($ip>=21 && $ip<=30){ 

$ip1=4;} else{ $ip1=5;}



$i=0;
foreach($users as $user)
{
   $reddomains=$user['refdomain'];
    @$backlinks+=$user['backlinks'];


$i++;
}

 $rd=$i;
if($rd>=0 && $rd<=50){ $rd=1;} elseif($rd>=51 && $rd<=120){ $rd=2;} elseif($rd>=121 && $rd<=220){ $rd=3;} elseif($rd>=221 && 

$rd<=400){ $rd=4;} else{ $rd=5;}

if($backlinks>=0 && $backlinks<=50){ $backlinks=1;} elseif($backlinks>=51 && $backlinks<=120){ $backlinks=2;} elseif($backlinks>=121 && 

$backlinks<=220){ $backlinks=3;} elseif($backlinks>=221 && $backlinks<=400){ $backlinks=4;} else{ $backlinks=5;}


 $total[]=(($rd+$backlinks+$ip1)/1.5);
$total_ip[]=$ip1;
$total_rd[]=$rd;
$total_backlinks[]=$backlinks;
}}}}









$totalseult=$total[0]+$total[1]+$total[2]+$total[3]+$total[4]+$total[5]+$total[6]+$total[7]+$total[8]+$total[9];
$final_ip=round((($total_ip[0]+$total_ip[1]+$total_ip[2]+$total_ip[3]+$total_ip[4]+$total_ip[5]+$total_ip[6]+$total_ip[7]+$total_ip[8]+$total_ip[9])/$seosite));
$final_rd=round((($total_rd[0]+$total_rd[1]+$total_rd[2]+$total_rd[3]+$total_rd[4]+$total_rd[5]+$total_rd[6]+$total_rd[7]+$total_rd[8]+$total_rd[9])/$seosite));
$final_backlinks=round((($total_backlinks[0]+$total_backlinks[1]+$total_backlinks[2]+$total_backlinks[3]+$total_backlinks[4]+$total_backlinks[5]+$total_backlinks[6]+$total_backlinks[7]+$total_backlinks[8]+$total_backlinks[9])/$seosite));

 $ftotal=($totalseult/$seosite);
$seositenew=$seosite;

if($seositenew>=10)
{
    $seositenew=$seositenew-3;
} elseif($seositenew<10 && $seositenew>7)
{$seositenew=$seositenew-2;
}
if($seosite>=7 &&  $ftotal<=4)
{
echo "<div class='win'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='green'> - 100%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}
elseif($seosite>=6 &&  $ftotal<=5)
{
    echo "<div class='win'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='green'> - 95%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}
elseif($seosite>=6 &&  $ftotal<=5)
{
    echo "<div class='win'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='green'> - 93%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}
elseif($seosite>=4 &&  $ftotal<=5)
{
    echo "<div class='win'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='orange'> - 85%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}

elseif($seosite>=3 &&  $ftotal<=5)
{
    echo "<div class='win orange'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='orange'> - 75%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}


elseif($seosite>=2 &&  $ftotal<=5)
{
    echo "<div class='win orange'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='red'> - 55%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}
elseif($seosite>=2 &&  $ftotal<=7)
{
    echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 40%</span></div>";
}
elseif($seosite>=2 &&  $ftotal<=9)
{
echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 50%</span></div>";
}

elseif($seosite>=1 &&  $ftotal<=5)
{
    echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 45%</span></div>";
}
elseif($seosite>=1 &&  $ftotal<=7)
{
echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of  5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 35%</span></div>";
}
elseif($seosite>=1 &&  $ftotal<=9)
{
    echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 30%</span></div>";
}
elseif($seosite=0)
{
        echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 30%</span></div>";
}














}

?>