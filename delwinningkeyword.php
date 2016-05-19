<?php ob_start();  include("config.php"); 
$qs=$_SERVER['QUERY_STRING']; $qs = str_replace("%20"," ",$qs); 
$qs=ucwords($qs);
 $id=$_SESSION['id'];


$deledt=mysql_query("DELETE FROM `tbl_winningkeyword` WHERE session_id='$id' and winningkeyword='$qs'");	

$inside1=mysql_query("SELECT * FROM  `tbl_winningkeyword` where session_id='$id'  GROUP BY `winningkeyword`");

?>
 

<div class="menumy">Home</div>
<?php
while($keydata=mysql_fetch_array($inside1))
{
?>
<div class="menumy"><?php echo $keydata['winningkeyword']; ?></div>
<?php }
?>