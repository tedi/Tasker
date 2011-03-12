<?php

require_once('classes/MySqlDb.php');
require_once('classes/tasks.php');

$project = new MysqlDB();

$results=$project->get('tasks');
print_r($results);

//$insertData = array(
//    'task_name' => 'task two',
//    'project_id' => '2'
//);
$tasks = new tasks();
$project->create_tasks('tasks',$insertData);


$tasks = new tasks();
$arc_task = $tasks->archived_tasks('tasks');
print_r($arc_task);
?>


<!DOCTYPE html>

<html lang="en">
<head>
   <title>untitled</title>
</head>
<body>
    <br />
    <hr />
    <form>
        Task Name: <input type="text" name="task_name" value="<?php  $insertData[$title]; ?>" /><br />
        Project ID: <input type="text" name="project_id" value="<?php  $project_id; ?>" />
    </form>
<pre>
</pre>
</body>
</html>
