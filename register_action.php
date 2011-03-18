<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include('classes/MySqlDb.php');
include('classes/user.php');

if (!$_POST['username'] == '' || !$_POST['password']== "" || !$_POST['email'] == '')
{
    $user = new User();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $register = $user->register($username, $email, $password);


    if ($register)
    {
        header('Location:login.php');
    }
    else
    {
        header('Location:register.php');
    }
}
else
{

    header('Location:register.php');
}

?>
