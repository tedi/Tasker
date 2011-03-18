<?php
include "header.php"; 
?>

<div id="dashboard">
<img src="images/projects.png"> <a class="projectbutton" href="newproject.php">Add project</a>

<?php
$_SESSION['user_id'] = 1;

$projOb = new Projects();
$owned_projects = $projOb->get_projects_by_owner($_SESSION['user_id']);

//print_r($owned_projects);
foreach ($owned_projects as $project)
{
?>
<div class="single_project">
<h2 class="project_name"><a href="#" class="drop" title="Description of project name goes here">
<?php echo $project['project_name']; ?>
</a><span><a class="button" href="newtask.php">Add task</a></span></h2>
<ul class="projects">
<li><a href="#" class="task">Task 1</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
<li><a href="#" class="task">Second task</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
<li><a href="#" class="task">Third task</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
<li><a href="#" class="task">And another one</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
</ul>
</div>
<?php } ?>


</div> <!-- End dashboard -->

<?php include "footer.php"; ?>