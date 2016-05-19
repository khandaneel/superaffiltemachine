<?php $display="block"; include('header.php');  ?>
<style>
.dashborad_left{display:none;} .minbutton_active{top:60px;}
</style>


<?php include('slidemenu.php'); ?>

<div class="offer_top" >
	<div class="search_off">
    	<form action="offervault_action.php" method="post">
        
    	<div><input type="text" placeholder="Paste your niche here" class="inp_min" required="required" name="offername"/></div>
        <div><input type="submit" value="SUBMIT" class="inp_sub" name="offerkey" /></div>
        
        </form>
    </div>
    
     </div>
<div class="clear"></div>

<a class='youtube' href="http://irankmedia.com/sam/capture-002-6.mp4"><div class="demo_video_pk displynonem" style="top:153px;">
    	<img src="images/demo_logo.png" />
    </div></a>
   <br />

    <center>
    <div class="offer_diff">
    	<div class="off_icon" >
        <input type="hidden" value="http://offervault.com" class="value" /> 
        	<img src="images/off1.png" width="48" height="31" style="margin-top: 9px;" />

        </div>
        
        <div class="off_icon" style="margin-top:5px;" >
            <input type="hidden" value="http://odigger.com" class="value" /> 
        	<img src="images/off2.png" width="38" height="18" style="margin-top:13px;" />
                       
        </div>
        
      <div class="off_icon" >
          <input type="hidden" value="http://markethealth.com" class="value" /> 
        	<img src="images/off3.png" width="33" height="37" style="margin-top: 4px;"/>

        </div>
        
        <div class="off_icon" >
            <input type="hidden" value="http://www.moreniche.com" class="value" /> 
        	<img src="images/off4.png" width="24" height="33" style="margin-top: 10px;" />
        </div>
        
        <div class="off_icon" >
            <input type="hidden" value="http://asseenonpc.com/" class="value" /> 
        	<img src="images/off5.png" width="37" height="34" style="margin-top: 5px;"/>
        </div>
        
        <div class="off_icon" >
            <input type="hidden" value="https://peerfly.com" class="value" /> 
        	<img src="images/off6.png" width="42" height="27" style="margin-top: 10px;"/>
        </div>
        
       
        <div class="off_icon" >
           <input type="hidden" value="http://www.sellhealth.com/" class="value" /> 
        <img src="images/off7.png" width="40" height="40" style="margin-top: 5px;" />
        </div>
        
        <div class="off_icon" >
            <input type="hidden" value="http://www.cj.com" class="value" /> 
        	<img src="images/off8.png" width="33" height="32" style="margin-top: 10px;"/>
        </div>
         <div class="off_icon" >
            <input type="hidden" value="http://www.jvzoo.com" class="value" /> 
        	<img src="images/off11.png" width="33" height="32" style="margin-top: 10px;"/>
        </div>
        <div class="clear"></div>
        
    </div>
    </center>
    <br />
    <div class="offer_if" style="margin-top:0px;">
    	<div class="next_step"><img src="images/loading.gif"  /></div>
      <div id="offerpages" class="ajxhere">
      <?php
	  if(isset($_GET['iurl']))
      { $ifraneurl="http://".$_GET['iurl']; } else { $ifraneurl="http://offervault.com"; } ?>
      <iframe src=<?php echo $ifraneurl; ?> height="6310" id="iframeID" width="1200" scrolling="no" frameborder="0"></iframe>
      </div>
      
    
   
</div>
              
                
                