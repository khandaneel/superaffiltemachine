<?php ob_start();  include("config.php"); 
$qs=$_SERVER['QUERY_STRING']; $qs = str_replace("%20"," ",$qs); 
$qs=ucwords($qs);
 $id=$_SESSION['id'];


$insert_save=mysql_query("insert into tbl_winningkeyword (session_id,winningkeyword) values('$id','$qs')");


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