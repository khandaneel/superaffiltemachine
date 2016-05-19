<?php $display="block"; include('header.php');  include("slidemenu.php");  $id=$_SESSION['id']; 


$url=mysql_query("select * from tbl_googleurl where session_id='$id'");
while($urlfectch=mysql_fetch_array($url))
{
	 $urlfectch['url'];
	
	$tags = get_meta_tags($urlfectch['url']);
	
	$offerkey1=explode(",",$tags['keywords']);
for($i=0;$i<7; $i++)
{ 
if(isset($offerkey1[$i]))
{
	$in_offer=mysql_query("insert into rekey (`session_id`,`key`) VALUES ('$id','".$offerkey1[$i]."')");
	
}}} ?>
  <!-- down part -->
	
    	
   <div class="niche_right">
<?php include('describe_details.php'); ?>
<div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Almost Done! </span>
    </div>
    <div class="clear"></div>

<br /><br />
<div class="niche_names" style="padding-left:65px; margin-top:50px; margin-left:370px; position:absolute;">
  
 <span class="image_name" style="margin-left:30px;">      <a class="tooltipnew" id="Relevant Keywords storage HUB"><img src="images/5.jpg" /></a></span>
         <span class="image_name" style="margin-left:35px;"> <a class="tooltipnew" id="Filtering oop's moments keywords"><img src="images/2.jpg" /></a></span>
   <span class="image_name" style="margin-left:35px;"> <a class="tooltipnew" id="Storing best and final relevant keywords"><img src="images/6.jpg" /></a></span>
    </div>
    <div class="clear"></div>
   <div class="gif_back">
            	<div class="gif_images">
                      <img src="images/animation3.jpg" />
                </div>
                
                <div class="gif_images2">
                      <img src="images/animation3.gif" />
                </div>
                
                
<a href="final_keyword.php">
                            
   <div class="gif_submit"> <div class="classname"> Start <img src="images/sub_arr.png" /> </div>  </div>
</a>
                
                
                
                <div class="after_submit">
                
                
					<div class="clear"></div>
                	<img src="images/catnew.gif" width="100" height="80" style="margin-left:30px;"/>
                    <br />
                   <p style="text-align:center;font-size:14px;color:#333;font-style:italic;"> Please Be Patient, This Process May Take Some Time</p>
                </div>
                
                
                
                
                
                
            </div>
    
</div>
        
      <div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox"> <br /> Almost Done!,</span> Let me find some more relevant keywords for your NICHE</div>
          <?php include("footer.php"); ?>