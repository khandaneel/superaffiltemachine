<?php $display="block"; include('header.php');  ?>

<?php include('slidemenu.php'); ?>


<style>
.produresearc{display:block;}
</style>

<div class="niche_right">
<?php include('describe_details.php'); ?>

    <div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Rank Booster</span>
    </div>
    <div class="clear"></div>
    <div class="niches">
        
       <div class="keymain" style="margin-top:108px;">
<div class="key">
<p class="heading">Enter Url and Keyword</p>
<form action="google_postion.php" method="post" >
	<div class="key_he">
    	
    	<div class="inp1"><input type="text" name="domain" class="inp" placeholder="Enter URL" required="required"/></div>
        <div class="inp1"><input type="text" name="keywords" class="inp" placeholder="Enter Keyword" required="required" /></div>
        
    </div>
    <div class="clear"></div>
    <div style="margin-top:15px;margin-left:200px;">
    <input type="submit" name="submit" class="inp_sub" type="button"  id="simple-post" style="margin-left:50px;"/>
    </div>
    </form>
</div></div>
        
        
        
    </div>
    
   
        
        
        
    </div>
    


  <div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox">Here you need to search <br />  for some product name. Don't worry, <span class="samcolor">SAM</span> will find the easy keywords to target automatically for you.</div>

<?php include('footer.php');