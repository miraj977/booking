<?php
$uid = strtolower($_POST['username']);
$pw = strtolower($_POST['password']);

if($uid == 'everest' and $pw == 'pass')
{	
	session_start();
	$_SESSION['sid']=session_id();
	$_SESSION['username']=$uid;
	header("location:dashboard.php");
}
?>