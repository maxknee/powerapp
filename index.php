<?php
require_once ('newwrapper.php');
require_once ('oauthconstants.php');

 echo "<br>";
$loginUrl = authorizeUrl($client_id,$response_type,$redirect_uri, $scope, $approval_prompt); 
# echo "<a href='$loginUrl'>Click here<a>". "<br>" ;

$codeUrl = null;
if (isset($_GET['code'])){
	$code = $_GET['code'];
}
else {
	echo "<a href='$loginUrl'>Click here<a>" . "<br>" ;
}



echo "<br>";
$token = tokenRequest($client_id, $client_secret, $code);
echo "<br>";
print_r($token);
$athlete = json_decode($token, TRUE);
echo "<br>" . "<br>";

print_r($athlete['athlete']);
echo $athlete['access_token'];
echo $athlete['athlete']['firstname'];
echo "<br>" . "<br>" .$athlete['athlete']['ftp'];


enterAthleteSQL($athlete);
?>