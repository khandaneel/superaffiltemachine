<?php $display="block"; include('header.php'); unset($_SESSION['id']); ?>

<?php include('slidemenu.php'); ?>

<style>
.produresearc{display:block;}
</style>

<div class="niche_right">
<?php include('describe_details.php'); ?>

    <div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Default Images</span>
    </div>
    <div class="clear"></div>
    <div class="niches">
        
    	<div class="available-headers masonry" style="position: relative; height: 204px;"><div class="default-header masonry-brick" style="position: absolute; left: 0px; top: 0px;">     <label><input name="default-header" type="radio" value="berries"><img src="http://www.teespool.com/acesleep/wp-content/themes/twentyfourteen/images/headers/berries-thumbnail.jpg" alt="Berries" title="Berries"></label></div><div class="default-header masonry-brick" style="position: absolute; left: 276px; top: 0px;"><label><input name="default-header" type="radio" value="cherryblossom"><img src="http://www.teespool.com/acesleep/wp-content/themes/twentyfourteen/images/headers/cherryblossoms-thumbnail.jpg" alt="Cherry Blossoms" title="Cherry Blossoms"></label></div><div class="default-header masonry-brick" style="position: absolute; left: 552px; top: 0px;"><label><input name="default-header" type="radio" value="concave"><img src="http://www.teespool.com/acesleep/wp-content/themes/twentyfourteen/images/headers/concave-thumbnail.jpg" alt="Concave" title="Concave"></label></div><div class="default-header masonry-brick" style="position: absolute; left: 0px; top: 68px;"><label><input name="default-header" type="radio" value="fern"><img src="http://www.teespool.com/acesleep/wp-content/themes/twentyfourteen/images/headers/fern-thumbnail.jpg" alt="Fern" title="Fern"></label></div><div class="default-header masonry-brick" style="position: absolute; left: 276px; top: 68px;"><label><input name="default-header" type="radio" value="forestfloor"><img src="http://www.teespool.com/acesleep/wp-content/themes/twentyfourteen/images/headers/forestfloor-thumbnail.jpg" alt="Forest Floor" title="Forest Floor"></label></div><div class="default-header masonry-brick" style="position: absolute; left: 552px; top: 68px;"><label><input name="default-header" type="radio" value="inkwell"><img src="http://www.teespool.com/acesleep/wp-content/themes/twentyfourteen/images/headers/inkwell-thumbnail.jpg" alt="Inkwell" title="Inkwell"></label></div>
        
        
        
        <div class="default-header masonry-brick" style="position: absolute; left: 0px; top: 136px;"><label><input name="default-header" type="radio" value="path" checked="checked"><img src="http://www.teespool.com/acesleep/wp-content/themes/twentyfourteen/images/headers/path-thumbnail.jpg" alt="Path" title="Path"></label></div><div class="default-header masonry-brick" style="position: absolute; left: 276px; top: 136px;"><label><input name="default-header" type="radio" value="sunset"><img src="http://www.teespool.com/acesleep/wp-content/themes/twentyfourteen/images/headers/sunset-thumbnail.jpg" alt="Sunset" title="Sunset"></label></div>  
        
        
        
        <div class="default-header masonry-brick" style="position: absolute; left: 552px; top: 136px;"><label><input name="default-header" type="radio" value="sunset"><img src="http://www.teespool.com/acesleep/wp-content/themes/twentyfourteen/images/headers/path.jpg" alt="Sunset" title="Sunset" width="230" height="48"></label></div>
        
        
        <div class="clear masonry-brick"></div></div>
            
            <br><br>
            <input type="submit" name="removeheader" id="removeheader" class="button" value="Submit your header">
        </div>
        
        
        
    </div>
    
    
    <div class="clear"></div>
    
    
</div>

  <div class="samimg"><img src="images/nonread.gif" /></div>
        
        
<div class="samimgbox">Here you need to search <br />  for some product name. Don't worry, <span class="samcolor">SAM</span> will find the easy keywords to target automatically for you.</div>

<?php include('footer.php');