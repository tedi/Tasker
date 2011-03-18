<?php
include "header.php";
$projOb = new Projects();

if($_POST['submit'])
{
$name = $_POST['project_name'];
$description = $_POST['project_description'];
$owner = $_SESSION['user_id'];
$status = 'NULL';
$priority = $_POST['project_priority'];
$due_date = $_POST['project_due_date'];

print_r($_POST);

$projOb->create_project($name, $description, $owner, $status, $priority, $due_date);
}

?>

<div id="dashboard">
<img src="images/newproject.png">

<form id="formstyle" method="post" action="newproject.php">
<div id="wrap_form_content">
			<p id="leftform"><label>Project name</label><input class="required inpt" type="text" name="project_name" value="" /></p>
	
			<p id="rightform"><label>Project priority</label>
				<select name="project_priority" id="subject" class="select">
					<option value="0">Low</option>
					<option value="1">Normal</option>
					<option value="2">High</option> </select></p>

			<p id="leftform"><label>Project due date</label><input class="required inpt" type="text" name="project_due_date" value="YYYY-MM-DD" /></p>
					
			<p id="leftform"><label>Project description</label><textarea rows="40" class="required inpt" type="text" name="project_description" value="" /></textarea></p>
					
		
		
			<p id="submittask"><input name="submit" type="submit" class="newprojectbtn btn" value="Send" /></p>
</div>
</form>



</div>
<?php include "footer.php"; ?>