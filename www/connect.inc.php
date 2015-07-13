<?php
include 'settings.php';

$mysql_host = "localhost";
$mysql_database = "master";
$mysql_user = "root";
$mysql_password = "diablow2";
$conn_error = "Could not connect to Host: ".$mysql_host.".";

if($purdue_deployment){
	$mysql_host = "mydb.ics.purdue.edu";
	$mysql_database = "olsenb";
	$mysql_user = "olsenb";
	$mysql_password = "diablow";
	$conn_error = "Could not connect to Host: ".$mysql_host.".";
}


if(!@mysql_connect($mysql_host, $mysql_user, $mysql_password)){
	die($conn_error);
}

$conn_error = "Could not connect to Database: ".$mysql_database.".";

if(!@mysql_select_db($mysql_database)){
	die($conn_error);
}
?>