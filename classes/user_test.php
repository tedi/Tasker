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
        //$tableData = array(
          //'email' => 'dave@hotmails.com',
         // 'user_category' => '3',
	//	  'is_admin' => '1'
        //);
        //$test = $user->update_user('damills', $tableData);
        //$test = $user->register('ham', 'ham@email.com', 'ham1');
        //var_dump($test);
                //$user->login('ham', 'ham3');
                $login = $user->get_users_info();
                var_dump($login);
                //echo '<br />';
                
                //$pw = $user->change_password('ham2', 'ham3');
                //var_dump($pw);
                //$user->logout();
                /*$login2 = $user->is_logged_in();
                var_dump($login2);
                echo '<br />';
                echo $_SESSION['user_id'];
                echo $_SESSION['username'];*/

		//var_dump($login);
		//var_dump($_SESSION['username']);
        ?>
    </body>
</html>
