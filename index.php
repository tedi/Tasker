<?php

require_once('classes/MySqlDb.php');
require_once('classes/tasks.php');

$project = new MysqlDB();

//$results=$arc_task->get($insertdata);
//$insertData = array(
//    'task_name' => 'task one',
//    'project_id' => '3'
//);

$arc_task = $project->archived_tasks('tasks');
print_r($arc_task);
?>


<!DOCTYPE html>

<html lang="en">
<head>
   <title>untitled</title>
</head>
<body>
<pre>
<?php  ; ?>
</pre>
</body>
</html>;
