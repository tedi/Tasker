<?php

require_once('MySqlDb.php');
$Db = new MySqlDb('localhost', 'tcass84', '985300', 'oop-sql');

//$Db->where('id', 6);
$results = $Db->get('posts');




?>
<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8">
   <title>untitled</title>
</head>
<body>
<pre>
<?php print_r($results); ?>
</pre>
</body>
</html>