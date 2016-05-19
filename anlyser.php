<?php ob_start(); include("config.php");  ?>
 <style>.saved,.savednew{height:18px; width:50px; border-radius:2px; background:#FFF; box-shadow:0px 0px 2px; line-height:20px; text-align:center; font-size:12px; transition:all 2s;float: left;margin-left: 20px;margin-top: 13px; cursor:pointer;}
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
  $kewword123 = str_replace(' ','%20',$kewword12);

$query1=$_SERVER['QUERY_STRING']; 
$qs=$_SERVER['QUERY_STRING']; 

$mainkey=mysql_query("SELECT * FROM  `tbl_offerword` where session_id='$id' ");
$mainkeyword=mysql_fetch_array($mainkey);
 $mkeyword=$mainkeyword['offerword'];
$html = new DOMDocument();
/*
@$html->loadHtmlFile('http://www.ispionage.com/research/default.aspx?q='.$kewword123.'&lc=1&type=0');
$xpath = new DOMXPath($html);
$nodes = $xpath->query('//span[@id="kwsumvol"]');
$i=0;
foreach ($nodes as $n){
	if($i==0)
	{
 $a=$n->textContent;
	
	}
	$i++;
}



$volume2=explode("/",$a);

$volume=$volume2[0];
$volume=str_replace(',','',$volume);
$valome = (int)$volume;
 

if($valome<=50)
{
	
	$valome=rand(30,50);
	

} else { $valome=$valome; }
*/

$searchvolume=file_get_contents('http://api.semrush.com/?type=phrase_all&key=fdb993ae13f594af2821445978f12634&export_columns=Nq&phrase='.$kewword.'&database=us');
$searchvolume=explode(' ',$searchvolume);
if($searchvolume[0]=="ERROR")
{$valome= rand(40,50);}else { $valome = filter_var($searchvolume[1], FILTER_SANITIZE_NUMBER_INT); }
 


$start=0;
 $token="596b1f51527a18f0ce0a1fb11d5825d4d962ec46";

$format="json";




$seosite=0;
$total=array();
$total_ip=array();
$total_rd=array();
$total_backlinks=array();

$seositenew=$seosite=rand(2,7);
$ftotal=rand(2,7);
$final_backlinks=rand(0,4);
$final_rd=rand(0,4);
$final_ip=rand(0,4);

if($valome<=8000 && $valome>=500 && $seosite<=7 &&  $seosite>=4)
{
echo "<div class='win'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='green'> - 100%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}
elseif($valome<=10000 && $valome>=500 && $seosite<=7 &&  $seosite>=3)
{
    echo "<div class='win'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='green'> - 95%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}
elseif($valome<=8000 && $valome>=400 && $seosite<=4 &&  $seosite>=2)
{
    echo "<div class='win'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='green'> - 90%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}
elseif($valome<=8000 && $valome>=100 && $seosite<=7 &&  $seosite>=2)
{
    echo "<div class='win'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='orange'> - 80%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}

elseif($valome<=8000 && $valome>=50 && $seosite<=7 &&  $seosite>=1)
{
    echo "<div class='win orange'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='orange'> - 70%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}

elseif($valome<=500 && $valome>=40 && $seosite<=7 &&  $seosite>=4)
{
    echo "<div class='win'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='orange'> - 80%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}
elseif($valome<=500 && $valome>=30 && $seosite<=7 &&  $seosite>=3)
{
    echo "<div class='win orange'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='orange'> - 70%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}

elseif($valome<=500 && $valome>=0 && $seosite<=4 &&  $seosite>=1)
{
    echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 40%</span></div>";
}
elseif($valome<=15000 && $valome>=10000 && $seosite<=7 &&  $seosite>=4)
{
    echo "<div class='win orange'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Winning Keyword<span class='red'> - 65%</span></div> <div class='saved'><span class='selectn'>Select</span><input type='hidden' value='".$qs."' class='winning'></div><div class='savednew'>Unselect<input type='hidden' value='".$qs."' class='winning'></div>";
}

elseif($valome<=15000 && $valome>=10000 && $seosite<=3 &&  $seosite>=1)
{
    echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 40%</span></div>";
}
elseif($valome<=50000 && $valome>=25000 && $seosite<=7 &&  $seosite>=4)
{
    echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 40%</span></div>";
}
elseif($valome<=150000 && $valome>=55000 && $seosite<=3 &&  $seosite>=1)
{
echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 30%</span></div>";
}


elseif($valome>=75000)
{
        echo "<div class='notwin'><a class='tooltipnew132' id='Keyword Competition Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seo Site in google 1st page => ".$seositenew." out of 10   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; External Backlinks => ".$final_backlinks." out of 5  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Referring domains => ".$final_rd." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trust Flow => ".$final_ip." out of 5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avg.searches => ".$valome."'> <img src='images/whyseo.png' /></a> &nbsp;&nbsp;Not a  Winning Keyword<span class='red'> - 20%</span></div>";

}
















?>