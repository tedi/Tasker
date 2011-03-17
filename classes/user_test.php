<?php
include('MySqlDB.php');
include('user.php');

$db = new MysqlDB;
$user = new User();




?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $users = $user->get_users();
        //$exist = $user->_user_exists('damills');
        var_dump($users);
        ?>
    </body>
</html>
