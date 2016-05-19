
<?php



$start=0;
 $token="596b1f51527a18f0ce0a1fb11d5825d4d962ec46";
$website="https://www.kickstarter.com/projects/promixx/promixx-the-original-vortex-mixer";
$format="json";




$url1 ='http://apiv2.ahrefs.com/?from=refdomains&target='.$website.'&mode=exact&limit=1000&output='.$format.'&token='.$token;

 $a=file_get_contents($url1);
 $input = json_decode($a, true);
 $users=$input['refdomains'];
 $ab=$input['stats'];
 $ip=$ab['ips'];
foreach($users as $user)
{
   $reddomains=$user['refdomain'];
	 @$backlinks+=$user['backlinks'];


}
echo $backlinks;
