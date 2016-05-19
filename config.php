<?PHP
session_start();
$htaccess="access";
$domain_variable="http://superaffiliatemachine.com/access";
error_reporting(0);
$dom='2';
if($dom=="2")
{	
$CONFIG_Server	= "localhost";
$CONFIG_Database = "superaff_admin_taqi";
$CONFIG_User	 = "superaff_taqi786";
$CONFIG_Pass	 = "superaff_taqi786";
$con=mysql_connect($CONFIG_Server,$CONFIG_User,$CONFIG_Pass); 
$select=mysql_select_db($CONFIG_Database) or die(mysql_error());


}
else {
	
	define("SERVER",'localhost');
define("USERNAME",'root');
define("PASSWORD",'');
define("DATABASE",'seosoftware');
$con=mysql_connect(SERVER,USERNAME,PASSWORD); 
$select=mysql_select_db(DATABASE) or die(mysql_error());

}
?> 