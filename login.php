<?php
include "header.php"; 

?>




<div id="dashboard">
<img src="images/loginlogo.png">
<?php 
    echo $_SESSION['error'];
    //$SESSION_unset['error'];
?>
<form id="formstyle" method="post" action="login_action.php">

			<p id="leftform"><label>Username</label><input class="required inpt" type="text" name="username" value="" /></p>
			<p id="rightform"><label>Password</label><input class="required inpt" type="password" name="password" value="" /></p>
		
			<p id="submittask"><input name="submit" type="submit" class="loginbtn btn" value="Send" /></p>
<div id="register"><a href="register.php" >Not a member? Register here</a></div>
		</form>



</div>




<?php include "footer.php"; ?>