<?php
session_start();
require_once('classes/MySqlDb.php');
require_once('classes/user.php');
$user = new User();
$user->logout();
include "header.php";

?>

<div id="dashboard">
<img src="images/seeyou.png">

<form id="formstyle" method="post" action="login_action.php">

			<p id="leftform"><label>Username</label><input class="required inpt" type="text" name="username" value="" /></p>
			<p id="rightform"><label>Password</label><input class="required inpt" type="password" name="password" value="" /></p>
			<p id="submittask"><input name="submit" type="submit" class="loginbtn btn" value="Send" /></p>
		</form>



</div>




<?php include "footer.php"; ?>