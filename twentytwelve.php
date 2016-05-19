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
</head>
<body>

    <div class="twenty_container">
    <div class="twenty_container1" style="height:90px;">
    <div class="theme1_container">
    	<div class="header_con_theme1">
        	<div class="header_con_left" style="color:#333;margin-top: 34px;">
            		<p style="text-transform:capitalize;"><?php echo $recwinkey['post_title']; ?></p>
                 <p style="color:#333;font-size:13px;margin-top:10px;">All what you need about <?php echo $recwinkey['post_title']; ?> is here </p>
             </div>

        </div>
       
    </div>
    </div> 
    
     <div class="clear"></div>
    
    <div class="menu_theme2">
<div class="menu1_theme1">
    	<ul>	
                                                   
                                                         
              <li ><a href="twentytwelve.php"  style="color:#6a6a6a;"  ><span class="samcolor1">Home Page</span></a></li>
            <?php while($recwinkey=mysql_fetch_array($subpagekey)) { ?>
        <li><a   style="color:#6a6a6a;" href="twentytwelve.php?page=<?php echo $recwinkey['post_title']; ?>"><span class="not"><?php echo $recwinkey['post_title']; ?></span></a></li> 
            <?php } ?>
            
        </li></ul>
    </div>
</div>

		<div class="wp_con_main" style="width:950px; padding:0px; height:auto;">
    <div class="wp_con_main11" style=" width:950px;"  >
    <div class="wp_con_main_left" style="width:620px;">
   		
   
        
  
   
    <?php $subpagekey1=mysql_query("select * from wp_posts where session_id='".$seeid['session_id']."' GROUP BY `post_title` ORDER BY ID ASC"); 
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
    
   
    
   
    </div>
    
  
    
    </div>
</body>
</html>