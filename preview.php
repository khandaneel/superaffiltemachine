<?php  include("config.php");  


if(isset($_GET['SAM_id']))
{
	
	unset($_SESSION['domainid']);
	
	$id=$_SESSION['domainid']=$_GET['SAM_id'];
	
 $session_id=mysql_query("select * from tbl_registation where  session_id='".$_SESSION['domainid']."'");
} else {
$id=$_SESSION['domainid'];
 $session_id=mysql_query("select * from tbl_registation where  session_id='$id'");

}



  
 $seeid=mysql_fetch_array($session_id);
$tagline=mysql_query("SELECT * FROM `tbl_tagline` WHERE `session_id`='".$seeid['session_id']."'");
$taglinen=mysql_fetch_array($tagline);

$subpagekey=mysql_query("select * from wp_posts  where  session_id='".$seeid['session_id']." ' GROUP BY `post_title` ORDER BY ID ASC");
$banner=mysql_query("select * from tbl_registation where session_id='$id' ");
$bannerres=mysql_fetch_assoc($banner);
$bannerres=$bannerres['domain_name'];
$res1=explode(".",$bannerres);
$res1=$id.$res1;

$recwinkey=mysql_fetch_array($subpagekey);

 if(isset($_GET['page']))
 {
 $post_title=$_GET['page'];
 } else {$post_title=$recwinkey['post_name'];}
 ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



<?php





$ti_res=mysql_query("select * from wp_posts where session_id='$id' and  post_name='$post_title' ");
$ti_res1=mysql_fetch_assoc($ti_res);
 $keyword_key=$ti_res1['post_title'];
$tbl_meta=mysql_query("select * from `tbl_meta_description_final` where session_id='$id' and keyword='$keyword_key'");

$tbl_meta=mysql_fetch_array($tbl_meta);

$focuskeywordn=mysql_query("select * from `tbl_focuskeyword` where session_id='$id' and keyword='$keyword_key'");
$focuskeyword=mysql_fetch_array($focuskeywordn);



 $metades=mysql_real_escape_string($tbl_meta['metadescription']);
 
 $tbl_metatt=mysql_query("select * from `tbl_meta_title_final` where session_id='$id' and keyword='$keyword_key'");

$tbl_metatt=mysql_fetch_array($tbl_metatt);
 $metadestt=mysql_real_escape_string($tbl_metatt['metatitle']);



?>
<title><?php echo $metadestt;?></title>
<link rel="stylesheet" type="text/css" media="all" href="css/preview.css">

    <meta name="viewport" content="width=device-width, minimum-scale=1.0,maximum-scale=1.0">
    
<meta name="keywords" itemprop="keywords" content="<?php if(mysql_num_rows($focuskeywordn)>0)
{
	echo $fucslast=$focuskeyword['focuskeyword'];
} else  {$fuchkey=mysql_query("SELECT * FROM `tbl_finalkey` WHERE  session_id='$id' limit 3,8"); while($fukey=mysql_fetch_array($fuchkey)){echo $fukey['keyword'].", ";} }
 ?>" />

 <meta name="description" content="<?php echo $metades;?>">
 <style>
 p{text-align:justify;font-size:15px;}
 </style>
 </head>

<body class="home blog">

<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
								<h1 id="site-title">
					<span>
						<a href="publish.php" title="<?php echo $recwinkey['post_title']; ?>" rel="home"><?php echo $recwinkey['post_title']; ?></a>
					</span>
				</h1>
					<div id="site-description">
				<?php if($taglinen['tagline']=="" || empty($taglinen['tagline'])) { echo "A Perfect".$recwinkey['post_title']."Website"; } else { echo $taglinen['tagline']; } ?>
                </div>

<?php
$header_res=mysql_query("select * from tbl_wp_headers where session_id='$id'");
$header_res1=mysql_fetch_assoc($header_res);
if(mysql_num_rows($header_res)==0)
{
?>
        <img src="images/path_header.jpg" width="940" height="198" alt="">	

 <?php
}
else
{
	?>
    <img src="images/<?php echo $header_res1['imagename']; ?>" width="940" height="198" alt="">


    <?php
}
?>
								</div><!-- #branding -->

			<div id="access" role="navigation">
			  				
								<div class="menu">
                                <ul>	
 
         <li ><a href="publish.php?SAM_id=<?php echo $id; ?>" class="linknormal"  >Home</a></li>
            <?php while($recwinkey=mysql_fetch_array($subpagekey)) { ?>
        <li><a  class="linknormal" href="publish.php?page=<?php echo $recwinkey['post_name']; ?>&SAM_id=<?php echo $id; ?>"><?php echo $recwinkey['post_title']; ?></a></li> 
            <?php } ?>
        
            
           
            
        </ul>
                                </div>
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">

		<div id="container">
			<div id="content" role="main">

			




			<div id="post-41" class="post-41 post type-post status-publish format-standard hentry">
			 <br />
             <h2><?php echo ucfirst($ti_res1['post_title']); ?> </h2>
             <br>
             <?php echo $ti_res1['post_content'];?>
							</div><!-- .entry-content -->
	
		

		<div id="primary" class="widget-area" role="complementary">
        
        <?php
		$widget_res=mysql_query("select * from tbl_widget where session_id='$id'");
		$widget_res1=mysql_fetch_assoc($widget_res);
		?>
        
        	<div class="abc">
        	            <strong> <?php echo $widget_res1['title']; ?></strong><br>
            <?php echo $widget_res1['description']; ?>
            </div>
			
		</div>
	

			
		


		<!-- #primary .widget-area -->
        
        </div><!-- #post-## -->
        
        
        </div>

	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">



			<div id="site-info">
				<a href="./sleep apnea - Sleep Apnea Site_files/sleep apnea - Sleep Apnea Site.htm" title="sleep apnea" rel="home">
					sleep apnea				</a>
			</div><!-- #site-info -->

			<!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->