<?php

$dbhostname = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'materialize';

$mysqli = new mysqli($dbhostname, $dbusername, $dbpassword, $dbname);

if($mysqli->connect_error){
	die('database connection error');
}