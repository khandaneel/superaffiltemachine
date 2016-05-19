<?php  include("config.php");   

rename("test.html", "kk.html");


$email=$_SESSION['email']; $id=$_SESSION['id'];

$reid=mysql_query("select * from tbl_registation where email='$email' and session_id='$id'");


$postid=mysql_fetch_array($reid);
$output = "";

$sql = mysql_query("SELECT * FROM wp_posts where session_id='".$postid['session_id']."' GROUP BY post_title ORDER BY ID ASC");
$columns_total = mysql_num_fields($sql);

// Get The Field Name


while ($row = mysql_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
	
	
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file

$filename = "wp_posts.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;

  
?>
