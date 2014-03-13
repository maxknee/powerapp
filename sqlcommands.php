<?php
require("oauthconstants.php");
require("newwrapper.php");
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "root";
$conn = mysql_connect($dbhost, $dbuser, $dbpassword) or die("error connecting!");

function enterAthleteSQL($athleteJSON){
	$access_token = $athleteJSON['access_token'];
	$id = $athleteJSON['athlete']['id'];
	$firstname = $athleteJSON['athlete']['firstname'];
	$lastname = $athleteJSON['athlete']['lastname'];
	$measurment = $athleteJSON['athlete']['measurement_preference'];
	$ftp = $athleteJSON['athlete']['ftp'];
	$conn;
	$sql = "INSERT INTO `strava`.`user` (access_token, id, firstname, lastname, measurment, ftp) VALUES ('$access_token', '$id', '$firstname', '$lastname', '$measurment', '$ftp');";
	if (mysql_query($sql)){
		echo "Record inserted";
	}
	else {
		echo "error " . mysql_error();
	}
	


	
}
