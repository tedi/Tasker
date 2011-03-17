<?php
<<<<<<< HEAD

require_once('classes/MySqlDb.php');
//$Db = new MySqlDb('localhost', 'tcass84', '985300', 'taskerdb');
=======
include "header.php"; 
?>
<div id="dashboard">
<img src="images/dashboard.png">
>>>>>>> design

require_once('classes/Admin.php');

<<<<<<< HEAD
$status = new Admin('localhost', 'tcass84', '985300', 'taskerdb');

$status_result = $status->get_status(3);
=======
<div class="dashboard_project">
<h2 class="project_name"><a href="#" class="drop" title="Go to projects/tasks page">Project name</a><span class="edit"><a href="#" class="drop" title="Edit project"><img src="images/edit.png"></a></span></div>
>>>>>>> design

<div class="dashboard_project">
<h2 class="project_name"><a href="#" class="drop" title="Go to projects/tasks page">Other project</a><span class="edit"><a href="#" class="drop" title="Edit project"><img src="images/edit.png"></a></span></div>


<div class="dashboard_project">
<h2 class="project_name"><a href="#" class="drop" title="Go to projects/tasks page">And another</a><span class="edit"><a href="#" class="drop" title="Edit project"><img src="images/edit.png"></a></span></div>

<<<<<<< HEAD
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>untitled</title>
</head>
<body>
    <?php print_r($status_result) ?>
</body>
</html>
=======
</div>

<?php include "footer.php"; ?>
>>>>>>> design
