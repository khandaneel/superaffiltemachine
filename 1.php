<?php
$address = getenv("REMOTE_ADDR");
echo $address;
// Or simply use a Superglobal ($_SERVER or $_ENV)
$ip = $_SERVER['REMOTE_ADDR'];
?>