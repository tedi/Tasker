<?php
//start session
require_once('classes/MySqlDb.php');
require_once('classes/tasks.php');

$tasks = new tasks();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<link rel="stylesheet" href="css/main.css">
	
	<title>Tasker App</title>
	<link rel="stylesheet" href="stylesheets/style.css">
	<script type="text/javascript" src="js/jquery-1.5.min.js"></script>
	<script type="text/javascript" src="js/jquery.tipsy.js"></script>
	<script type='text/javascript'>
		$(function() {
		$('.drop').tipsy({fade: false, gravity: 's'});
		});
	</script>
</head>
<body>
<div id="bodywrap">
  <div id="header">
    <h1 id="apptitle"><span>Tasker<sup>&reg;</sup></span></h1>
    <div class="session">
     <!-- This is where the loop starts for the current user check  -->
    <!--  This is the case for the logged in user -->
        <strong>
          Welcome back Tedi! <!-- This is where we will insert the username -->
          <a href="logout.php">Log Out</a>
        </strong>
<!--       
      This is the case for when a user is not logged in
        <a href="login.php">Log In</a> 
        or
        <a href="register.php">Register</a>  -->
    </div>
        <ul id="navigation">
      <li><a href="index.php">Home</a></li>
      <li><a href="projects.php">Projects</a></li>
      <li><a href="archive.php">Archive</a></li>
      <!-- below only shows for admin accounts -->
      <li><a href="users.php">Edit users</a></li>
    </ul>
  </div> <!-- end header -->
  <div id="body">
