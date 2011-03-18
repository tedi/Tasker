<?php
include "header.php";

$priors = $admin->get_all_priority();
$stats = $admin->get_all_status();
?>

<div id="dashboard">
<img src="images/editproject.png">

<form id="formstyle" method="post" action="javascript:alert('Task added!!');">
<div id="wrap_form_content">
			<p id="leftform"><label>Project name</label><input class="required inpt" type="text" name="task" value="" /></p>
	
			<p id="rightform"><label>Project priority</label>
				<select name="priority">
                                    <option selected="selected" value="NULL">Choose Priority Level</option>
                                    <option value="NULL"></option>
                                    <?php
                                        foreach($priors as $prior){
                                            echo "<option value=".$prior['priority_description'].">".$prior['priority_description']."</otion>";
                                        }
                                    ?>
                                </select>
                        </p>
                        <p id="rightform"><label>Project status</label>
				<select name="status">
                                    <option selected="selected" value="NULL">Choose Status</option>
                                    <option value="NULL"></option>
                                    <?php
                                        foreach($stats as $stat){
                                            echo "<option value=".$stat['status_description'].">".$stat['status_description']."</otion>";
                                        }
                                    ?>
                                </select>
                        </p>
					
					
			<p id="rightform"><label>Assign to</label>
				<select name="user_id" id="subject" class="select">
					<option value="userid">User</option>
					<option value="user1id">User 1</option>
					<option value="user2id">User2</option>
		</select> </p>
		
		
		
			<p id="leftform"><label>Project description</label><textarea rows="40" class="required inpt" type="text" value="" /></textarea></p>
		
			<p id="submittask"><input name="submit" type="submit" class="editprojectbtn btn" value="Send" /></p>
</div>
		</form>



</div>




<?php include "footer.php"; ?>