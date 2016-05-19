<?php $display="block"; include('header.php');  $id=$_SESSION['id'];  $email=$_SESSION['email'];  

?>
<style>ul {padding:0px;margin: 0px;}
#list li {list-style: none; p{padding:4px 0px;}
.img_load{margin-left:400px;}</style>

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
<body style="background:#f1f1f1;">
<div class="niche_right">
	
    
    


    
 




    
   
        
   
      <div class="wp_seo_yoast">
      		<p style="text-align:center;font-size:20px;">Current Page Is Successfully Updated..</p>
      </div>
</div>