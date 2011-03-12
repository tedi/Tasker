<?php

require_once('classes/MySqlDb.php');
require_once('classes/tasks.php');

$results=$insertData->get('tasks');

?>


<!DOCTYPE html>

<html lang="en">
<head>
   <title>untitled</title>
</head>
<body>
<pre>
<?php echo $results; ?>
</pre>
</body>
</html>