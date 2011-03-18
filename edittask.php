<?php
include "header.php"; 
?>

<div id="dashboard">
<img src="images/edittask.png">

<form id="formstyle" method="post" action="javascript:alert('Task added!!');">
<div id="wrap_form_content">
			<p id="leftform"><label>Task name</label><input class="required inpt" type="text" name="task" value="" /></p>
			<p id="rightform"><label>Task priority</label>
				<select name="task_priority" id="subject" class="select">
					<option value="0">Low</option>
					<option value="1">Normal</option>
					<option value="2">High</option> </select></p>
			<p id="rightform"><label>Assign to</label>
				<select name="user_id" id="subject" class="select">
					<option value="userid">User</option>
					<option value="user1id">User 1</option>
					<option value="user2id">User2</option> </select></p>
		
			<p id="submittask"><input name="submit" type="submit" class="editprojectbtn btn" value="Send" /></p>
</div>
		</form>



</div>




<?php include "footer.php"; ?>