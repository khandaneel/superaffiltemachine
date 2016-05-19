<?php $display="block"; include('header.php'); ?>

<?php include('slidemenu.php'); ?>


 
 

  <style>
  body{font:15px/20px Calibri;}
  .timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}
.glyphicon {
position: relative;
top: 1px;
display: inline-block;
font-family: 'Glyphicons Halflings';
font-style: normal;
font-weight: normal;
line-height: 1;
-webkit-font-smoothing: antialiased;
}
p{margin: 0 0 10px;}

.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eee;
  left: 50%;
  margin-left: -1.5px;
}

.tldate {
  display: block;
  width: 140px;
  background: #f8f8f8;
  border: 2px solid #e7e7e7;
  color: #2a6496;
  margin: 0 auto;
  padding: 3px 0;
  font-weight: bold;
  text-align: center;
  
}

.timeline li {
  margin-bottom: 25px;
  position: relative;
}

.timeline li:before, .timeline li:after {
  content: " ";
  display: table;
}
.timeline li:after {
  clear: both;
}
.timeline li:before, .timeline li:after {
  content: " ";
  display: table;
}

/** timeline panels **/
.timeline li .timeline-panel {
  width: 32%;
  float: left;
  background: #fff;
  border: 1px solid #d4d4d4;
  padding: 3px 6px;
  position: relative;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  border-radius: 8px;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
}

/** panel arrows **/
.timeline li .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}

.timeline li .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
.timeline li .timeline-panel.noarrow:before, .timeline li .timeline-panel.noarrow:after {
  top:0;
  right:0;
  display: none;
  border: 0;
}

.timeline li.timeline-inverted .timeline-panel {
  float: right; margin-right:135px;
}

.timeline li.timeline-inverted .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}

.timeline li.timeline-inverted .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}


/** timeline circle icons **/
.timeline li .tl-circ {
  position: absolute;
  top: 23px;
  left: 50%;
  text-align: center;
  background: #5cb85c;
  color: #fff;
  width: 35px;
  height: 25px;
  line-height: 35px;
  margin-left: -20px;
  border: 3px solid #EBEBEB; padding-top:10px;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
  z-index: 1;
}


/** timeline content **/

.tl-heading h4 {
  margin: 0;
  color: #c25b4e; line-height:23px;
}

.tl-body p, .tl-body ul {
  margin-bottom: 0;
}

.tl-body > p + p {
  margin-top: 5px;
}

/** media queries **/
@media (max-width: 991px) {
  .timeline li .timeline-panel {
    width: 44%;
  }
}

@media (max-width: 700px) {
  .page-header h1 { font-size: 1.8em; }
  
  ul.timeline:before {
    left: 40px;
  }
  
  .tldate { width: 140px; }

  ul.timeline li .timeline-panel {
    width: calc(100% - 90px);
    width: -moz-calc(100% - 90px);
    width: -webkit-calc(100% - 90px);
  }

  ul.timeline li .tl-circ {
    top: 22px;
    left: 22px;
    margin-left: 0;

  }
  ul.timeline > li > .tldate {
    margin: 0;
  }

  ul.timeline > li > .timeline-panel {
    float: right;
  }

  ul.timeline > li > .timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto;
  }

  ul.timeline > li > .timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto;
  }
}
  </style>
  
<script>
$(document).ready(function () {
$('.activity_click').click(function () {
	$('.id_value').removeClass("hovrs1");
$(this).find('.id_value').addClass("hovrs1");
	$keyvalue1=$('.hovrs1').val();
	$('.replace').removeClass("hovrs2");
$(this).find('.replace').addClass("hovrs2");
$keyvalue2=$('.hovrs2').val();
	
	$('.'+$keyvalue2).load('activity_del.php?'+$keyvalue1);
	
	location.reload();	
 
});






});
$(document).ready(function () {
$('.activity_click1').click(function () {
	$('.id_value').removeClass("hovrs1");
$(this).find('.id_value').addClass("hovrs1");
$keyvalue1=$('.hovrs1').val();

	$('.replace1').removeClass("hovrs5");
$(this).find('.replace1').addClass("hovrs5");
$keyvalue5=$('.hovrs5').val();

			$('.'+$keyvalue5).load('activity_act.php?'+$keyvalue1);
		location.reload();
 
});
});

/*
function del(id)
{
    
       
       
            window.location.href= 'activity_del.php?delete=true&id='+id; 
       
}
function active(id)
{
    
       
       
            window.location.href= 'activity_act.php?delete=true&id='+id; 
       
}*/

</script>

<div class="niche_right">
<?php include('describe_details.php'); ?><div class="niche_names newniceee">
<span class="image_name"><img src="images/niche_icon.png" /></span>
<span class="niche_name"><br />Your Activity</span>
</div>
<div class="clear"></div>
<br>

<div class="ajax"></div>
  
<div style="text-align:center;font-size:16px; height:28px; width:140px; background:#5cb85c; color:#FFFFFF; line-height:25px; border-radius:2px; margin:auto;">Activity Timeline</div>
<div class="res">
<ul class="timeline">
    <?php  $i=1;
    $activityy_tbl_res=mysql_query("select * from activity where email='".$_SESSION['email']."' ORDER BY `sno` DESC");
    while($ac_res=mysql_fetch_assoc($activityy_tbl_res))
    {
                if($i % 2 == 0)
                { $right="timeline-inverted"; $border="right"; } else {$right=""; $border="left"; }
    
    if($month==$ac_res['month'])
    {$month=$ac_res['month'];}
    else {
    
    if(date("d M")==$ac_res['month']){ ?><br>
    <li><div class="tldate" style="color:#009900;"><?php echo "Today";    $month=$ac_res['month']; ?></div></li> <?php } else {
    
?>
    <br>
    <li><div class="tldate"><?php echo $ac_res['month'].'&nbsp;'.$ac_res['year'];    $month=$ac_res['month']; ?></div></li>
    <?php  }} ?>
    <li class="<?php echo $right; ?>">
    <?php if($ac_res['status']==1){ ?>
      <a title="Click to hide" class="activity_click activity<?php echo $ac_res['sno'];  ?>">
      <input type="hidden" value="<?php echo $ac_res['sno'];  ?>" class="id_value" />
      	<input type="hidden" value="activity<?php echo $ac_res['sno'];  ?>" class="replace" />
      	
             <div class="tl-circ" style="background:<?php echo $ac_res['color'];  ?>"><?php echo $ac_res['img']; ?></div>
     </a>
     <div class="timeline-panel" style="margin-left:133px; border-<?php echo $border; ?>:5px solid <?php echo $ac_res['colorborder'];  ?>;">
        <div class="tl-heading">
          <h4><?php echo $ac_res['activityname']; ?></h4>
          <p><small class="text-muted" style="color:#666666;">at <?php echo $ac_res['datetime']; ?></small></p>
        </div>
        <div class="tl-body">
          <p></p>
        </div>
      </div>
     <?php }
     else{
         ?>
         <a title="Click to show" class="activity_click1 activity<?php echo $ac_res['sno'];  ?>">
          <input type="hidden" value="<?php echo $ac_res['sno'];  ?>" class="id_value" />
      	<input type="hidden" value="activity<?php echo $ac_res['sno'];  ?>" class="replace1" />
             <div class="tl-circ" style="width:0px;height:0px;border-radius:50%;background:red;margin-left:-8px;padding:4px;"></div>
     </a>
     <div  style="margin-left:133px;height:80px;">
       
      </div>
         <?php
     }
      ?>
      
    </li>
    
    
    
    
    
    
    <?php $i++;} ?>

  </ul>
  </div>
  <div style="height:13px; width:13px; border-radius:40px; background:#CCC6C6; margin-left:499px;"></div>
</div>
