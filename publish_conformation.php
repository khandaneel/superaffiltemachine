<?php  ob_start(); $display="block"; include('header.php');
error_reporting(0);

$id=$_SESSION['id'];
$email=$_SESSION['email'];

$reidnew=mysql_query("select * from tbl_registation where email='$email' and session_id='$id'");
$postidnew=mysql_fetch_array($reidnew);  $folderclint=explode(".",$postidnew['domain_name']);
$folder_add=$id.$folderclint[0];
$getkeyword=mysql_query("select * from wp_posts where session_id='$id'  GROUP BY post_title ORDER BY ID ASC");

while($keywordvalue=mysql_fetch_array($getkeyword))
{
$keyword_key=$keywordvalue['post_title'];





 $tagline=mysql_query("SELECT * FROM `tbl_tagline` WHERE session_id='$id'");
$dectag=mysql_fetch_array($tagline);
$tbl_meta=mysql_query("select * from `tbl_meta_description_final` where session_id='$id' and keyword='$keyword_key'");

$tbl_meta=mysql_fetch_array($tbl_meta);
 $metades=mysql_real_escape_string($tbl_meta['metadescription']);
 
 $tbl_metatt=mysql_query("select * from `tbl_meta_title_final` where session_id='$id' and keyword='$keyword_key'");

$tbl_metatt=mysql_fetch_array($tbl_metatt);
 $metadestt=mysql_real_escape_string($tbl_metatt['metatitle']);

$updatearticle=mysql_query("UPDATE `wp_posts` SET `meta_description`='$metades',`post_mime_type`='$metadestt' WHERE session_id='$id' and post_title='$keyword_key'");

                        
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

    
   
    <?php 
// widgets Retrive  Area:::::::::::::::::

$tbl_widget=mysql_query("SELECT * FROM `tbl_widget` WHERE session_id='$id'  ");
$Rec_tbl_widget=mysql_fetch_array($tbl_widget);

$dataferomwp=mysql_query("SELECT * FROM wp_posts where session_id='$id' GROUP BY post_title ORDER BY ID ASC");
$publishttt=mysql_query("select * from  tbl_db where `usersession`='$id' ");
$publishttt_res=mysql_fetch_array($publishttt);
$ndbpass=$publishttt_res['pwd'];
$ndbuser=$publishttt_res['username'];
$dbhandle = mysql_connect("localhost", $ndbuser, $ndbpass);
$databs=mysql_select_db($ndbuser);


if($dbhandle)
{
$deleterecords = "TRUNCATE TABLE wp_posts";
}


mysql_query($deleterecords);
while($wpdata=mysql_fetch_array($dataferomwp))
{
    
    $res=strtolower($wpdata['post_name']);
	$postname=str_replace(" ","-",$res);
	
    $postconten=mysql_real_escape_string($wpdata['post_content']);
    $insrt=mysql_query("INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES ('".$wpdata['ID']."','".$wpdata['post_author']."','".$wpdata['post_date']."','".$wpdata['post_date_gmt']."','$postconten','".$wpdata['post_title']."','".$wpdata['post_excerpt']."','".$wpdata['post_status']."','".$wpdata['comment_status']."','".$wpdata['ping_status']."','".$wpdata['post_password']."','".$postname."','".$wpdata['to_ping']."','".$wpdata['pinged']."','".$wpdata['post_modified']."','".$wpdata['post_modified_gmt']."','".$wpdata['post_content_filtered']."','".$wpdata['post_parent']."','".$wpdata['guid']."','".$wpdata['menu_order']."','".$wpdata['post_type']."','','".$wpdata['comment_count']."')");
    
	if(!empty($wpdata['meta_description']) && $wpdata['meta_description']!=''){
	
	mysql_query("DELETE FROM `wp_postmeta` WHERE post_id='".$wpdata['ID']."' and meta_key='_yoast_wpseo_metadesc'");
	
    $import_mtata=mysql_query("INSERT INTO `wp_postmeta`(`post_id`, `meta_key`, `meta_value`) VALUES ('".$wpdata['ID']."','_yoast_wpseo_metadesc','".$wpdata['meta_description']."')");
	}
	if(!empty($wpdata['post_mime_type']) && $wpdata['post_mime_type']!=''){
	
	mysql_query("DELETE FROM `wp_postmeta` WHERE post_id='".$wpdata['ID']."' and meta_key='_yoast_wpseo_title'");
	
	  $import_mtatan=mysql_query("INSERT INTO `wp_postmeta`(`post_id`, `meta_key`, `meta_value`) VALUES ('".$wpdata['ID']."','_yoast_wpseo_title','".$wpdata['post_mime_type']."')");
	}
	
	
   if($wpdata['post_type']=="post")
	{
    $update2=mysql_query("UPDATE `wp_options` SET `option_value`='".$wpdata['post_mime_type']."' WHERE option_name='blogdescription'");
	}
    
}

$option_value='a:2:{i:0;s:45:"responsive-twentyten/responsive-twentyten.php";i:1;s:24:"wordpress-seo/wp-seo.php";}';


$update_plugin=mysql_query("UPDATE `wp_options` SET `option_value`='$option_value',`autoload`='yes' WHERE option_name='active_plugins'");
  
  $option_valuenewme=$domain_variable."/".$folder_add;

$siteurl=mysql_query("UPDATE `wp_options` SET `option_value`='$option_valuenewme',`autoload`='yes' WHERE option_name='siteurl'");
$homeurl=mysql_query("UPDATE `wp_options` SET `option_value`='$option_valuenewme',`autoload`='yes' WHERE option_name='home'");

$update_plugin=mysql_query("UPDATE `wp_options` SET `option_value`='$option_value',`autoload`='yes' WHERE option_name='active_plugins'");

$perallink=mysql_query("UPDATE `wp_options` SET `option_value`='/%postname%/' WHERE option_name='permalink_structure'");

// widgets Area Insert:::::::::::::::::

$s_w_description='a:9:{s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:19:"wp_inactive_widgets";a:0:{}s:19:"primary-widget-area";a:0:{}s:21:"secondary-widget-area";a:1:{i:0;s:6:"text-3";}s:24:"first-footer-widget-area";a:0:{}s:25:"second-footer-widget-area";a:0:{}s:24:"third-footer-widget-area";a:0:{}s:25:"fourth-footer-widget-area";a:0:{}s:13:"array_version";i:3;}';

$sidebars_widgets=mysql_query("UPDATE `wp_options` SET `option_value`='$s_w_description',`autoload`='yes' WHERE option_name='sidebars_widgets'");



$sidebars_widgets_data=trim($Rec_tbl_widget['description']);
$s_w_lenght=strlen($sidebars_widgets_data);

$widget_text_data=trim($Rec_tbl_widget['title']);

$t_w_lenght=strlen($widget_text_data);

$finaldata_w_text='a:2:{i:3;a:3:{s:5:"title";s:'.$t_w_lenght.':"'.$widget_text_data.'";s:4:"text";s:'.$s_w_lenght.':"'.$sidebars_widgets_data.'";s:6:"filter";b:0;}s:12:"_multiwidget";i:1;}';


$widget_text=mysql_query("UPDATE `wp_options` SET `option_value`='$finaldata_w_text',`autoload`='yes' WHERE option_name='widget_text'");




$title=mysql_query("SELECT * FROM `wp_posts` WHERE post_type='post'");
$postitle=mysql_fetch_array($title);


if(mysql_num_rows($tagline)>0)
{$dec=$dectag['tagline'];} else {$dec="A Perfect ".$postitle['post_title']." Website";}

$gmail=explode(" ",$postitle['post_title']);
$gmail=$gmail[0]."@gmail.com";
$update1=mysql_query("UPDATE `wp_options` SET `option_value`='".$postitle['post_title']."' WHERE option_name='blogname'");

$update3=mysql_query("UPDATE `wp_options` SET `option_value`='$gmail' WHERE option_name='admin_email'");
$active_lug='a:3:{i:0;s:47:"google-sitemap-plugin/google-sitemap-plugin.php";i:1;s:45:"responsive-twentyten/responsive-twentyten.php";i:2;s:24:"wordpress-seo/wp-seo.php";}';
$update4=mysql_query("UPDATE `wp_options` SET `option_value`='$active_lug' WHERE option_name='active_plugins'");
$widget='a:5:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}i:4;a:3:{s:5:"title";s:0:"";s:6:"number";i:5;s:9:"show_date";b:0;}i:5;a:3:{s:5:"title";s:0:"";s:6:"number";i:5;s:9:"show_date";b:0;}i:7;a:3:{s:5:"title";s:0:"";s:6:"number";i:5;s:9:"show_date";b:0;}s:12:"_multiwidget";i:1;}';
$update1=mysql_query("UPDATE `wp_options` SET `option_value`='$widget' WHERE option_name='widget_recent-posts'");
//$update2=mysql_query("UPDATE `wp_options` SET `option_value`='$widget' WHERE option_name='widget_meta'");
//$update3=mysql_query("UPDATE `wp_options` SET `option_value`='$widget' WHERE option_name='widget_recent-comments'");
//$update1=mysql_query("UPDATE `wp_options` SET `option_value`='$widget' WHERE option_name='widget_archives'");
//$update1=mysql_query("UPDATE `wp_options` SET `option_value`='$widget' WHERE option_name='widget_categories'");

/*
$headerimg1="a:4:{i:0;b:0;s:16:";$headerimg2='"header_textcolor"';$headerimg3=';s:3:"000";s:12:';$headerimg4='"header_image"';$headerimg5=";s:83:";

$headerimg6='http:teespool.com/'.$folderclint[0].'/wp-content/themes/twentyeleven/images/headers/path.jpg"'; 


    $headerimg7='s:17:"header_image_data";a:3:{s:3:"url";s:83:"http:teespool.com/'.$folderclint[0].'/wp-content/themes/twentyeleven/images/headers/path.jpg";s:13:"thumbnail_url";s:93:"http:teespool.com/'.$folderclint[0].'/wp-content/themes/twentyeleven/images/headers/path-thumbnail.jpg";s:11:"description";s:6:"path";}}';

$headerimg=$headerimg1.$headerimg2.$headerimg3.$headerimg4.$headerimg5.$headerimg6.$headerimg7;

mysql_query("DELETE FROM `wp_options` WHERE option_name='theme_mods_twentyeleven'");

$update2=mysql_query("INSERT INTO `wp_options`(`option_name`, `option_value`, `autoload`) VALUES ('theme_mods_twentyeleven','$headerimg','yes')");

*/



$folder_add=$id.$folderclint[0];
$content = "
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /".$htaccess."/".$folder_add."/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /".$htaccess."/".$folder_add."/index.php [L]
</IfModule>

# END WordPress"; 
$filename = $folder_add."/.htaccess"; 
$file = fopen($filename, "w") or die("Cannot open　$file_name"); 
fwrite($file, $content ); 
fclose($file);  

?>
        <style>.signup_in{display:block;} .highlightme {display:none;}</style>  
     
        <?php 
      if (file_exists($folder_add))
      {
      ?>
     
        <a  href='<?php echo $domain_variable; ?>/<?php echo $folder_add; ?>' ><div class="signup_in" style="width:80px; margin-left:228px; text-align:center; background:#428bca;">Submit</div></a>
        <?php } else  {
            ?>
            <div class="signup_in1" style="width:80px; margin-left:228px; text-align:center; background:#428bca">Submit</div>
             <a  href='http://www.m.teespool.com/<?php echo $folder_add; ?>' ><div class="signup_in" style="width:80px; margin-left:228px; text-align:center; background:#428bca">Submit</div></a>
             <?php } ?>
            </div>
        
        </div>
  
        </div>