<?php
include "header.php";

$cats = $admin->get_all_category();
?>

<div id="dashboard">
<img src="images/edituser.png">

<form id="formstyle" method="post">
			<p id="leftform"><label>Email address</label><input class="required inpt" type="text" name="email" value="" /></p>
			<p id="leftform"><label>Username</label><input class="required inpt" type="text" name="username" value="" /></p>
			<p id="rightform"><label>Password</label><input class="required inpt" type="password" name="password" value="" /></p>
                        <p>
                            <select name="group">
                                <option selected="selected" value="NULL">Choose a Group</option>
                                <option value="NULL"></option>
                                <?php
                                    foreach($cats as $cat){
                                        echo "<option value=".$cat['category_description'].">".$cat['category_description']."</otion>";
                                    }
                                ?>
                            </select>
                        </p>
			<p id="submittask"><input name="submit" type="submit" class="editprojectbtn btn" value="Send" /></p>
		</form>



</div>




<?php include "footer.php"; ?>