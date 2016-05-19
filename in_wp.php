<?php ob_start(); $display="block"; include('header.php'); $email=$_SESSION['email'];?>
<?php include('slidemenu.php'); $id=$_SESSION['id']; ?>

 <?php
 $db=mysql_query("select * from tbl_db where usersession='$id'");
 $db_res=mysql_fetch_assoc($db);
 $db_name_new=$db_res['dbname'];
 $db_pwd_new=$db_res['pwd'];
$dbconn = mysql_connect('localhost',$db_name_new,$db_pwd_new);
if($dbconn){
mysql_select_db($db_name_new,$dbconn);
error_reporting(0);
$file = 'testing_wp.sql';

if($fp = file_get_contents($file)) {
  $var_array = explode(';',$fp);
  foreach($var_array as $value) {
    mysql_query($value.';',$dbconn);
  }
}



//1:::::::::: for wp_comeents:::::::::::::

 $handle = fopen("wp_comments.csv", "r");

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
 $import=mysql_query("INSERT INTO `wp_comments`(`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]')");}
 
 
 //2:::::::: for wp_options:::::::::::::

 $handle = fopen("wp_options.csv", "r");

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
  if($data[0]!=0)
		{
 $import=mysql_query("INSERT INTO `wp_options`(`option_id`, `option_name`, `option_value`, `autoload`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')");}
 
}
 //3::::::::::::: for wp_postmeta:::::::::::::

 $handle = fopen("wp_postmeta.csv", "r");

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
 $import=mysql_query("INSERT INTO `wp_postmeta`(`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')");}
 
 //4::::::::::: for wp_term_relationships:::::::::::::

 $handle = fopen("wp_term_relationships.csv", "r");

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
 $import=mysql_query("INSERT INTO `wp_term_relationships`(`object_id`, `term_taxonomy_id`, `term_order`) VALUES ('$data[0]','$data[1]','$data[2]')");}
 
 //5::::::::::::: for wp_term_taxonomy:::::::::::::

 $handle = fopen("wp_term_taxonomy.csv", "r");

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
 $import=mysql_query("INSERT INTO `wp_term_taxonomy`(`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')");}
 
 
 //6::::::::::::: for wp_terms:::::::::::::

 $handle = fopen("wp_terms.csv", "r");

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
 $import=mysql_query("INSERT INTO `wp_terms`(`term_id`, `name`, `slug`, `term_group`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')");}
 
 
 //7:::::::::::: for wp_usermeta:::::::::::::

 $handle = fopen("wp_usermeta.csv", "r");

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
 $import=mysql_query("INSERT INTO `wp_usermeta`(`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')");}
 
 
 //8:::::::::::::: for wp_users:::::::::::::

 $handle = fopen("wp_users.csv", "r");

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
 $import=mysql_query("INSERT INTO `wp_users`(`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]')");}
$option_rec='a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:63:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:9:"add_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;s:15:"wpseo_bulk_edit";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:35:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:15:"wpseo_bulk_edit";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:11:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;s:15:"wpseo_bulk_edit";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:6:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:15:"wpseo_bulk_edit";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}';
$siteurl=mysql_query("UPDATE `wp_options` SET `option_value`='$option_rec' WHERE option_name='wp_user_roles'");
 
}
else{header("location:error.php");}

?>
 
        
    <div class="niche_right">
 <div class="niche_names newniceee">
        <span class="image_name"><img src="images/niche_icon.png" /></span>
        <span class="niche_name"><br />Install Wordpress </span>
    </div>
     <a class='youtube' href="http://irankmedia.com/sam/capture-003-2.mp4"><div class="demo_video_pk">
    	<img src="images/demo_logo.png" />
    </div></a>
    <div class="clear"></div>
    <div class="niches">
     <?php 
       
$email=$_SESSION['email'];

$reidnew=mysql_query("select * from tbl_registation where email='$email' and session_id='$id'");
$postidnew=mysql_fetch_array($reidnew);
$folderclint=explode(".",$postidnew['domain_name']);
 $folder_add=$id.$folderclint[0];
        ?>
        <div style="width:500px;padding:20px;box-shadow:0px 0px 3px #ccc;text-align:center;margin-left:120px;margin-top:50px; border:1px solid #ccc;">
     	<p style="text-align:center;"><img src="images/wp-logo.png" width="50" height="50"></p>
     	
       
        
        <a href="wp-insatall_thank.php"><div class="signup_in" style="width:164px; margin-left:171px;margin-top:20px; text-align:center; background:#428bca; display:block">Click Here..</div></a>
       </div>
       
    
</div>