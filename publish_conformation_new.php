<?php  ob_start(); $display="block"; include('header.php');
error_reporting(0);

$id=$_SESSION['id'];
$email=$_SESSION['email'];



    
 $session_id=mysql_query("select * from tbl_registation where status='1' and  email='$email' and session_id='$id'  and acess_category='access'");
 $seeid=mysql_fetch_array($session_id);
 $session_id_final=mysql_query("select * from tbl_c_s_record where email='$email' and session_id='".$seeid['session_id']."' and domain_name='".$seeid['domain_name']."' "); 
	 $seeid_new=mysql_fetch_array($session_id_final);
	 if($seeid_new['admin_sett']==2)
	 {
		 $upadteme_first=mysql_query("UPDATE `tbl_c_s_record` SET `admin_sett`=11 WHERE email='$email' and session_id='".$seeid['session_id']."' and domain_name='".$seeid['domain_name']."'");
	 }                    


?>

<?php include('slidemenu.php'); ?>

<script type="text/javascript">
    $(document).ready(function(){


$('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
               $('.signup_in').css('display','block');
            }
            else if($(this).prop("checked") == false){
              $('.signup_in').css('display','none');
            }
        });
 });
</script>
<style>
.lite-green-check{background-image:url(images/check.png);}
label {
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}

input[type=checkbox].css-checkbox {
 position: absolute; 
    overflow: hidden; 
    clip: rect(0 0 0 0); 
    height:1px; 
    width:1px; 
    margin:-1px; 
    padding:0;
    border:0;
}

input[type=checkbox].css-checkbox + label.css-label {
padding-left:20px;
height:15px; 
display:inline-block;
line-height:15px;
background-repeat:no-repeat;
background-position: 0 0;
font-size:12px;
vertical-align:middle;
cursor:pointer; color:#666666;
}

input[type=checkbox].css-checkbox:checked + label.css-label {
background-position: 0 -15px;
}
.check_box_imge{position:absolute;}

input[type=checkbox].css-checkbox {
position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
}

input[type=checkbox].css-checkbox + label.css-label {
padding-left:29px;
height:24px; 
display:inline-block;
line-height:24px;
background-repeat:no-repeat;
background-position: 0 -1;
font-size:13px;
vertical-align:middle;
cursor:pointer;

}

input[type=checkbox].css-checkbox:checked + label.css-label {
background-position: 0 -23px;
}
label.css-label {
background-image:url(images/check.png);
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}



</style>
<div class="niche_right">

<a class='youtube' href="http://irankmedia.com/sam/capture-006.mp4"><div class="demo_video_pk">
    	<img src="images/demo_logo.png" />
    </div></a>
    <div class="workingplace" style="height:450px;">
            <div class="amazing" style="width:520px;">
            <p class="amzing1">One Click To Publish Your Website</p><br />
           <p class="amzing1" style="font-weight:normal;color:#000;width:60px;height:30px;margin:auto;float:left;margin-left:186px;">
            <span style="display:block;float:left;"><input type="checkbox" checked="checked"/></span>
             <span style="display:block;float:right;font-size:13px;margin-top:-3px;">Desktop</span>
            </p>
          
          <p class="amzing1" style="font-weight:normal;color:#000;width:55px;height:30px;float:left;margin-top:2px;margin-left:10px;">
            <span style="display:block;float:left;"><input type="checkbox" checked="checked" /></span>
             <span style="display:block;float:right;font-size:13px;margin-top:-3px;">Mobile</span>
            </p>
            
            
            <div class="clear"></div>
<p class="amzing2" style="text-align:center;font-size:12px;height: 30px;width: 515px;">
  <div class="toggleme"><input type="checkbox" name="checkboxG1[]" value="hyutyuty" id="checkmee" class="css-checkbox" checked="checked" />
<label for="checkmee" class="css-label">By Clicking Submit, I Confirm That My Data Will Be Replaced As Per The Modifications.</label></div>
</p>

    
   
 <style>.signup_in{display:block;} .highlightme {display:none;}</style>  
     
       
     
          <a  href='publish.php?SAM_id=<?php echo $id; ?>' ><div class="signup_in" style="width:80px; margin-left:228px; text-align:center; background:#428bca;">Submit</div></a>
        
           
            </div>
        
        </div>
  
        </div>