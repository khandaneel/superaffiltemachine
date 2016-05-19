<?php
$content = "
define('DB_NAME', 'new');
define('DB_USER', '2');
define('DB_PASSWORD', '2');
";

$ss="
define('DB_NAME', '1');
define('DB_USER', '1');
define('DB_PASSWORD', '1');
";


$file = "http://superaffiliatemachine.com/access/22.php";
$file_contents = file_get_contents($file);

$fh = fopen($file, "w");
$file_contents = str_replace($ss,$content,$file_contents);
fwrite($fh, $file_contents);
fclose($fh); 
?>