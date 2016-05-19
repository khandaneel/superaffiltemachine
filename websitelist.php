<?php $display="block"; include('header.php'); $email=$_SESSION['email']; ?>


<?php 
if(isset($_POST['remove']))
{
echo $del=$_POST['del'];
$res=mysql_query("UPDATE tbl_registation SET status='0' WHERE id='$del'");
if($res)
{
header("location:websitelist.php");
}
}

?>
<?php include('slidemenu.php'); ?>
<?php
 $total_records=mysql_query("select * from tbl_user_registation where email='$email' "); 
 $total_records_fetch=mysql_fetch_assoc($total_records);
$total_websites = $total_records_fetch['membership'];

	$websites="3";


$completed_runing=mysql_query("select * from tbl_registation where email='$email' and status='1' and acess_category='unlimited'"); 
$completed_websites_runing=mysql_num_rows($completed_runing);

$completed_deleted=mysql_query("select * from tbl_registation where email='$email' and status='0' and acess_category='unlimited'"); 
$completed_websites_deleted=mysql_num_rows($completed_deleted);

$totalcompltedsites=$completed_websites_runing+$completed_websites_deleted;
$chngetonrml=(360/$websites);

$leftdomins=$websites-($completed_websites_runing+$completed_websites_deleted);

$leftdomins_final=$leftdomins*$chngetonrml;
$completed_websites_runing_final=$completed_websites_runing*$chngetonrml;
$completed_websites_deleted_final=$completed_websites_deleted*$chngetonrml;

?>
<script src="js/piechart.js"></script>
<script>

// kick things off
window.onload = createPieChart;

function createPieChart() {

	
	var pieChart = new PieChart( "piechart", 
		{
			includeLabels: true, 
			data: [<?php echo $completed_websites_deleted_final; ?>, <?php echo $leftdomins_final; ?>, <?php echo $completed_websites_runing_final; ?>],
			
			colors: [
            	["#c4bebe", "#c4bebe"],
            	["#96d50e", "#96d50e"],
            	["#e0700f", "#e0700f"]
			]
		}
	);

	
	pieChart.draw();



}
</script>


<div class="niche_right">
<?php include('describe_details.php'); ?>
	
  <div class="niche_names newniceee" style="margin-top:40px; height:60px;">
    	<span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Your current domains</span>
    </div>
    
    <div class="remainingbar">
    <div class="pie">
    <!--canvas id="piechart" width="100" height="100"></canvas-->
    </div>
    <div class="chart_per">
    	<div class="pie_ful">
        
        	<!--div class="pie_color">
            </div-->
            
            <!--div class="pie_name">
            Domain Left(<?php echo $leftdomins; ?>)
            </div-->
        </div>
        <div class="clear"></div>
        <div class="pie_ful">
        
        	<!--div class="pie_color"  style="background:#e0700f;">
            </div-->
            
            <!--div class="pie_name">
            Used(<?php echo $completed_websites_runing; ?>)
            </div-->
        </div>
        <div class="clear"></div>
        <div class="pie_ful">
        
        	<!--div class="pie_color" style="background:#c6c0c0;">
            </div-->
            
            <!--div class="pie_name">
            Deleted(<?php echo $completed_websites_deleted; ?>)
            </div-->
        </div>
    </div>
    
     </div>
    
     
  <div class="website_info" style="background:none;">
                    	
                        <div class="web_site_top bold">
                          	<div class="left_1 left" style="width:30%;">Your Site  </div>
                            <div class="left_2 left" style="text-align:center;width:30%;">Status  </div>
                             <div class="left_2 left" style="text-align:center;width:10%;">Edit</div>
                             <div class="left_2 left" style="text-align:center;width:10%;">Click To</div>
                            <div class="left_2 left" style="text-align:center;width:15%;">Delete</div>
                          </div>
                          
                          <div class="web_site_result">
                          <ul class="showdelte">
                            
                            
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
                                
                                
                               
                            </ul>
                          </div>
                          
                          
                    </div>  
   
    
</div>
<?php include('footer.php');