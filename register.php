<?php
include "header.php"; 
?>

<div id="dashboard">
<img src="images/register.png">

<form id="formstyle" method="post" action="register_action.php">
			<p id="leftform"><label>Email address</label><input class="required inpt" type="text" name="email" value="" /></p>
			<p id="leftform"><label>Username</label><input class="required inpt" type="text" name="username" value="" /></p>
			<p id="rightform"><label>Password</label><input class="required inpt" type="password" name="password" value="" /></p>
		
			<p id="submittask"><input name="submit" type="submit" class="registerbtn btn" value="Send" /></p>
		</form>



</div>




<?php include "footer.php"; ?>