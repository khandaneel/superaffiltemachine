<?php ob_start(); require_once('config.php'); 
if(!isset($_SESSION['email']))
{header("location:index.php");}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAM</title>
<link rel="icon" type="image/gif" href="images/animated_favicon1.png">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
  <script type="text/javascript" src="js/floating.js"></script>
   <script src="js/main.js" type="text/javascript"></script> 
     
<script type='text/javascript' src='http://code.jquery.com/jquery-2.0.2.js'></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">
/*SLIDE BAR MENU */

$(window).load(function(){
$(".minbutton,.minbutton_active").click(function () {
var effect = 'slide';
 var options = { direction: 'left' };
 var duration = 700;
$('.dashborad_left').toggle(effect, options, duration);
});
});

/*SLIDE BAR MENU END HERE */


$(document).ready(function () {



$('#side-menu li').click(function () {

var text = $(this).children('div.panel_1');

if (text.is(':hidden')) {
text.slideDown('200');
$(this).children('span').html('-');	
} 

$('.abc').click(function () {
text.slideUp('200');

});

});

$('.mori1').click(function () {
 $('.produresearc').delay(10).fadeIn(1500); 
 $('.produresearc1,.produresearc2,.produresearc3').delay(2).fadeOut(1500); 
});

$('.mori1').mouseleave(function () {
 $('.produresearc').delay(2).fadeOut(1500); 
});

$('.mori2').click(function () {
 $('.produresearc1').delay(10).fadeIn(1500); 
  $('.produresearc,.produresearc2,.produresearc3').delay(2).fadeOut(1500);
});

$('.mori2').mouseleave(function () {
 $('.produresearc1').delay(2).fadeOut(1500); 
});
$('.mori3').click(function () {
 $('.produresearc2').delay(10).fadeIn(1500); 
  $('.produresearc1,.produresearc,.produresearc3').delay(2).fadeOut(1500);
});

$('.mori3').mouseleave(function () {
 $('.produresearc2').delay(2).fadeOut(1500); 
});
$('.mori4').click(function () {
 $('.produresearc3').delay(10).fadeIn(1500); 
  $('.produresearc1,.produresearc2,.produresearc').delay(2).fadeOut(1500);
});

$('.mori4').mouseleave(function () {
 $('.produresearc3').delay(2).fadeOut(1500); 
});

$('.alert_message').click(function () {
alert("Only One keyword You Selected");
});


$('.cancelright').click(function () {
 $('.produresearc1,.produresearc2,.produresearc3,.produresearc').css("display","none");
});


$('.samimgbox').fadeIn(1500); 
$('.samimgbox').delay(8000).fadeOut(2000); 

$('.samimg').click(function () {
  $('.samimgbox').delay(2).fadeIn(1500); 
});

$('.samimgbox').click(function () {
  $('.samimgbox').css("display","none"); 
})


$('#edit_basic').click(function () {
  $('.submit_basciprofile').css("display","block"); 
    $('.edit_inp').css({"border-color": "#ccc", 
             "border-weight":"1px", 
             "border-style":"solid"}); 
})

$('#edit_cpanel').click(function () {
  $('.submit_basccpanel').css("display","block"); 
    $('.edit_inp1').css({"border-color": "#ccc", 
             "border-weight":"1px", 
             "border-style":"solid"}); 
})

$('#update_server').click(function () {
  $('.submit_baserver').css("display","block"); 
    $('.edit_inp2').css({"border-color": "#ccc", 
             "border-weight":"1px", 
             "border-style":"solid"}); 
})

$("input:radio[name=licence]").click(function() {
    var value = $(this).val();
	
	if(value=='Basic')
	{
		$('.d2').css("display","none");
		$('.d1').css("display","block");
		$('.d3').css("display","none");
		$('.d4').css("display","none");
		$('.d5').css("display","none");
		$('.d6').css("display","none");
	}
	else if(value=='Advance')
	{
		$('.d1').css("display","none");
		$('.d2').css("display","block");
		$('.d3').css("display","none");
		$('.d4').css("display","none");
		$('.d5').css("display","none");
		$('.d6').css("display","none");
	}
	else
	{
		$('.d2').css("display","none");
		$('.d1').css("display","none");
		$('.d3').css("display","block");
		$('.d4').css("display","none");
		$('.d5').css("display","none");
		$('.d6').css("display","none");
	}
	
});

$('#upgd').click(function () {

   $(".upgeade_slide").toggle(500);
})


//sam functinalty home
$('.offerhover').hover(function () {
 $('.samimgbox').css("display","none");
  $('.hovervalue').removeClass("hovervalue1");
		$(this).find('.hovervalue').addClass("hovervalue1");
		$keyvalue=$('.hovervalue1').val();
  $('.samimgbox').html($keyvalue);
  
 
});
$('.mesge_right1').hover(function () {
$('.valremove').removeClass("valremove1");
$(this).find('.valremove').addClass("valremove1");


});


$('.remove').click(function(){

$ara=$('.valremove1').val();
$('.notshowme').load('remove_msg.php?'+$ara);
location.reload();
	
});
//Auto display Text
$("#textBox1").keyup(function(){
$("#wpseosnippet_title").text($(this).val());
});
$("#textBox").keyup(function(){
	var mlenght=$('#textBox').val().length;
	   $("#message").text($(this).val());
	if(mlenght>156)
	{$('.mmeta,.mmeta').css("background","#FBC4C9");
	}
	else {$('.mmeta,.mmeta').css("background","white");
	}

});
 $("#textBox").blur(function(){
	 
 $ara1=$('.articlebttn').val();
 $ara2=$('.newittake').val();
 $ara=$ara1+"@"+$ara2;

$ara=($ara.replace(/[ ]+/g, "%20"));

$('.notthis').load('addmetadata.php?'+$ara);
 });
$("#textBox1").blur(function(){
     
 $ara1=$('.articlebttn').val();
 $ara2=$('.newittake1').val();
 $ara=$ara1+"@"+$ara2;

$ara=($ara.replace(/[ ]+/g, "%20"));

$('.notthis').load('addmetatitle.php?'+$ara);
 });
 
  $("#textBox2").blur(function(){
     
 $ara1=$('.articlebttn').val();
 $ara2=$('.newittake2').val();
 $ara=$ara1+"@"+$ara2;

$ara=($ara.replace(/[ ]+/g, "%20"));

$('.dontdis').load('addfocus.php?'+$ara);
 });
 
 
 
 
 
 

//domin functinalty home
$('.dbook').click(function () {

  $('.takeit').removeClass("takeit1");
		$(this).find('.takeit').addClass("takeit1");
		$keyvalue1=$('.takeit1').val();
  $('.inp_min11').val($keyvalue1);
  
 
});
$('.change_tag').click(function () {

  var number = 1 + Math.floor(Math.random() * 10);

		$keyvalue1=$('.hid_tag'+number).val();
  $('.tag_new').val($keyvalue1);
  
 
});
$('.chanegkeyword').click(function () {

  var number = 1 + Math.floor(Math.random() * 10);

		$keyvalue_1=$('.change_key'+number).val();
  $('.key_new').val($keyvalue_1);
  
 
});





$('.changeplz').click(function () {

         var src = ($('.changeimgn').attr('src') === 'images/d_icon.png')
            ? 'images/d_icon2.png'
            : 'images/d_icon.png';
         $('.changeimgn').attr('src', src);
    
});


$('.changeplz1').click(function () {

         var src = ($('.changeimgn1').attr('src') === 'images/d_icon.png')
            ? 'images/d_icon2.png'
            : 'images/d_icon.png';
         $('.changeimgn1').attr('src', src);
    
});









$('#ownserver').click(function () {
$('.samserver,.own_server_details1').css( "display", "none" );	
$('.own_server_detail').css( "display", "none" );	
$('.own_server_detail').css( "display", "block" );
$('.own_server_details').css( "display", "none" );

$('#samserver').removeClass("active");

$(this).addClass("activeneww"); 
});
$('.clickmee').click(function () {
$('.samserver,.own_server_details1').css( "display", "none" );	
$('.own_server_detail').css( "display", "none" );	
$('.own_server_details').css( "display", "block" );

$('#samserver').removeClass("active");

$(this).addClass("activeneww"); 
});


$('#buyserver').click(function () {
$('.own_server_details,.samserver').css( "display", "none" );	
$('.own_server_details1').css( "display", "block" );
$('.own_server_detail').css( "display", "none" );
 $('#buyserver').removeClass("activeneww");

$(this).addClass("activeneww"); 
});


$('#Confirmadon').click(function () {
$('#Confirmadon').css( "display", "none" );	
$('.Confirmadonwait').css( "display", "block" );
});

$('.server_submit').click(function () {
$('.server_submit').css( "display", "none" );	
$('.gif_im').css( "display", "block" );
});




});
  
	 

  
</script>
  <script>
function windowpop(url, width, height) {
var leftPosition, topPosition;
//Allow for borders.
leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
//Allow for title and status bars.
topPosition = (window.screen.height / 2) - ((height / 2) + 50);
//Open the window.
window.open(url, "Window2", "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no");
}

</script>
   
   <script language="javascript" type="text/javascript">
var rev = "fwd";
function titlebar(val)
{
	var msg  = "Super Affiliate Machine";
	var res = " ";
	var speed = 100;
	var pos = val;
	msg = "   "+msg+" ";
	var le = msg.length;
	if(rev == "fwd"){
		if(pos < le){
		pos = pos+1;
		scroll = msg.substr(0,pos);
		document.title = scroll;
		timer = window.setTimeout("titlebar("+pos+")",speed);
		}
		else{
		rev = "bwd";
		timer = window.setTimeout("titlebar("+pos+")",speed);
		}
	}
	else{
		if(pos > 0){
		pos = pos-1;
		var ale = le-pos;
		scrol = msg.substr(ale,le);
		document.title = scrol;
		timer = window.setTimeout("titlebar("+pos+")",speed);
		}
		else{
		rev = "fwd";
		timer = window.setTimeout("titlebar("+pos+")",speed);
		}	
	}
}
titlebar(0);
</script>
<script>
$(document).ready(function()
  {
	 $('.classname').delay(1000).fadeIn(1500); 
	 
	 $('.close').click(function(){
$('.msg1').css( "display", "none" );
}); 
	 
	 // AJAX JS
  $(".off_icon").hover(function() {

        $('.value').removeClass("valueactive");
		$(this).find('.value').addClass("valueactive");
		

});

	 $('.off_icon').click(function(){
//$('.dimg1').css( "display", "block" );
$k=$('.valueactive').val();

		
	$k=($k.replace(/[ ]+/g, "%20"));
	$('.ajxhere').load('nichepages.php?'+$k);});
	
  
	 

  });
</script>
  
<script type="text/javascript">

$(document).ready(function () {
	
	
	$('#toggle-view li').click(function () {

		var text = $(this).children('div.panel');

		if (text.is(':hidden')) {
			text.slideDown('200');
			$(this).children('span').html('-');		
		} 
		
		$('.profile_right,.profile_left,.profile_mid').click(function () {
			text.slideUp('200');
					
			});
	
		
	});
	
	
	$( ".web_btn" ).click(function() {
	
$(".website_pre").slideUp("slow");
$(".web_btn").css('display','none');
$(".web_btn1").css('display','block');
});


$( ".web_btn1" ).click(function() {
$(".website_pre").slideDown("slow");
$(".web_btn1").css('display','none');
$(".web_btn").css('display','block');
});

$( ".check_btn" ).click(function() {

$('#hidenow1').css('display','none');
$('#hidenow').css('display','block');

});



 
 // animation start here::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
 
 


//$('.onec').show().animate({ top:10 }, {duration: 1000, easing: 'easeOutBounce'});

	


$('.data_animation1,.dblue').click(function() {
	
$(this).css('background','#fff');
$('.tnextt1').css('display','block');
$('.tnextt2').css('display','none');

$('.bepation').css('display','block');

$('.onec').css('background','#5cab2a');
$(".onec").addClass("transition").delay(500).queue(function(next){
$('.onec').removeClass("transition"); next();
});



$(".aside1").delay(1500).queue(function(next){
$('.aside1').css('background-image','url(images/array_active.gif)');
 next();
});
$(".twoc").delay(2500).queue(function(next){
$('.twoc').css('background','#5bace7');
$('.twoc').addClass("transition").delay(500).queue(function(next){
$('.twoc').removeClass("transition"); next();
});
 next();
});

$(".aside2").delay(3500).queue(function(next){
$('.aside2').css('background-image','url(images/array_active.gif)');
 next();
});

$(".threec").delay(4500).queue(function(next){
$('.threec').css('background','#e64b91');
$('.threec').addClass("transition").delay(500).queue(function(next){
$('.threec').removeClass("transition"); next();
});
 next();
});


$(".aside3").delay(5500).queue(function(next){
$('.aside3').css('background-image','url(images/array_active.gif)');
 next();
});

$(".fourc").delay(6500).queue(function(next){
$('.fourc').css('background','#ff8202');
$('.fourc').addClass("transition").delay(500).queue(function(next){
$('.fourc').removeClass("transition"); next();
});
 next();
});


$(".aside4").delay(7500).queue(function(next){
$('.aside4').css('background-image','url(images/array_active.gif)');
 next();
});

$(".fivec").delay(8500).queue(function(next){
$('.fivec').css('background','#5cab2a');
$('.fivec').addClass("transition").delay(500).queue(function(next){
$('.fivec').removeClass("transition"); next();
});
 next();
});






 
 //$('.twoc').delay(8000).addClass('transition');
 

    });


	
	$('#load').click(function () {
		
	$('.emp_pro1').show();
	
	});
	
	
	$('.gif_submit').click(function () {
	
	$('.gif_images').hide(500);
	$('.gif_images2').show(500);
	$('.gif_submit').hide();
	$('.after_submit').show();
	
	$({someValue: 100}).animate({someValue: 0}, {
      duration: 150000,
      easing:'swing', // can be anything
      step: function() { // called on every step
          // Update the element's text with rounded-up value:
          $('#el').text(commaSeparateNumber(Math.round(this.someValue)));
      } });
  

 function commaSeparateNumber(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
 }
	  
	  
	}); });
	
	/*$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 80) {
	        $('.offer_top').css("top","0px");
		
    } else {
             $('.offer_top').css("top","105px");
    }






}); */

</script>

<script>
$(document).ready(function()
  {
	 $(".next_step").fadeOut(5000);
	 
	  
$("a").click(function() {
$(this).css("color","#000");});
	 
	 // AJAX JS
  $(".off_icon").hover(function() {

        $('.value').removeClass("valueactive");
		$(this).find('.value').addClass("valueactive");
		

});

// :::::::::::::: AJAX for intalation page::::::::::::::


$('.articleadd').click(function(){
$('.img_load').css('display','block');
$ara=$('.articlebttn').val();
$ara=($ara.replace(/[ ]+/g, "%20"));
$('.myclass_new').load('articleadd.php?'+$ara);


});




$('.imageschanges').click(function(){
        $('.img_load').css('display','block');
$ara=$('.articlebttn').val();
$ara=($ara.replace(/[ ]+/g, "%20"));
$('.myclass_new').load('imageschanges.php?'+$ara);

});





$('.youtubechange').click(function(){
       $('.img_load').css('display','block');
$ara=$('.articlebttn').val();
$ara=($ara.replace(/[ ]+/g, "%20"));
$('.myclass_new').load('youtubechange.php?'+$ara);

});


$('.interlinknew').click(function(){
$('.img_load').css('display','block');
$ara=$('.articlebttn').val();
$ara=($ara.replace(/[ ]+/g, "%20"));
$('.myclass_new').load('interlink.php?'+$ara);});

$('.externalink').click(function(){
$('.img_load').css('display','block');
$ara=$('.articlebttn').val();
$ara=($ara.replace(/[ ]+/g, "%20"));
$('.myclass_new').load('externalink.php?'+$ara);});


// Video Page:::::::::::::::::::
$(".onen1").hover(function(){
    $(".menu1").css("opacity","0.1");


$(".menu2,.menu3,.menu4").css("opacity","0.1");
});
$(".onen").hover(function(){
    $(".menu1").css("opacity","1");
$(".menu1").addClass("mneutrans").delay(500).queue(function(next){
$('.menu1').removeClass("mneutrans"); next();});
$(".menu2,.menu3,.menu4").css("opacity","0.1");
});

$(".twon").hover(function(){
    $(".menu2").css("opacity","1");
$(".menu2").addClass("mneutrans").delay(500).queue(function(next){
$('.menu2').removeClass("mneutrans"); next();});
$(".menu1,.menu3,.menu4").css("opacity","0.1");
});

$(".threen").hover(function(){
    $(".menu3").css("opacity","1");
$(".menu3").addClass("mneutrans").delay(500).queue(function(next){
$('.menu3').removeClass("mneutrans"); next();});
$(".menu2,.menu1,.menu4").css("opacity","0.1");
});

$(".fourn").hover(function(){
    $(".menu4").css("opacity","1");
$(".menu4").addClass("mneutrans").delay(500).queue(function(next){
$('.menu4').removeClass("mneutrans"); next();});
$(".menu2,.menu3,.menu1").css("opacity","0.1");
});


/*Delete domian*/





$('.del1').hover(function(){
	$('.takdlete').removeClass("takdlete1");
$(this).find('.takdlete').addClass("takdlete1");
});
$('.del1').click(function(){

if(confirm("Are You sure to Delete Permanently?"))
{

$('.showdelte').css("display","block");

$ara=$('.takdlete1').val();

$('.showdelte').load('weblist_del.php?'+$ara);
$('.closeit').delay(400).fadeOut(2500); 
}


});
$(".widget").click(function(){
$('.widget1').toggle(100);
});

/*Delete domian*/

$('.widget1').toggle(100);

/*new jquery efeect of wp apge:*/
/*new jquery efeect of wp apge:*/




$(".imagesetext").click(function () {
$('.showimg').toggleClass("showimging");
$(this).toggleClass("identi");
});

$(".articlediv").click(function () {
$('.showarticle').toggleClass("showimging");
$(this).toggleClass("identi");

});


$(".youtubevideo").click(function () {
$('.showvideo').toggleClass("showimging");
$(this).toggleClass("identi");

});


  });
</script>
<script type="text/javascript">

$(document).ready(function () {


$('#toggle-view li').click(function () {

var text = $(this).children('div.panel_1');

if (text.is(':hidden')) {
text.slideDown('200');
$(this).children('span').html('-');	
} 

$('.pro_1').click(function () {
text.slideUp('200');

});


});
$('#load').click(function () {

$('.emp_pro1').show();

});


$('#toggle-view li').click(function () {

var text = $(this).children('div.panel_2');

if (text.is(':hidden')) {
text.slideDown('200');
$(this).children('span').html('-');	
} 
$('.personal_left,.personal_mid,.personal_right').click(function () {
text.slideUp('200');
});
});


});

</script>
<SCRIPT type="text/javascript">
$(document).ready(function()
{
$("#username").change(function() 
{ 
var username = $("#username").val();
var msgbox = $("#status");

if(username.length > 3)
{
$.ajax({  
    type: "POST",  
    url: "ajax.php",  
    data: "username="+ username,  
    success: function(msg){  
   $("#status").ajaxComplete(function(event, request){ 
	if(msg == 'OK')
	{ 
	
	    $("#username").removeClass("red");
	    $("#username").addClass("green");
       msgbox.html(msg);
	}  
	else  
	{  
	     $("#username").removeClass("green");
		 $("#username").addClass("red");
		msgbox.html(msg);
	}  
   
   });
   } 
   
  }); 

}
else
{
$("#username").addClass("red");
$("#status").html('<font color="#cc0000">Minimum 4 letters</font>');
}
return false;
});

$("#butn").click(function() 
{ 

var x = $('#status').text()

if(x=="Available")
{ }
else{  return false;}
});

$(".log_top").click(function() 
{ 
$(".logindiv").slideToggle();

});


});

function messaalret()
{alert("Please complete product research then you can proceed");
}
function messaalret1()
{alert("Please complete domain research then you can proceed");
}
function messaalret2()
{alert("Please complete build website then you can proceed");
}

</script>
</head>




<!-- link for all -->

<?php
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];
	$linkdomai=mysql_query("SELECT * FROM `tbl_winningkeyword` WHERE `session_id`='$id' ");
	if(mysql_num_rows($linkdomai)==0)
	{ $linkdomai='onclick="messaalret()"'; } else {  $linkdomai='href="domainnamecheck.php"'; }
	
	$buildsite=mysql_query("SELECT * FROM `tbl_registation` WHERE `session_id`='$id' ");
	if(mysql_num_rows($buildsite)==0)
	{ $buildsite='onclick="messaalret1()"'; } else {  $buildsite='href="wp.php"'; }
	
	$seoback=mysql_query("SELECT * FROM `tbl_registation` WHERE `session_id`='$id' ");
	if(mysql_num_rows($seoback)==0)
	{  $seoback='href="google_auto.php"'; } else {  $seoback='href="google_auto.php"'; }
	
	
	
	}
	
	
	
	
	else { $linkdomai='onclick="messaalret()"'; $buildsite='onclick="messaalret1()"'; $seoback='onclick="messaalret2()"';}
	?>


<body>
<div class="header">
<div class="row">
<a href="home.php?vid=01"><div class="logo">
&nbsp;&nbsp;&nbsp;<img src="images/logo.png" class="imgnoew" />
</div></a>

<div class="menu1">
	<div class="menu1_in">
	<a href="home.php?vid=01" style="color:#FFFFFF;"><div class="icons">
    	<img src="images/ic1.png" width="48" height="48" class="imgnoew1" />
    </div>
    
    <div class="menu_name">
  Products Research
    </div></a>
    </div>
    
    <div class="clear"></div>
    <div class="menu1_down mori1">
    	More info 
    </div>
</div>


<div class="menu2">
	<div class="menu1_in">
	<a <?php echo $linkdomai; ?> style="color:#FFFFFF; cursor:pointer;"><div class="icons">
    	<img src="images/ic2.png" width="48" height="48" class="imgnoew1"/>
    </div>
    
    <div class="menu_name">
    	Domain  Research 
    </div></a>
    </div>
     <div class="clear"></div>
    <div class="menu1_down mori2">
    	More info<?php 
        $linkdomai=mysql_query("SELECT * FROM `tbl_winningkeyword` WHERE `session_id`='$id' ");
	if(mysql_num_rows($linkdomai)==0)
	{ echo '<img src="images/lock.png" align="right" />'; } 
        ?>
        
        
    </div>
</div>


<div class="menu3">
	<div class="menu1_in">
	<a <?php echo $buildsite; ?> style="color:#FFFFFF; cursor:pointer;"><div class="icons">
    	<img src="images/ic3.png" width="48" height="48" class="imgnoew1" />
    </div>
    
    <div class="menu_name">
    	Build Website
    </div></a>
    </div>
     <div class="clear"></div>
    <div class="menu1_down mori3">
    	More info<?php $buildsite=mysql_query("SELECT * FROM `tbl_youtube` WHERE `session_id`='$id' ");
	$sopu=mysql_fetch_array($buildsite);
	if(empty($sopu['keyword']))
	{ echo '<img src="images/lock.png" align="right" />'; }  ?>
    </div>
</div>


<div class="menu4">
	
    <div class="menu1_in">
	<a href="google_auto.php" style="color:#FFFFFF; cursor:pointer;"><div class="icons">
    	<img src="images/ic4.png" width="48" height="48" class="imgnoew1" />
    </div>
    
    <div class="menu_name">
    	Google Automation
    </div></a>
    </div>
     <div class="clear"></div>
    <div class="menu1_down mori4">
    	More info
        <?php $buildsite=mysql_query("SELECT * FROM `tbl_youtube` WHERE `session_id`='$id' ");
	$sopu=mysql_fetch_array($buildsite);
	if(empty($sopu['keyword']))
	{ echo '<img src="images/lock.png" align="right" />'; }  ?>
        
    </div>
</div>

</div>


</div>

<link rel="stylesheet" href="css/colorbox.css" />
<script src="js/jquery.colorbox.js"></script>
        <script>
            $(document).ready(function(){
                //Examples of how to assign the Colorbox event to elements
                
                $(".inline").colorbox({inline:true, width:"70%"});
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
                
            });
        </script>