<?php
require("newwrapper.php");
require("oauthconstants.php");
require("sqlcommands.php");

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

echo $token->firstname;
$athletes = json_decode($token, TRUE);
$athjson = json_decode($token);
var_dump($athjson);
echo "<br>";


print_r($athletes['athlete'] );
echo "<br>" . $athletes['access_token'] . "<br>";
echo $athletes['athlete']['firstname'];
echo "<br>" . "<br>" .$athletes['athlete']['ftp'] . "<br>";
echo $athletes['athlete']['clubs']['id'];

$athlete_id = $athletes['athlete']['id'];
echo "<br>" . $athlete_id . "<br>";
enterAthleteSQL($athletes);
$testacess = getAccessToken($athlete_id);
echo "<br> this is the access token " . $testacess . "<br>" .  "<br>";

$rides = listRides($testacess);
echo "<br>";



?>