<?php

require_once('classes/MySqlDb.php');
require_once('classes/tasks.php');


$Db = new MySqlDb('localhost', 'melissaf', 'password', 'taskerdb');

$Db->$insertdata('tasks',
    array('',
        'firsttask',
        '2',
        '1',
        '2'
        ));


?>


<!DOCTYPE html>

<html lang="en">
<head>
   <title>untitled</title>
</head>
<body>
<pre>
<?php $insertData ?>
</pre>
</body>
</html>