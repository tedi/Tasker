<?php
session_start();
require_once('classes/MySqlDb.php');
require_once('classes/user.php');
$user = new User();
$admin = $user->is_admin();
if(!$admin)
{
    header("Location: users.php");
}

include "header.php";

?>

<div id="dashboard">
<img src="images/edituser.png">

<form id="formstyle" method="post">
			<p id="leftform"><label>Email address</label><input class="required inpt" type="text" name="email" value="" /></p>
			<p id="leftform"><label>Username</label><input class="required inpt" type="text" name="username" value="" /></p>
			<p id="rightform"><label>Password</label><input class="required inpt" type="password" name="password" value="" /></p>
		<p id="rightform"><label>User role</label>
				<select name="user_id" id="subject" class="select">
					<option value="role1">Role</option>
					<option value="role2">Role 1</option>
					<option value="role">Role2</option> </select></p>
			<p id="submittask"><input name="submit" type="submit" class="editprojectbtn btn" value="Send" /></p>
		</form>



</div>




<?php include "footer.php"; ?>