<?php

require_once('classes/MySqlDb.php');
//$Db = new MySqlDb('localhost', 'tcass84', '985300', 'taskerdb');

require_once('classes/Admin.php');

$status = new Admin('localhost', 'tcass84', '985300', 'taskerdb');

$status_result = $status->get_status(3);



?>
<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8">
   <title>untitled</title>
</head>
<body>
    <?php print_r($status_result) ?>
</body>
</html>