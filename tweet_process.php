<?php
if (isset($_POST['user'])) {
	$tweet = $_POST['tweet']." " .$_POST['user'];
}
else{
$tweet = $_POST['tweet'];
}
if (empty($tweet)) {
	header('Location: index.php');
	exit;
}

session_start();
include_once 'database.php';

$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO tweet (user_id, tweet) VALUES ($user_id, '$tweet')";
$insert = $mysqli->query($sql);


header('Location: index.php');