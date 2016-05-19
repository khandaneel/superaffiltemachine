<?php $display="block"; include('header.php');  $id=$_SESSION['id'];  $email=$_SESSION['email'];  

?>
<style>ul {padding:0px;margin: 0px;}
#list li {list-style: none; p{padding:4px 0px;}
.img_load{margin-left:400px;}</style>
<script type="text/javascript">
$(document).ready(function(){ 	
//hide message after 3 seconds
function slideout(){
  setTimeout(function(){
  $("#response").slideUp("slow", function () {
      });    
}, 500000);}
	
    $("#response").hide();
	$(function() {
	$("#list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
			
			var order = $(this).sortable("serialize") + '&update=update'; 
			$.post("updatedata.php", order, function(theResponse){
				$("#response").html(theResponse);
				$("#response").slideDown('slow');
				slideout();
			}); 															 
		}								  
		});
	});

});	
</script>

<?php include('wpupdated.php'); ?>


       
<?php $mainkey=mysql_query("SELECT * FROM  `tbl_offerword` where session_id='$id' ");
$mainkeyword=mysql_fetch_array($mainkey);
 $mkeyword=$mainkeyword['offerword'];?>
 
    <?php $Domain_p=mysql_query("SELECT * FROM `tbl_registation` WHERE session_id='$id' ");
$Domain_p=mysql_fetch_array($Domain_p);
 $Domain_p=$Domain_p['domain_name'];?>
        
 <link rel="stylesheet" type="text/css" href="css/colorbox.css" />
<script src="js/jquery.colorbox.js"></script>
<script>
		$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".inline_new").colorbox({inline:true, width:"79%"});
				
				$('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'watch-me') {
  $('.or_inp1').slideDown(1000);

  }
});
$('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'def') {
  $('.or_inp1').slideUp(1000);
  }
});
});
</script>       

<link rel="stylesheet" href="css/colorbox.css" />
<script src="js/jquery.colorbox.js"></script>

		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".inline1").colorbox({inline:true, width:"63%"});
				
			});
		</script>
      <?php   include("wp_slidemenu.php"); ?>
<body style="background:#f1f1f1;">
<div class="niche_right">
	
    <?php include('describe_details.php'); ?>
    

<div class="wp_bttns">
   <a  href="publish_conformation.php" target="_blank"><div class="post_btns">
        Publish 
        </div></a>
       <a  href="earthpro.php" target="_blank">  <div class="post_btns" style="margin-left:20px;">
        Preview</div></a>
        
    </div>
    
 <!--<div class="wp_bttns">
   <a href="erthpro.zip"><div class="post_btns">
        Publish
        </div></a>
       <a  href="combinedatabase.php" target="_blank">  <div class="post_btns" style="margin-left:20px;">
       Database
        </div></a>
        
    </div>  -->



<div style='display:none'>
<center>
           <div id='inline_content' style='padding:10px; background:#fff;'>
<input type="text" class="wp_inp" value="<?php echo $seeid['domain_name'].":2082" ?>" style="text-align:center;font-size:16px;width:60%;margin-left:110px;">
                <br><br>
                <input type="text" class="wp_inp" placeholder="cPanel User name" style="text-align:center;font-size:16px;width:60%;margin-left:110px;">
                <br><br>
                <input type="text" class="wp_inp" placeholder="cPanel Password" style="text-align:center;font-size:16px;width:60%;margin-left:110px;">
                <br><br>
               <input type="submit" class="post_btns" value="Submit" style="margin-left:280px;">
</div>
           </center>
</div>
<div class="clear"></div>
       <form action="update_article.php" method="post" enctype="multipart/form-data">
    <p class="wp_panel_heading">Edit Page</p>
    	<input type="text" class="wp_inp" style="text-transform:capitalize;" value="<?php echo $keyword_key; ?>" />
        <br />  <br />
      <div style="height:25px; width:92%; background:#FFFFFF;">
      	 <div style="margin-left:20px;float:right;"><input type="submit" value="Update" class="post_btns" name="article_submitkkk" style="border:none;"></div>
      </div>
        <textarea  class="wp_textarea" style="width:92%;">
        <div style="min-height:900px; max-height:auto; width:100%; background:#FFFFFF;">
        
<div class="imagesetext" >
<img src="images/be.gif" align="middle" class="img_load" style="display:none;margin-left:430px;"/>  
<?php $imagestext=mysql_query("select * from tbl_images where session_id='".$seeid['session_id']."' and keyword='$keyword_key' and activatation='0' "); $imagestext=mysql_fetch_array($imagestext); ?>
              
                						<?php if(!empty($imagestext['images']))
										{ echo "<img src='".$imagestext['images']."' height='200' alt='".$imagestext['post_title']."' /><br>";} ?>
</div>
<div  class="interlink" >     <?php $interlink=mysql_query("select * from tbl_internallinking where session_id='".$seeid['session_id']."' and keyword='$keyword_key' and activatation='1' ");
	
			  $interlink=mysql_fetch_array($interlink);  if(!empty($interlink['anchorlink']))
										{echo $interlink['anchorlink']."<br>";} ?></div>

<div class="articlediv" >

<img src="images/be.gif" align="middle" class="article_load" style="display:none;margin-left:430px;"/>   
<?php $article=mysql_query("select * from tbl_article where session_id='".$seeid['session_id']."' and keyword='$keyword_key' and activatation='0' "); $article=mysql_fetch_array($article); ?>
              
                						<?php if(!empty($article['article']))
										{ echo $article['article'];} ?>
</div>
<br>



<div class="youtubevideo" >

<img src="images/be.gif" align="middle" class="video_load" style="display:none;margin-left:430px;"/>  
       <?php $imagestext=mysql_query("select * from tbl_youtube where session_id='".$seeid['session_id']."' and keyword='$keyword_key' and activatation='0' ");

	 $imagestext=mysql_fetch_array($imagestext);  ?><?php if(!empty($imagestext['youtube']))
										{ echo "<br><iframe src='".$imagestext['youtube']."' height='300' width='610' frameborder='0' allowfullscreen ></iframe><br>";} ?>  
</div><br> 

<div  class="anchoreetext" style="text-decoration:underline;">
        <?php $anchoretext=mysql_query("select * from tb_anchoretext where session_id='".$seeid['session_id']."' and keyword='$keyword_key' and activatation='0' ");
	
									
			  $anchoretext=mysql_fetch_array($anchoretext); ?>
              
                						<?php if(!empty($anchoretext['anchoretext']))
										{ echo $anchoretext['anchoretext']."<br>";} ?>  <br>
      <br>
    
</div>  



 </div>
        </textarea>
        
  
        <div style="height:25px; width:92%; background:#FFFFFF;">
      	 <div style="margin-left:20px;float:right;"><input type="submit" value="Update" class="post_btns" name="article_submitkkk" style="border:none;"></div> 
      </div>
   
        </form>
     <?php include('addmeta_new.php');  ?>
      <div class="wp_seo_yoast">
      	<p class="yst_font">Website SEO <div style="text-align:right; float:right;"><strong>Meta Data </strong></div></p>
        <div class="line_div"></div>
        
        <div class="wp_menu">
        	<ul>
            	<li><a href="#">General</a></li>
               <!-- <li><a href="#">Page Analysis</a></li>
                <li><a href="#">Advanced</a></li>
                <li><a href="#">Social</a></li> -->
            </ul>
            <div class="clear"></div>
            
            <div class="yoast_data">
            	
                <div class="yoast_data_left">
                <p class="yst_font_sml">Snippet Preview</p>
                </div>
                
                <div class="yoast_data_mid">
                 <a class="tooltipnew123" id="This is a rendering of what this post might look like in Google's search results.">  <img src="images/wp_qu.png" /></a>
                </div>
              
                <div class="yoast_data_right">
               <a class="title" id="wpseosnippet_title" href="#" style="font-size:20px;color:#609; text-transform:capitalize;"><?php echo $metadestt; ?></a>
                <br><span class="url" style="color:#006621;"><?php echo $seeid['domain_name']."/".str_replace(" ","-",$mkeyword); ?>.php</span><p class="desc">
                <div class="content mmeta" id="message" style="min-height:50px; padding:3px; border-radius:3px;"><?php echo $metades;?></div></p>
              
                </div>
                
                <div class="clear"></div>
                <br />
                
                 <div class="yoast_data_left">
                <p class="yst_font_sml" id="Keyword">Focus Keyword:</p>
                </div>
                
                <div class="yoast_data_mid">
               <a class="tooltipnew123" id="Pick the main keyword or keyphrase that this post/page is about.">   <img src="images/wp_qu.png" /></a>
                </div>
                
                <div class="yoast_data_right">
                <input type="text" class="wp_inp" style="width:100%; font-size:13px; text-align:left;" value="<?php if(!empty($seotitle11)) {  echo $seotitle11;  } else{ $fuchkey=mysql_query("SELECT * FROM `tbl_finalkey` WHERE  session_id='".$seeid['session_id']."' limit 3,6"); while($fukey=mysql_fetch_array($fuchkey)){echo $fukey['keyword'].", ";}} ?>"/>
                </div>
                
                <div class="clear"></div>
                <br />
                
                 <div class="yoast_data_left">
                <p class="yst_font_sml">SEO Title:</p>
                </div>
                
                <div class="yoast_data_mid">
               <a class="tooltipnew123" id="The SEO Title defaults to what is generated based on this sites title template for this posttype."><img src="images/wp_qu.png" /></a>
                </div>
                
             
                <div class="yoast_data_right">
              <input type="text" class="wp_inp newittake1" id="textBox1" style="width:100%; font-size:13px; text-align:left; padding-left:0px;" value="<?php echo $metadestt; ?>"/>
                </div>
                
                <div class="clear"></div>
                <br />
                <div>
   

    
</div>
                 <div class="yoast_data_left">
                <p class="yst_font_sml">Meta Description:</p>
                </div>
                
                <div class="yoast_data_mid">
                <a class="tooltipnew123" id="If the meta description is empty, the snippet preview above shows what is generated based on this sites meta description template."><img src="images/wp_qu.png" /></a>
                </div>
                 
                <div class="yoast_data_right">
               <input type="text" class="wp_inp newittake" id="textBox"  style="width:100%; font-size:12px; text-align:justify; height:60px; overflow:hidden;" value="<?php echo $metades;?>"> 
               <br /><br />
               <p class="mmeta">The <span style="background:#ccc;padding:2px;">meta</span> description will be limited to 156 chars.</p>
               <div class="notthis" style="display:none;"></div>
                </div>
                
            
            </div>
            
            <div class="clear"></div>
            
        </div>
      </div>
</div>

    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
                  
    

        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

  </script>