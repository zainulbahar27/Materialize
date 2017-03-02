<?php

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password) ) {
	header('Location: login.php');
	exit;
}


include_once 'database.php';


$sql = "SELECT id, username, password FROM user WHERE email = '$email'";
$select = $mysqli->query($sql);


if (!$select->num_rows) {
	die("user doesn't exist");
}

$row = $select->fetch_object();

echo $row->password;

if (password_verify($password, $row->password)) {
	session_start();

	$_SESSION['user_id'] = $row->id;
	$_SESSION['username'] = $row->username;
	header('Location: index.php');
}else{
	header('Location: login.php');
}