<?php
$content = "
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /access/Best-Green-Coffee/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /access/Best-Green-Coffee/index.php [L]
</IfModule>

# END WordPress"; 
$filename = "bas/.htaccess"; 
$file = fopen($filename, "w") or die("Cannot open　$file_name"); 
fwrite($file, $content ); 
fclose($file);  
?>