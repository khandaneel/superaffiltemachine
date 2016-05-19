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
    
     <a class='youtube' href="http://irankmedia.com/sam/capture-006.mp4"><div class="demo_video_pk1">
    	<img src="images/demo_logo.png" />
    </div></a>

<div class="wp_bttns" style="display:none;">
   <a  href="publish_conformation.php" target="_blank"><div class="post_btns">
        Publish 
        </div></a>
       <a  href="preview.php" target="_blank">  <div class="post_btns" style="margin-left:20px;">
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
<img src="images/be.gif" align="middle" class="img_load" height="25" width="25"  style="display:none;margin-left:430px;"/>
    
     <p class="wp_panel_heading">Edit Page &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:17px;"><a href="wp_delete.php?id=<?php echo $id; ?>&msg=<?php echo $keyword_key; ?>">Delete Page</a></span></p>
   
        <input type="text" class="wp_inp" name="" style="text-transform:capitalize;" value="<?php echo $keyword_key; ?>" />
        <br />  <br />
      
      <div class="new_pattren_menus">
      		<div class="newpat_menus">
            <div class="wp_menu_new_pa">
            	<div class="icon_con_wp"><img src="images/aa1.png">&nbsp;&nbsp;Article</div>
            </div>
            
            <div class="wp_menu_new_pa">
           	 <div class="icon_con_wp"><img src="images/aa2.png">&nbsp;&nbsp;Linking</div>
            </div>
            
            <div class="wp_menu_new_pa">
             <div class="icon_con_wp"><img src="images/aa3.png">&nbsp;&nbsp;Images</div>
            </div>
            
            <div class="wp_menu_new_pa">
            <div class="icon_con_wp"><img src="images/aa4.png">&nbsp;&nbsp;Video</div>
            </div>
            
            <div class="wp_menu_new_pa">
             <div class="icon_con_wp"><img src="images/aa5.png">&nbsp;&nbsp;Tag & Widget</div>
            </div>
            
            <div class="wp_menu_new_pa">
            <div class="icon_con_wp"><img src="images/aa3.png">&nbsp;&nbsp;Header</div>
            </div>
            </div>
            <div class="clear"></div>
            <div class="newpat_menus_icons_down">
            	<div class="newpat_menus_icons">
                
                	<div class="icon_wp_down">
                    
                                            <input type="hidden" value="<?php echo $keyword_key;  ?>" class="articlebttn"  /> 
                                            <img src="images/ai1.png" class='articleadd cur' title="Generate"> </div>
                    
                    <div class="icon_wp_down"> 
                    <a href="https://www.fiverr.com/s/7dszr7" target="_blank" title="Order"> 
                                            <input type="hidden" value="<?php echo $keyword_key;  ?>"  class="articlebttn" /><img src="images/ai2.png">
                                            
                                            </a>
                                             </div>
                    
                    <div class="icon_wp_down"> 
                    <a href="http://goarticles.com/" target="_blank" title="Search"><img src="images/ai3.png"></a> </div>
                
                
                </div>
                
                <div class="newpat_menus_icons">
                
                	  <?php if(mysql_num_rows($subpagekey)>1) {  ?>
                	<div class="icon_wp_down_2"> <img src="images/ai4.png" 

class="interlinknew cur" title="Internal Linking"></div>
                    
                    <?php } else { ?>
                      	<div class="icon_wp_down_2"> <img src="images/ai4.png" 

class="alert_message" title="Internal Linking"></div>
                    <?php } ?>
                    
                    <div class="icon_wp_down_2"> <img src="images/ai5.png" class="externalink cur" title="External Linking"></div>
                    
                    
                
                
                </div>
                
                <div class="newpat_menus_icons">
                
                	<div class="icon_wp_down3">
                    
                     <img src="images/ai6.png" class="imageschanges cur" title="Insert Image"> </div>
                    
                   
                   
                
                
                </div>
                
                <div class="newpat_menus_icons">
                
                	<div class="icon_wp_down_2"> 
                    <img src="images/ai6.png" class="youtubechange cur" title="Insert Video"> </div>
                    
                    <div class="icon_wp_down_2"> 
                    <a class='inline' href="#inline_content_youtube" title="Add Video"><img src="images/ai7.png"></a> </div>
                
                
                </div>
                
                <div class="newpat_menus_icons">
                
                		<div class="icon_wp_down_2"> <a class='inline' href="#inline_tag" title="Tag Line"><img src="images/ai8.png"> </a></div>
                        <div class="icon_wp_down_2"> <a class='widget' title="Widget"><img src="images/aa7.png"> </a></div>
                
                
                </div>
                
                <div class="newpat_menus_icons" style="border:none;">
                
                	<div class="icon_wp_down_2">
                    <a class='inline_new' href="#inline_content_header_own" title="Upload/Select"> <img src="images/ai6.png"> </a></div>
                    
                    <div class="icon_wp_down_2"> <a href="https://www.fiverr.com/s/77rk17" target="_blank" title="Out Source"> <img src="images/ai9.png"></a> </div>
                
                
                </div>
            </div>
      
      </div>

   <?php  $wedgetdata=mysql_query("SELECT * FROM `tbl_widget` WHERE session_id='$id'");
$recdata_wed=mysql_fetch_array($wedgetdata); ?>
      <div class="widget1">
            <form action="update_widgets.php" method="post" enctype="multipart/form-data">
         
      <div class="widget_name">Title</div>
      <input type="text" class="wp_inp" name="title_widgtes" style="text-transform:capitalize;width:90%;margin-left:10px;margin-top:10px;" value="<?php echo $recdata_wed['title'];  ?>" />
      
      <div style="margin-left:10px;margin-top:10px;">
      	<textarea class="widget_txtarea" name="dsc_widgtes" style="height:200px;">
        <?php echo $recdata_wed['description'];  ?>
        </textarea>
      </div>
      
      <div>
      <span class="cl_widget widget" style="cursor:pointer; text-decoration:underline; color:#006699">Close</span>
      <span class="widget_right"><input type="submit" value="Save" class="post_btns" name="widget_submit" style="border:none;"></span>
      </div>
          </form>
      </div>
  
     <div class="clear"></div>
      <form action="update_article.php" method="post" enctype="multipart/form-data">
       <div  style=" position:absolute; top:130px; right:11%;"><input type="submit" value="Update" class="post_btns" name="article_submitkkk" style="border:none; height:40px; font-size:14px; width:100px;"></div>
          <input type="text" class="wp_inp" name="keywordnewtk"  style="text-transform:capitalize; display:none;" value="<?php echo $keyword_key; ?>" />
        <textarea  class="wp_textarea"  style="width:92%;" name="allvaluearticle">
        <div class="myclass_new"  style="height:auto; width:100%; background:#FFFFFF;">
      <?php 
 $post_title=mysql_query("select * from wp_posts where session_id='".$seeid['session_id']."' and post_title='$keyword_key' "); $post_title12=mysql_fetch_array($post_title); 
              
                                     echo $post_title12['post_content'];?>
</div>
        </textarea>
        
  
        <div style="height:25px; width:92%; background:#FFFFFF;">
           <div style="margin-left:20px;float:right;"><input type="submit" value="Update" class="post_btns" name="article_submitkkk" style="border:none;"></div> </div>
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
                
                <!-- For focus keyword--->
                <?php $focuskeyword=mysql_query("SELECT * FROM `tbl_focuskeyword` WHERE `session_id`='".$seeid['session_id']."' and keyword='$keyword_key'");
				$keyword_focus=mysql_fetch_array($focuskeyword);
				$keyword_focus=$keyword_focus['focuskeyword'];
				  ?>
             <div class="dontdis" style="display:none"></div>
                <div class="yoast_data_right">
                <input type="text" class="wp_inp newittake2" id="textBox2" style="width:100%; font-size:13px; text-align:left;" value="<?php if(!empty($keyword_focus)) {  echo $keyword_focus;  } else{ $fuchkey=mysql_query("SELECT * FROM `tbl_finalkey` WHERE  session_id='".$seeid['session_id']."' limit 3,8"); while($fukey=mysql_fetch_array($fuchkey)){echo $fukey['keyword'].", ";}} ?>"/>
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