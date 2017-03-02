<?php


$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email= $_POST['email'];
$password = $_POST['password'];

if(empty($fullname) || empty($email) || empty($password) || empty($username)){
	header('location: register.php');
	exit;
}

include_once 'database.php';

$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user (fullname, username, email, password) VALUES ('$fullname', '$username', '$email', '$hash')";

$insert = $mysqli->query($sql);

$new_user_id = $mysqli->insert_id;
$sql="INSERT INTO follow(follower, following) VALUES ($new_user_id, $new_user_id)";
$mysqli->query($sql);

if (!$insert) {
	die('user registration error');
}else{
	header('location: login.php');
}