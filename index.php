<?php
include "header.php"; 
?>
<div id="dashboard">
<img src="images/dashboard.png">

<div class="dashboard_project">
<h2 class="project_name"><a href="#" class="drop" title="Go to projects/tasks page">Project name</a><span class="edit"><a href="editproject.php" class="drop" title="Edit project"><img src="images/edit.png"></a></span></div>


<div class="dashboard_project">
<h2 class="project_name"><a href="#" class="drop" title="Go to projects/tasks page">Other project</a><span class="edit"><a href="editproject.php" class="drop" title="Edit project"><img src="images/edit.png"></a></span></div>


<div class="dashboard_project">
<h2 class="project_name"><a href="#" class="drop" title="Go to projects/tasks page">And another</a><span class="edit"><a href="editproject.php" class="drop" title="Edit project"><img src="images/edit.png"></a></span></div>

</div>


<html lang="en">
<head>
   <title>untitled</title>
</head>
<body>
    <br />
    <hr />
    <form>
        <input type="hidden" name="task_id" value="<?php  $task_id; ?>" /><br />
        Task Name: <input type="text" name="task_name" value="<?php  $task_name; ?>" /><br />
        Project ID: <input type="text" name="project_id" value="<?php  $project_id; ?>" /><br />
        Task Creator: <input type="text" name="task_creator" value="<?php  $creator; ?>" /><br />
        Task Assigned To: <input type="text" name="task_assigned" value="<?php  $assigned; ?>" /><br />
        <input type="submit" value="Submit" <?php ?> />
    </form>
<pre>
</pre>
</body>
</html>
=======
<?php include "footer.php"; ?>

