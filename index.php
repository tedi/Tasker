<?php

require_once('classes/MySqlDb.php');
require_once('classes/tasks.php');

//$project = new MysqlDB();
//
//$results=$project->get('tasks');
//print_r($results);

$all = new tasks();
//print_r($all->get('tasks');
print_r($all->where('users.task_deleted',1));


//$insertData = array(
//    'task_name' => 'task two',
//    'project_id' => '2'
//);

$tasks = new tasks();
$tasks->create_task();


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
