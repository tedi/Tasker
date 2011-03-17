<?php
include "header.php";
include "classes/MySqlDb.php";
include "classes/Admin.php";

$admin = new Admin();

$cat = $admin->get_all_category();
?>

<div id="dashboard">
<img src="images/adduser.png">

<form id="formstyle" method="post" action="javascript:alert('Task added!!');">
			<p id="leftform"><label>Email address</label><input class="required inpt" type="text" name="email" value="" /></p>
			<p id="leftform"><label>Username</label><input class="required inpt" type="text" name="username" value="" /></p>
			<p id="rightform"><label>Password</label><input class="required inpt" type="password" name="password" value="" /></p>
                        <p>
                            <!--<select name="">-->
                                <?php
                                     print_r($cat);
                                ?>
                            <!--</select>-->
                        </p>
		
			<p id="submittask"><input name="submit" type="submit" class="adduserbtn btn" value="Send" /></p>
		</form>



</div>




<?php include "footer.php"; ?>