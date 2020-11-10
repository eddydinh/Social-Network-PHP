<?php
require_once 'functions.php';

if(isset($_SESSION['user']))
{
	echo <<<_END
		<!DOCTYPE html>
		<html>
		<head>
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>	
		<body>
		<ul class='topbar'>
			<li><a href='timeline.php'>Home</a></li>
			<li><a href='messages.php'>Messages</a></li>
			<li><a href='profile.php'>Profile</a></li>
			<li><a href='index.php'>Log Out</a></li>
		</ul>
_END;
}
else
{
	header("Location: index.php");
}

?>
<script src='js/jquery.min.js'></script>