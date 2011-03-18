<?php
include "header.php";

?>

<div id="dashboard">
<img src="images/projects.png"> <a class="projectbutton" href="newproject.php">Add project</a>
<div class="single_project">
<h2 class="project_name"><a href="#" class="drop" title="Description of project name goes here">Project name</a><span><a class="button" href="newtask.php">Add task</a></span></h2>
<input type="hidden" id="age" name="age" value="" />
<ul class="projects">

    <li><?php
    $whereValue = 1;
            $tasks = new tasks();
            $task = $tasks->get('tasks');
            //print_r ($task);

            foreach($tasks as $proj_tasks){
            $proj_tasks = $tasks->get_task_where_project_id();
            
            print $proj_tasks;

            }
    ?>
    </li>
<li><a href="#" class="task">First Task</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
<li><a href="#" class="task">Second task</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
<li><a href="#" class="task">Third task</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
<li><a href="#" class="task">And another one</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
</ul>
</div>

<div class="single_project">
<h2 class="project_name"><a href="#" class="drop" title="Description of project name goes here">Test project</a><span><a class="button" href="newtask.php">Add task</a></span></h2>
<ul class="projects">
<li><a href="#" class="task">Task</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
<li><a href="#" class="task">Finish Tasker design</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
<li><a href="#" class="task">Debug code</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
<li><a href="#" class="task">Launch tasker</a> <span class="del"><a href="#"class="drop" title="Delete task"><img src="images/del.png"></a></span> <span class="edit"><a href="edittask.php" class="drop" title="Edit task"><img src="images/edit.png"></a></span></li>
</ul>
</div>

</div> <!-- End dashboard -->

<?php include "footer.php"; ?>