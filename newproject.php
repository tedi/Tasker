<?php
include "header.php"; 
?>

<div id="dashboard">
<img src="images/newproject.png">

<form id="formstyle" method="post" action="javascript:alert('Task added!!');">
<div id="wrap_form_content">
			<p id="leftform"><label>Project name</label><input class="required inpt" type="text" name="task" value="" /></p>
	
			<p id="rightform"><label>Project priority</label>
				<select name="task_priority" id="subject" class="select">
					<option value="0">Low</option>
					<option value="1">Normal</option>
					<option value="2">High</option> </select></p>
					
					
			<p id="rightform"><label>Assign to</label>
				<select name="user_id" id="subject" class="select">
					<option value="userid">User</option>
					<option value="user1id">User 1</option>
					<option value="user2id">User2</option>
		</select> </p>
		
		<p id="rightform"><label>Project category</label>
				<select name="project_category" id="subject" class="select">
					<option value="cat1">Category 1</option>
					<option value="cat2">Second category</option>
					<option value="cat3">Other category</option> </select></p>
		
		
			<p id="leftform"><label>Project description</label><textarea rows="40" class="required inpt" type="text" value="" /></textarea></p>
		
			<p id="submittask"><input name="submit" type="submit" class="newprojectbtn btn" value="Send" /></p>
</div>
		</form>



</div>




<?php include "footer.php"; ?>