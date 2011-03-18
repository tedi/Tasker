<?php

require_once('classes/MySqlDb.php');
require_once('classes/tasks.php');

$db = new MySqlDb();
$task = new tasks();


//works!
//$all_tasks = $task->get_all_tasks();

//works!
//$arc_task = $task->archived_tasks();

//works!
//$whereValue = 2;
//$projectTasks = $task->get_task_where_project_id($whereValue);

//works!
//$insertData = array(
//    $title = 'task name',
//    $project_id = 1,
//    $creator = 2,
//    $assigned = 1
//);
//$create = $task->create_task($title, $project_id, $creator, $assigned);

$task_id = 3;
$tableData = array(
    'title' => 'task name',
    'description' => 'info goes here',
    'project_id' => 1,
    'creator' => 2,
    'assigned' => 1,
    'completed' => '',
    'due_date' => '',
    'deleted' => 0,
    'priority' => 3,
    'status' => 3
    );
//var_dump($givenData);

$update = $task->update_task($task_id,$tableData);

?>
<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8">
   <title>untitled</title>
</head>
<body>
 <pre>
<?php //print_r($all_tasks); ?>
 </pre>

 <pre>
<?php //print_r($arc_task); ?>
 </pre>

 <pre>
<?php //print_r($projectTasks); ?>
 </pre>

 <pre>
<?php //print_r($update); ?>
 </pre>
 

</body>
</html>