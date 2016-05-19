<?php ob_start(); require_once('config.php'); 
if(!isset($_SESSION['email']))
{header("location:index.php");}


error_reporting(0);
$id=$_SESSION['id'];


$token="596b1f51527a18f0ce0a1fb11d5825d4d962ec46";
$format="json";
$id=$_SESSION['id'];
$total_pre_key=array();
$main_keyword=array();

/* for main keyword */

$mainkeyword=mysql_query("select * from tbl_offerword where session_id='$id'");
$keymain=mysql_fetch_array($mainkeyword);
$classes=explode(" ",$keymain['offerword']);

for($i=0;$i<sizeof($classes);$i++)
{
$keypart=$classes[$i];

if(strlen($keypart)>=4 && $keypart!="from" && $keypart!="with" && $keypart!="From" && $keypart!="With" && $keypart!="FROM" && $keypart!="WITH" )
{ $main_keyword[]=$keypart; }
}

$preg_key_1=$main_keyword[0];
 if(isset($main_keyword[1]) && !empty($main_keyword[1])) {$preg_key_2=$main_keyword[1];} else { $preg_key_2=$main_keyword[0];}
 if(isset($main_keyword[2]) && !empty($main_keyword[2])) {$preg_key_3=$main_keyword[2];} else { $preg_key_3=$main_keyword[0];}
  if(isset($main_keyword[3]) && !empty($main_keyword[3])) {$preg_key_3=$main_keyword[3];} else { $preg_key_4=$main_keyword[0];}
  
  
/* for relevant keyword */


$preg_matchkey=mysql_query("select * from tbl_finalkey where session_id='$id'");
while($p_m=mysql_fetch_array($preg_matchkey))
{$total_pre_key[]=$p_m['keyword'];}

$onekey=explode(" ",$total_pre_key[0]);
 if(isset($onekey[0]) && !empty($onekey[0]) && strlen($onekey[0])>4) {$preg_key_5=$onekey[0];} else { $preg_key_5=$main_keyword[0];}
  if(isset($onekey[1]) && !empty($onekey[1]) && strlen($onekey[1])>4) {$preg_key_6=$onekey[1];} else { $preg_key_6=$main_keyword[0];}
   if(isset($onekey[2]) && !empty($onekey[2]) && strlen($onekey[2])>4) {$preg_key_7=$onekey[2];} else { $preg_key_7=$main_keyword[0];}
   
   $onekey1=explode(" ",$total_pre_key[1]);
 if(isset($onekey1[0]) && !empty($onekey1[0]) && strlen($onekey1[0])>4) {$preg_key_8=$onekey1[0];} else { $preg_key_8=$main_keyword[0];}
  if(isset($onekey1[1]) && !empty($onekey1[1]) && strlen($onekey1[1])>4) {$preg_key_9=$onekey1[1];} else { $preg_key_9=$main_keyword[0];}
   if(isset($onekey1[2]) && !empty($onekey1[2]) && strlen($onekey1[2])>4) {$preg_key_10=$onekey1[2];} else { $preg_key_10=$main_keyword[0];}
   
   $onekey2=explode(" ",$total_pre_key[2]);
 if(isset($onekey2[0]) && !empty($onekey2[0]) && strlen($onekey2[0])>4) {$preg_key_11=$onekey2[0];} else { $preg_key_11=$main_keyword[0];}
  if(isset($onekey2[1]) && !empty($onekey2[1]) && strlen($onekey2[1])>4) {$preg_key_12=$onekey2[1];} else { $preg_key_12=$main_keyword[0];}
   if(isset($onekey2[2]) && !empty($onekey2[2]) && strlen($onekey2[2])>4) {$preg_key_13=$onekey2[2];} else { $preg_key_13=$main_keyword[0];}
   
   $onekey3=explode(" ",$total_pre_key[3]);
 if(isset($onekey3[0]) && !empty($onekey3[0]) && strlen($onekey3[0])>4) {$preg_key_14=$onekey3[0];} else { $preg_key_14=$main_keyword[0];}
  if(isset($onekey3[1]) && !empty($onekey3[1]) && strlen($onekey3[1])>4) {$preg_key_15=$onekey3[1];} else { $preg_key_15=$main_keyword[0];}
   if(isset($onekey3[2]) && !empty($onekey3[2]) && strlen($onekey3[2])>4) {$preg_key_16=$onekey3[2];} else { $preg_key_16=$main_keyword[0];}
   
    $onekey4=explode(" ",$total_pre_key[4]);
 if(isset($onekey4[0]) && !empty($onekey4[0]) && strlen($onekey4[0])>4) {$preg_key_17=$onekey4[0];} else { $preg_key_17=$main_keyword[0];}
  if(isset($onekey4[1]) && !empty($onekey4[1]) && strlen($onekey4[1])>4) {$preg_key_18=$onekey4[1];} else { $preg_key_18=$main_keyword[0];}
   if(isset($onekey4[2]) && !empty($onekey4[2]) && strlen($onekey4[2])>4) {$preg_key_19=$onekey4[2];} else { $preg_key_19=$main_keyword[0];}




    
$webisteurl=mysql_query("select * from tbl_insertexp_domain where session_id='$id' GROUP BY `domain`");
while($website=mysql_fetch_array($webisteurl))
{
$website=$website['domain'];



$url1='http://apiv2.ahrefs.com/?token='.$token.'&target='.$website.'&limit=5&from=anchors&mode=subdomains&output='.$format;

$a=file_get_contents($url1);
$input = json_decode($a, true);
$users=$input['anchors'];





foreach($users as $user)
{
$a = $user['anchor'];
 if (preg_match('/'.$preg_key_1.'/',$a) || preg_match('/'.$preg_key_2.'/',$a) || preg_match('/'.$preg_key_3.'/',$a) || preg_match('/'.$preg_key_4.'/',$a) || preg_match('/'.$preg_key_5.'/',$a) || preg_match('/'.$preg_key_6.'/',$a) || preg_match('/'.$preg_key_7.'/',$a) || preg_match('/'.$preg_key_8.'/',$a) || preg_match('/'.$preg_key_9.'/',$a) || preg_match('/'.$preg_key_10.'/',$a) || preg_match('/'.$preg_key_11.'/',$a) || preg_match('/'.$preg_key_12.'/',$a) || preg_match('/'.$preg_key_13.'/',$a) || preg_match('/'.$preg_key_14.'/',$a) || preg_match('/'.$preg_key_15.'/',$a) || preg_match('/'.$preg_key_16.'/',$a) || preg_match('/'.$preg_key_17.'/',$a) || preg_match('/'.$preg_key_18.'/',$a) || preg_match('/'.$preg_key_19.'/',$a))
 {
if(preg_match('/http/',$a) || preg_match('/www/',$a) || preg_match('/sex/',$a) || preg_match('/sexy/',$a) || preg_match('/porn/',$a) || preg_match('/sex/',$website) || preg_match('/porn/',$website)) {}
else{
        $insertdomain=mysql_query("INSERT INTO `tbl_insertexp_domain_final`(`session_id`, `domain`) VALUES ('$id','$website')");
        
  }
}

}
}
    $_SESSION['nottake']="nottake"; 
    header('location:domainnamecheck.php');
    ob_end_flush();
    
?>
  <!-- down part -->