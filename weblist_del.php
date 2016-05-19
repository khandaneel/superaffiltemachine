<?php include("config.php"); ?>
<script>
$(document).ready(function()
  {
	  $('.closeit').delay(400).fadeOut(2500); 

$('.del1').hover(function(){
	$('.takdlete').removeClass("takdlete1");
$(this).find('.takdlete').addClass("takdlete1");
});
$('.del1').click(function(){
if(confirm("Are You sure to Delete"))
{
$('.showdelte').css("display","block");

$ara=$('.takdlete1').val();

$('.showdelte').load('weblist_del.php?'+$ara);

}
//$('.showdelte').delay(200).fadeOut(2500); 

});
});
</script>

<?php




 $id=$_SERVER['QUERY_STRING'];
 $idn=explode(",",$id);
 
$id=$idn[0];
 $sesid=$idn[1];
 

mysql_query("UPDATE tbl_registation SET status='0' WHERE id=$id");

mysql_query("delete from tbl_googleurl where session_id='$sesid' ");

mysql_query("delete from rekey where session_id='$sesid' ");

mysql_query("delete from tbl_youtube where session_id='$sesid' ");

mysql_query("delete from finalkey where session_id='$sesid' ");

mysql_query("delete from tbl_images where session_id='$sesid' ");

mysql_query("delete from tbl_finalkey where session_id='$sesid' ");

mysql_query("delete from tbl_insertexp_domain where session_id='$sesid' ");

mysql_query("delete from wp_posts where session_id='$sesid' ");

mysql_query("delete from tbl_article where session_id='$sesid' ");

mysql_query("delete from tb_anchoretext where session_id='$sesid' ");

mysql_query("delete from tbl_meta_description where session_id='$sesid' ");

mysql_query("delete from tbl_insertexp_domain_final where session_id='$sesid' ");

mysql_query("delete from tbl_meta_description_final where session_id='$sesid' ");

mysql_query("delete from tbl_winningkeyword where session_id='$sesid' ");

//mysql_query("delete from  `tbl_c_s_record` where session_id='$sesid' ");

mysql_query("UPDATE tbl_c_s_record SET admin_sett='4' where session_id='$sesid' ");

?>

 <div class="closeit" style="text-align:center; margin-left:300px; width:20%; height:80px; font-size:16px; display:block; color:#006699; font-weight:bold;   position:absolute; z-index:2; background:#FFF; box-shadow:0px 0px  10px #333333; border-radius:5px; line-height:70px;">Successfully Deleted</div>
                            
                             <?php     $email=$_SESSION['email']; 
                
 $session_id=mysql_query("select * from tbl_registation where status='1' and  email='$email' ");
 while($seeid=mysql_fetch_array($session_id))
 {
	$d_new_main=str_replace("http://","",$seeid['domain_name']);
$d_new_main=str_replace("http//","",$d_new_main);
	$d_new_main=str_replace("www.","",$d_new_main);
	 $session_id_final=mysql_query("select * from tbl_c_s_record where email='$email' and session_id='".$seeid['session_id']."' and domain_name='".$seeid['domain_name']."' "); 
	 $seeid_new=mysql_fetch_array($session_id_final);
	 if($seeid_new['admin_sett']==0)
	 { $mainstatus="Pending"; $mainstatus1="Please publish website under ‘Build Website’ "; $pendindquick="Quick Approve"; } elseif($seeid_new['admin_sett']==1 || $seeid_new['admin_sett']==10) { $mainstatus="Processing"; $mainstatus1="Waiting from authenticating form your server"; } elseif($seeid_new['admin_sett']==2 || $seeid_new['admin_sett']==11) { $mainstatus="Approved"; $mainstatus1="Website is Live"; }
	 elseif($seeid_new['admin_sett']==3) { $mainstatus="Auth. Failed"; $mainstatus1="Please Click & enter correct details"; $href="msg_update.php?id=".$seeid['session_id']; }
	   elseif($seeid_new['admin_sett']==5) { $mainstatus="Doamain Failed "; $mainstatus1="Domain Not Found in Server"; $href="msg_update.php?id=".$seeid['session_id']; }
	 
  ?>  
 
  
                            <li>
                                <form method="post" action="">
                                <a href="http://www.<?php echo $seeid['domain_name']; ?>" target="_blank"> <div class="left_3 left" style="width:30%;"> www.<?php echo $seeid['domain_name']; ?></div></a>
                        <a class="tooltipnew4566" href="<?php echo $href; ?>" id="<?php echo $mainstatus1;   ?>">  <div class="left_4 left" style="width:30%;">  <div class="ap_btn bgap_btn" style="margin-left:87px;"><?php echo $mainstatus; ?></div></div></a>
                            <a href="wp.php?domainid=<?php echo $seeid['session_id']; ?>"><div class="left_4 left" style="width:10%;"><div style="margin-top:19px;"><img src="images/edit.png" /></div></div></a>
<div class="left_4 left" style="width:10%;"><div style="margin-top:0px;"><a href="quick_approved.php?idquick=<?php echo $seeid['session_id']; ?>"><?php if($seeid_new['admin_sett']==0) {  echo $pendindquick; }?></a></div></div>
                            <div class="left_4 left" style="width:15%;">
                          <div class="dl_btn" style="background:none;margin-top:15px;"><div  style="background:url(images/del1.png) no-repeat; height:23px; width:23px; border:none; cursor:pointer;margin-left:-16px;" class="del1" >
                          
                          <input type="hidden" value="<?php echo $seeid['id'].",".$seeid['session_id']; ?>" class="takdlete" />
                          
                          </div></div>
                             </div>
                            </form>
                                </li>
                                <?php } ?>
                                