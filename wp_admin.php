<?php $display="block"; include('header.php'); $id=$_SESSION['id'];?>


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
<script src="js/piechart.js"></script>
<script>

// kick things off
window.onload = createPieChart;

function createPieChart() {

	
	var pieChart = new PieChart( "piechart", 
		{
			includeLabels: true, 
			data: [50, 250, 60],
			
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
<script>
function del(id)
{
	
        if (confirm("Do your really want to delete your Domain?"))
        {
            window.location.href= 'weblist_del.php?delete=true&id='+id; 
        }
}
</script>

<div class="niche_right">
<?php include('describe_details.php'); ?>
	
  <div class="niche_names newniceee" style="margin-top:40px; height:60px;">
    	<span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Access Your WP Admin Here</span>
    </div>
    
    
    
     
  <div class="website_info" style="background:none;">
                    	
                        <div class="web_site_top bold">
                          	<div class="left_1 left nresponseme">Your Site  </div>
                            <div class="left_2 left nresponseme" >Status  </div>
                            
                            <div class="left_2 left nnrespnse nresponseme">WP - Access</div>
                        
                          </div>
                          
                          <div class="web_site_result">
                          <ul>
                            
                             <?php     $email=$_SESSION['email']; 
                
 $session_id=mysql_query("select * from tbl_registation where status='1' and  email='$email' and acess_category='access'");
 while($seeid=mysql_fetch_array($session_id))
 {
	 $d_new_main=str_replace("http://","",$seeid['domain_name']);
$d_new_main=str_replace("http//","",$d_new_main);
	$d_new_main=str_replace("www.","",$d_new_main);
	$session_id_final=mysql_query("select * from tbl_c_s_record where email='$email' and session_id='".$seeid['session_id']."' and domain_name='".$seeid['domain_name']."' "); 
	 $seeid_new=mysql_fetch_array($session_id_final);
	 if($seeid_new['admin_sett']==2 || $seeid_new['admin_sett']==11)
	 {  
  ?>  
                            <li>
                                <form method="post" action="">
                                <div class="left_3 left nresponseme"> www.<?php echo $seeid['domain_name']; ?></div>
                                
                                <?php $ftp=explode('.',$seeid['domain_name']);
								$folder_add=$id.$ftp[0];
								
								?>
                            <div class="left_4 left nresponseme"><div class="ap_btn bgap_btn">Approved</div></div>
                        
                           
                            <a href="http://www.<?php echo $d_new_main; ?>/wp-login1.php" target="_blank"><div class="left_4 left nnrespnse  nresponseme" ><div style="margin-top:19px;"><img src="images/edit1.png" /></div></div></a>
                           <div class="left_4 left"  style="width:20px;margin-top:24px;margin-left:-30px;">
                         
                           <div class='notwin' style="margin-top:0px;"><a class='tooltipnew451' id='User id:admin      pass: samadmin' style="position:absolute;" ><img src="images/whyseo.png" /></a>
                          
                           </div>
                           </div>
                            </form>
                                </li>
                                <?php } } ?>
                                
                                
                               
                            </ul>
                          </div>
                          
                          
                    </div>  
   
    
</div>
<?php include('footer.php');