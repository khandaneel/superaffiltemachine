
<?php



function processreq($dominadon,$host,$cpaneluser,$cpanelpass,$cpanel_skin,$addonpass){
    
    $dom=$dominadon;
    
        $domain = explode('.',$dom);
    
        $dir="public_html/".trim($dom);
        $user=trim($domain[0]);
        $dom=trim($domain[0]).".".trim($domain[1]);
        $request = "/frontend/$cpanel_skin/addon/doadddomain.html?domain=$dom&user=$user&dir=$dir&pass=$addonpass";
        $result = addondomain($host,$cpaneluser,$cpanelpass,$request);
        $show = strip_tags($result);
        
        //header("location:userregitation.php");
}
function addondomain($host,$ownername,$passw,$request) {
$sock = @fsockopen($host,2083);
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



    
//for domain add in server currently it blocking using copmment line becz unncessry adding domin in hostgator

  $dominadon="gojivitauniversale.com"; $host="teespool.com"; $cpaneluser="taqi786"; $cpanelpass="ju^&iRanK8&"; $cpanel_skin="x3"; $addonpass="rockset";
  $process=processreq($dominadon,$host,$cpaneluser,$cpanelpass,$cpanel_skin,$addonpass);
        
        
           
      

        
    
    
    
    ?>