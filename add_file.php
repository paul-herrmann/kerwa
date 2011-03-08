<?php

ob_start();
session_save_path('sessions/');
session_start();
include_once('classes/Users.class.php');


$usr = new user;

$usr->check_if_logged();


include_once('classes/Posts.class.php');
$posty = new posts;
	
if (isset($_POST['name'])) {
	$filename = $_FILES['file']['name'];
	$type = $_FILES['file']['type'];
	$tmp_name = $_FILES['file']['tmp_name'];
	$error = $_FILES['file']['error'];
	$posty->upload_img($filename, $type, $error, $tmp_name);
}
	
header("Location : admin.php");
	
ob_end_flush();
	
?>

