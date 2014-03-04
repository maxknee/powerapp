<?php
require("oauthconstants.php");


function authorizeUrl($clientId, $response_type, $redirect_uri, $scope, $approval_prompt){
	$authorizeUrl = "https://www.strava.com/oauth/authorize?client_id=$clientId&response_type=$response_type&redirect_uri=$redirect_uri&scope=$scope&approval_prompt=$approval_prompt";
	return $authorizeUrl;
}

function parseJason ($response){
	return json_decode($response);
}

function tokenRequest($clientId, $clientSecret, $code){

	$url =  'https://www.strava.com/oauth/token?';
	$oauthFields = array(
		'client_id' => $clientId,
		'client_secret' => $clientSecret,
		'code' => $code);


	$parameters = '&' . http_build_query($oauthFields);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	var_dump($ch);
	echo "<br>";

	$response = curl_exec($ch);

	$responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

	echo $responseCode;

	curl_close($ch);
	if (!empty($response)) {
                return $response;
        }
        else {
                return $responseCode;
        }

}




?>