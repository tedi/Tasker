<?php

require_once('classes/MySqlDb.php');
require_once('classes/Admin.php');

$priority = new Admin();

$results = $priority->sort_priority();

?>
<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8">
   <title>untitled</title>
</head>
<body>


</body>
</html>