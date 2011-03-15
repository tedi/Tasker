<?php
//start session
session_start();
include('MySqlDB.php');
include('user.php');

$user = new User();




?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Test Page</h1>
        <?php
        /*$tableData = array(
          'email' => 'daveee@hotmails.com',
          'user_category' => '3',
		  'is_admin' => '1'
        );*/
        //$test = $user->update_user('damill', $tableData);
        $test = $user->register('damills', 'daves@email.com', 'WQWE23');
        var_dump($test);
                //$login = $user->logo();
		//var_dump($login);
		//var_dump($_SESSION['username']);
        ?>
    </body>
</html>
