<?php  include("config.php");   ?>
       <?php $dominname=$_SESSION['email']; $id=$_SESSION['id'];
			

if(isset($_SESSION['domainid']) && !empty($_SESSION['domainid']))
{
	 $domainid=$_SESSION['domainid'];
	
 $session_id=mysql_query("select * from tbl_registation where  domain_name='$domainid'");
} else {

 $session_id=mysql_query("select * from tbl_registation where email='$dominname' and session_id='$id'");

}



  
 $seeid=mysql_fetch_array($session_id);

$subpagekey=mysql_query("select * from wp_posts  where  session_id='".$seeid['session_id']." ' GROUP BY `post_title` ORDER BY ID ASC");
$recwinkey=mysql_fetch_array($subpagekey);

 if(isset($_GET['page']))
 {
 $post_title=$_GET['page'];
 } else {$post_title=$recwinkey['post_title'];}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $post_title; ?></title>
<link rel="stylesheet" type="text/css" href="css/style_pre.css" />
<style>ul {padding:0px;margin: 0px;}
#list li {list-style: none; p{padding:4px 0px;}</style>
</head>

<body>

        
        <div class="header_wp">
	<div class="container" style="margin:0px auto;">
    	<div class="header_con">
        	<div class="header_con_left"><br />
            	<p style="text-transform:capitalize; font-size:45px;"><?php echo $recwinkey['post_title']; ?></p>
             </div>
            <div class="header_con_right">
            <p>A Perfect <?php echo $recwinkey['post_title']; ?> Website</p>
            </div>
        </div>
    </div>
</div>

<div class="menu_bac">
<div class="menu_1">
    	<ul>	
 
         <li ><a href="earthpro.php" class="linknormal"  >Home</a></li>
            <?php while($recwinkey=mysql_fetch_array($subpagekey)) { ?>
        <li><a  class="linknormal" href="earthpro.php?page=<?php echo $recwinkey['post_title']; ?>"><?php echo $recwinkey['post_title']; ?></a></li> 
            <?php } ?>
        
            
           
            
        </ul>
    </div>
</div>

<div class="clear"></div>
	<div class="wp_con_main">
    
    <div class="wp_con_main_left">
  <br /><?php $subpagekey1=mysql_query("select * from wp_posts where session_id='".$seeid['session_id']."' GROUP BY `post_title` ORDER BY ID ASC"); 
$recwinkey1=mysql_fetch_array($subpagekey1); ?>

 <?php $article=mysql_query("select * from tbl_article where session_id='".$seeid['session_id']."' and keyword='$post_title'"); 
$article=mysql_fetch_array($article); ?>

<?php $tbl_images=mysql_query("select * from tbl_images where session_id='".$seeid['session_id']."' and keyword='$post_title' ORDER BY id ASC" ); 
$tbl_images=mysql_fetch_array($tbl_images); ?>

<?php $tbl_youtube=mysql_query("select * from tbl_youtube where session_id='".$seeid['session_id']."' and keyword='$post_title' ORDER BY id ASC"); 
$tbl_youtube=mysql_fetch_array($tbl_youtube); ?>

   
     <?php $interlink=mysql_query("select * from tbl_internallinking where session_id='".$seeid['session_id']."' and keyword='$post_title' and activatation='1' ");
	
			  $interlink=mysql_fetch_array($interlink);  ?>
              
             
    
      <?php $anchoretext=mysql_query("select * from tb_anchoretext where session_id='".$seeid['session_id']."' and keyword='$keyword_key' and activatation='0' ");
	 $anchoretext1=mysql_query("select * from tb_anchoretext where session_id='".$seeid['session_id']."' and keyword='$keyword_key' and activatation='0' ");
									if(mysql_num_rows($anchoretext)==0 && mysql_num_rows($anchoretext1)==0 )
									{
										$anchoretext=mysql_query("select * from tb_anchoretext where session_id='".$seeid['session_id']."' and activatation='0'  limit 1,1");
									}
			  $anchoretext=mysql_fetch_array($anchoretext); ?>
              
                					
    
    

  
        	<h2><?php echo $post_title; ?></h2>
            
            <p class="con">
            <img src="<?php echo $tbl_images['images']; ?>" height="300" alt="<?php echo $recwinkey['post_title']; ?>" /><br /><br />
            
            	<?php if(!empty($anchoretext['anchoretext']))
										{ echo $anchoretext['anchoretext']."<br>";} ?> <br />
			
			<?php echo $article['article']; ?><br />
            <?php
			
			if(!empty($interlink['anchorlink']))
										{$anchorlinklink=$interlink['anchorlink'];echo "<a href='#'>".$interlink['anchorlink']."<a>";} ?><br />
        
            <iframe width="610" height="350" src="  <?php echo $tbl_youtube['youtube']; ?>" frameborder="0" allowfullscreen></iframe><br /><br />
			 	<br />

</p>

   
   
   
    </div>
    
    <div class="wp_con_main_right">
    <div id="secondary" class="widget-area" role="complementary">
		<aside id="search-2" class="widget widget_search"></aside>		<aside id="recent-posts-2" class="widget widget_recent_entries">		<h1 class="widget-title">Recent Posts</h1>		<ul>
					
				</ul>
		</aside><aside id="recent-comments-2" class="widget widget_recent_comments"><ul id="recentcomments"></ul></aside><aside id="archives-2" class="widget widget_archive">
</aside><aside id="categories-2" class="widget widget_categories">
</aside><aside id="meta-2" class="widget widget_meta"> </aside>	</div>
    </div>
    
    <div class="clear"></div>
    </div>
        
       
    
</body>
</html>