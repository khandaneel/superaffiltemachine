<?php include('config.php'); ?>

<?php   
                
 $session_id=mysql_query("select * from tbl_registation where status='0' ");
 while($seeid=mysql_fetch_array($session_id))
 {
	
	 $session_id_final=mysql_query("UPDATE `tbl_c_s_record` SET `admin_sett`=4 WHERE session_id='".$seeid['session_id']."'"); 
	
}
  ?>  
 