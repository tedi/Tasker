<?php

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<link rel="stylesheet" href="css/main.css">
	
	<title>Tasker App</title>
</head>
<body>
  <div id="header">
    <h1>Tasker<sup>&reg;</sup></h1>
    <div class="session">
     <!-- This is where the loop starts for the current user check  -->
    <!--  This is the case for the logged in user -->
        <strong>
          Hello Tedi <!-- This is where we will insert the username -->
          <a href="logout.php">Log Out</a>
        </strong>
<!--       
      This is the case for when a user is not logged in
        <a href="login.php">Log In</a> 
        or
        <a href="register.php">Register</a>  -->
    </div>
  </div>
  <div id="body">
    <ul id="navigation">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Projects</a></li>
      <li><a href="#">Archive</a></li>
    </ul>