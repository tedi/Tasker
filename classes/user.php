<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Owner
 */
class User extends MysqlDB {

    
    function __construct()
    {
        parent::__construct();
    }

    function login($username, $password)
    {
        //login user

        //check to see if input matches db

    }
    
    function is_logged_in()
    {
        //checks to see if/which user is logged in

        //check session

        //return logged in user_id or false

    }

    function logout()
    {
        //logout user
        //destroy session
        

    }

    function register($username, $password, $category = 0)
    {
        //register a user
        //check to see if username already exists

    }

    function _hash_password($password)
    {
        //hash and salt pw

        //return altered pw

    }

    function get_users()
    {
        $users = $this->get('users');
        
    }
    function _user_exists($username)
    {
        //check to see if user already exists
        $this->where('username', $username);
        $user = $this->get('users');
        //return true/false
        if ($user)
        {
            return true;
        } else {
            return false;
        }
        
    }
    
    function update_user(){
        //update user info
        
        //return true if successful
    }
    
    function delete_user()
    {
        //delete user by changing flag
        
        //return true if successful
    }

    function is_admin()
    {
        //determins whether logged-in user is an admin
        //is a user logged in?

        //if so, check admin status

        //returns true/false

    }
}
?>
