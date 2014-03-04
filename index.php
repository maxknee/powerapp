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


while(isset($codeUrl)){ 
echo "<br>";
$token = tokenRequest($client_id, $client_secret, $code);
echo "<br>";

var_dump($token);

echo "<br>" . "<br>";
print_r($token);
$athlete = json_decode($token, TRUE);
echo "<br>";
echo $athlete['id'];
}
?>