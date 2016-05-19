<?php ob_start(); $display="block"; include('header.php'); $email=$_SESSION['email'];?>
<?php include('slidemenu.php'); $id=$_SESSION['id']; 
$mainkey=mysql_query("SELECT * FROM  `tbl_offerword` where session_id='$id' ");
$mainkeyword=mysql_fetch_array($mainkey);
 $mkeyword=$mainkeyword['offerword'];
 
 $reidnew=mysql_query("select * from tbl_registation where email='$email' and session_id='$id'");
$postidnew=mysql_fetch_array($reidnew);
$folderclint=explode(".",$postidnew['domain_name']); 

 
?>

 <!-- Addon Domain process for SAM serever -->


<?php



function processreq($dominadon,$host,$cpaneluser,$cpanelpass,$cpanel_skin,$addonpass){
    
    $dom=$dominadon;
    
        $domain = explode('.',$dom);
    
        $dir="public_html/".trim($dom);
        $user=trim($domain[0]);
        $dom=trim($domain[0]).".".trim($domain[1]);
        $request = "/frontend/$cpanel_skin/addon/doadddomain.html?domain=$dom&user=

$user&dir=$dir&pass=$addonpass";
        $result = addondomain($host,$cpaneluser,$cpanelpass,$request);
        $show = strip_tags($result);
        
        //header("location:userregitation.php");
}
function addondomain($host,$ownername,$passw,$request) {
$sock = @fsockopen($host,2082);
    if(!$sock) {
        print('Socket error');
        exit();
    }
    $authstr = "$ownername:$passw";
    
    $pass = base64_encode($authstr);
    $in = "GET $request\r\n";
    $in .= "HTTP/1.0\r\n";
    $in .= "Host:$host\r\n";
    $in .= "Authorization: Basic $pass\r\n";
    $in .= "\r\n";
    //process
    fputs($sock, $in);
    while (!feof($sock)) {
        $result .= fgets ($sock,128);
    }
    
        
    fclose( $sock );
    return $result;
}



if(isset($_POST['Confirm11222222'])){
    
//for domain add in server currently it blocking using copmment line becz unncessry adding domin in hostgator

  //$dominadon=$_POST['adondomin']; $host="teespool.com"; $cpaneluser="taqi786"; 

$cpanelpass="ju^&iRanK8&"; $cpanel_skin="x3"; $addonpass=$_POST['ftppass'];
  //$process=processreq($dominadon,$host,$cpaneluser,$cpanelpass,$cpanel_skin,$addonpass);
        
        
        
        
        $cpanel_user = 'taqi786';

$cpanel_pass = 'ju^&iRanK8&';

$cpanel_skin = 'x3';

$cpanel_host = 'teespool.com';

$db_user = $id;

$db_pass = $id;
$db_name=$id;

$site = "https://$cpanel_user:$cpanel_pass@$cpanel_host:2083/frontend/$cpanel_skin/sql/";
$result = file_get_contents("{$site}addb.html?db=$db_name");
$result .= file_get_contents("{$site}adduser.html?user={$db_user}&pass={$db_pass}");
$result .= file_get_contents("{$site}addusertodb.html?user={$cpanel_user}_{$db_user}&db=

{$cpanel_user}_{$db_name}&ALL=ALL");

        
    }
    
    
    if(isset($_POST['Confirmnew555'])){
    
     $dominadon=trim($_POST['adondomin']);   $host=trim($_POST['hostname']); 

$cpaneluser=trim($_POST['cpaneluser']); $cpanelpass=trim($_POST['cpanelpass']); 
     $cpanel_skin=trim($_POST['cpanelskinname']);  $addonpass=trim($_POST['ftppass']);
     
    
        $process=processreq($dominadon,$host,$cpaneluser,$cpanelpass,$cpanel_skin,$addonpass);
        
    }

?>

    
   <?php 
    

    date_default_timezone_set('Asia/Calcutta');
     $activtytext=mysql_real_escape_string("Build Website <br> <a href='wp.php?domainid=$id' 

class='samcolor'>".$mkeyword."</a>");
     $timeno=date('h:i:s a', time());
     $monthday=date("d M");
     $year=date("Y");
 $imgin=mysql_real_escape_string('<img src="images/activity_icon4.png" align="middle" 

height="15" width="21" />');
  $activity=mysql_query("INSERT INTO `activity`(`activityname`, `email`, `datetime`, `month`, 

`year`, `sessionid`, `status`,`img`,`color`,`colorborder`) VALUES ('$activtytext','".$_SESSION

['email']."','$timeno','$monthday','$year','".$_SESSION['id']."','1','$imgin','#428bca','".$_SESSION

['color']."')");
  
 
    
     ?>
    
 <?php
	if(isset($_POST['serverdetails']))
	{
		$hostname=$_POST['hostname'];
		$cpaneluser=$_POST['cpaneluser'];
		$cpanelpass=$_POST['cpanelpass'];
		$adondomin=$_POST['adondomin'];
		$email=$_SESSION['email'];
	mysql_query("INSERT INTO `tbl_wel_server` (`url`, `username`, `password`, `email`, 

`domain`) VALUES ('$hostname', '$cpaneluser', '$cpanelpass', '$email', '$adondomin')");	
	}
	?>
    
    
        
    <div class="niche_right">
 <div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Install Wordpress </span>
    </div>
     <a class='youtube' href="http://irankmedia.com/sam/capture-003-2.mp4"><div 

class="demo_video_pk">
    	<img src="images/demo_logo.png" />
    </div></a>
    <div class="clear"></div>
    <div class="niches">
     <?php 
       
$email=$_SESSION['email'];

$reidnew=mysql_query("select * from tbl_registation where email='$email' and session_id='$id'");
$postidnew=mysql_fetch_array($reidnew);
$folderclint=explode(".",$postidnew['domain_name']);
 $folder_add=$id.$folderclint[0];
        ?>
        <div class="insta_responce">
     	<p style="text-align:center;"><img src="images/wp-logo.png" width="50" 

height="50"></p>
     	
       
        
        <a href="wp-insatall_thank.php"><div class="signup_in" style="width:164px; margin-left:171px;margin-

top:20px; text-align:center; background:#428bca; display:block">Install Wordpress 

Now..</div></a>
       </div>
       
    
</div>