<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include('classes/MySqlDb.php');
include('classes/user.php');

if (!$_POST['username'] == '' && !$_POST['password']== "")
{
    $user = new User();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = $user->login($username, $password);
    
    
    if ($login)
    {
        header('Location:index.php');
    }
    else
    {
        
        header('Location:login.php');
    }
}
else
{
   
    header('Location:login.php');
}




?>
