<?php ob_start();  $page="one"; include ('header.php');   

$id=$_SESSION['id'];

$mainkey=mysql_query("SELECT * FROM  `tbl_offerword` where session_id='$id' ");
$mainkeyword=mysql_fetch_array($mainkey);
 $mkeyword=$mainkeyword['offerword'];
 $banned = array(' a ', ' an ', ' the ', ' is ', ' of ', ' for ', ' from ' , ' and ' , ' or '); //add more words as you want. KEEP THE SPACE around the word

$mkeyword  = str_ireplace($banned, ' ', $mkeyword);
$mkeywordnnn = preg_replace("/^[0-9 ]+/", "", $mkeyword);
 $mkeywordnew=explode(" ",$mkeywordnnn);

 if(!empty($mkeywordnew[0]) && strlen($mkeywordnew[0])>=2)
 { echo $mkeywordnew0 = substr($mkeywordnew[0], 0, -1);  $mkeywordnew01 = substr($mkeywordnew[0], 0, -1);
 $mkeywordnew01=strtolower($mkeywordnew01);
 }
  if(!empty($mkeywordnew[1]) && strlen($mkeywordnew[1])>=2)
 {  $mkeywordnew1=substr($mkeywordnew[1], 0, -1); $mkeywordnew11 = substr($mkeywordnew[1], 0, -1);
 $mkeywordnew11=strtolower($mkeywordnew11);
 }
 else { $mkeywordnew1=substr($mkeywordnew[0], 0, -1); $mkeywordnew01 = substr($mkeywordnew[0], 0, -1); $mkeywordnew11=strtolower($mkeywordnew01);}
 
  if(!empty($mkeywordnew[2]) &&  strlen($mkeywordnew[2])>=2)
 {  $mkeywordnew2=substr($mkeywordnew[2], 0, -1);  $mkeywordnew21 = substr($mkeywordnew[2], 0, -1); $mkeywordnew21=strtolower($mkeywordnew21);
 }
 else { $mkeywordnew2=substr($mkeywordnew[0], 0, -1); $mkeywordnew21 = substr($mkeywordnew[0], 0, -1); $mkeywordnew21=strtolower($mkeywordnew21);}
 


$url=mysql_query("SELECT * FROM  `finalkey` where session_id='$id'  GROUP BY `key`  ");

 $totalkeyword=mysql_num_rows($url);

        if($totalkeyword>1)
	{
		
		while($urlfectch=mysql_fetch_array($url))
{
	$a=$urlfectch['key'];
	
		 $banned = array(' http://','http://',' www.','www.','.co','.com', ' .com ', '.com ','.net', ' .net ', '.net ','.net', ' .co.in ', '.co.in ','.co.in', ' .org ', '.org ','.org', ' .org ', '.edu ', '.edu ','.uk', ' .us ', '.us ', '.uk ','.us', ' .gov ', '.gov','.org ','.info', ' .info ', '.biz ', '-', '- ', ' -', ' - ', '_', ' _', ' _ ', '_ ', '(', ' (', '( ', ' ( ', ')', ' )', ') ', ' ) ', '{', ' {', '{ ', ' { ', '}', ' }', '} ', ' } ', '[', ' [', '[ ', ' [ ', ']', ' ]', '] ', ' ] ', '+', ' +', '+ ', ' + ', '=', ' =', '= ', ' = '); //add more words as you want. KEEP THE SPACE around the word

$mkeyword  = trim(str_ireplace($banned, ' ', $a));
	
		$mkeyword=str_replace("and","and",$mkeyword);
	 if (preg_match('/'.$mkeywordnew0.'/',$a) || preg_match('/'.$mkeywordnew1.'/',$a) || preg_match('/'.$mkeywordnew2.'/',$a) || preg_match('/'.$mkeywordnew01.'/',$a) || preg_match('/'.$mkeywordnew11.'/',$a) || preg_match('/'.$mkeywordnew21.'/',$a))
  {
	
$lastword = explode(' ', $mkeyword);
$lw = array_pop($lastword);
if($lw=="the" || $lw=="in" || $lw=="a" || $lw=="into" || $lw=="with"  || $lw=="on" || $lw=="for" || $lw=="from" || $lw=="at" || $lw=="to" || $lw=="or" || $lw=="and" || $lw=="of" || $lw=="." || $lw=="-" || $lw=="_" ) 
{
$words = str_word_count($mkeyword, 1);
$lastWordn = array_pop($words);
$fword = implode(" ", $words);

 $volume=rand(40,130);
$in_offer=mysql_query("insert into tbl_finalkey (`session_id`,`keyword`,`volume`) VALUES ('$id','$fword','$volume')");
}
else {  $volume=rand(40,130);
 $in_offer=mysql_query("insert into tbl_finalkey (`session_id`,`keyword`,`volume`) VALUES ('$id','$mkeyword','$volume')");
	
}
}}} else 
	{
		
while($urlfectch=mysql_fetch_array($url))
{
	
	$banned = array(' http://','http://',' www.','www.','.co','.com', ' .com ', '.com ','.net', ' .net ', '.net ','.net', ' .co.in ', '.co.in ','.co.in', ' .org ', '.org ','.org', ' .org ', '.edu ', '.edu ','.uk', ' .us ', '.us ', '.uk ','.us', ' .gov ', '.gov','.org ','.info', ' .info ', '.biz ', '-', '- ', ' -', ' - ', '_', ' _', ' _ ', '_ ', '(', ' (', '( ', ' ( ', ')', ' )', ') ', ' ) ', '{', ' {', '{ ', ' { ', '}', ' }', '} ', ' } ', '[', ' [', '[ ', ' [ ', ']', ' ]', '] ', ' ] ', '+', ' +', '+ ', ' + ', '=', ' =', '= ', ' = '); //add more words as you want. KEEP THE SPACE around the word

$mkeyword  = trim(str_ireplace($banned, ' ', $urlfectch['key']));
	$mkeyword=str_replace("and","and",$mkeyword);
	$lastword = explode(' ', $mkeyword);
$lw = array_pop($lastword);
if($lw=="the" || $lw=="in" || $lw=="a" || $lw=="on" || $lw=="for" || $lw=="from" || $lw=="at" || $lw=="to" || $lw=="or" || $lw=="and" || $lw=="of" || $lw=="." || $lw=="-" || $lw=="_" ) 
{
	 $words = str_word_count($mkeyword, 1);
$lastWordn = array_pop($words);
 $fword = implode(" ", $words);
 ?>
  
 <?php
 $volume=rand(40,130);
$in_offer=mysql_query("insert into tbl_finalkey (`session_id`,`keyword`,`volume`) VALUES ('$id','$fword','$volume')");}
else { $volume=rand(40,130); $in_offer=mysql_query("insert into tbl_finalkey (`session_id`,`keyword`,`volume`) VALUES ('$id','$mkeyword','$volume')");	
}}}
$_SESSION['nottake']="nottake";
?>
   <?php header("location:relevantkeyword.php"); ob_end_flush(); ?>