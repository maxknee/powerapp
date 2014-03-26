<?php
require_once ('newwrapper.php');
require_once ('oauthconstants.php');
require_once ('sqlcommands.php');

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


echo $athlete['access_token'];

echo "<br>" . "<br>" .$athlete['athlete']['ftp'];

$athlete_id = $athlete['athlete']['id'];
echo "<br>" . $athlete_id . "<br>";
enterAthleteSQL($athlete);
$testacess = getAccessToken($athlete_id);
echo "<br> this is the access token " . $testacess . "<br>";
$rideList =  listRides($testacess);
echo "<br>";

echo "<br>";

$decodedRide =  json_decode($rideList, true);
var_dump($decodedRide);
echo implode(',', $decodedRide);

?>