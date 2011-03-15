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
        //hash pw
        $password = $this->_hash_password($password);
        //check to see if input matches db
        $this->where('username', $username);
        $user = $this->get('users');
        $user = $user[0];
        if(!user)
        {
            return false;
        }
        else
        {
            if($user['password']!=$password)
            {
                return false;
            }
            else
            {
                
                //set session variables
                if(isset($_SESSION['username']))
                {
                     unset($_SESSION['username']);
                }

                if(isset($_SESSION['user_id']))
                {
                     unset($_SESSION['user_id']);
                }
                
                $_SESSION['username'] = $user['username'];
                $_SESSION['user_id'] = $user['user_id'] ;
                return true;
            }
        }
               

    }
    
    function is_logged_in()
    {
        //checks to see if/which user is logged in
        //check session
         //return logged in user_id or false
        if(isset($_SESSION['user_id']))
                {
                     $user_id = $_SESSION['user_id'];
                     return $user_id;
                }
        else
        {
            return false;
        }
       

    }

    function logout()
    {
        //logout user
        //unset session
        if(isset($_SESSION['username']))
                {
                     unset($_SESSION['username']);
                }

        if(isset($_SESSION['user_id']))
                {
                     unset($_SESSION['user_id']);
                }
        

    }

    function register($username, $email, $password, $category = NULL)
    {
        //register a user
        
		
        //check to see if username already exists
        
        $exists = $this->_user_exists($username);
        if($exists){
            
            $error = 'User already exists!';
            return $error;            
        }
        else
        {
            //hash password
            $password = $this->_hash_password($password);
            //if new user, create user
            $insertData = array(
                'username' => $username,
                'email' => $email,
                'user_category' => $category,
                'password' => $password
            );
            $insert = $this->insert('users', $insertData);
            if($insert)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
        
        
        //return true/false
        

    }

    function _hash_password($password)
    {
        //hash and salt pw
		$hash = crypt($password, 'This is my salt');
        //return altered pw
		return $hash;

    }

    function get_users()
    {
        $users = $this->get('users');
        foreach ($users as $user)
        {
            $user_array[] .= $user['username'];
        }
        //returns an array of user names
        return $user_array;
        
    }

    function get_user($username)
    {
        $this->where('username', $username);
        $user = $this->get('users');
		$user = $user[0];
        return $user;

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
    
    function update_user($username, $user_info){
        //$user_info is an array where the keys specify the columns to be updated
        // and the values represent the new values. $username represents the 
        // current username prior to any updates.

        //update user info
        $exists = $this->_user_exists($username);
        if(!$exists){

            $error = 'User does not exist!';
            return $error;
        }
        
            
            foreach($user_info as $key => $value){

               switch ($key)
               {
                    /*case 'username':
                        $tableData['username'] = $value;
                        break;*/
                    case 'email':
                        $tableData['email'] = $value;
                        break;
                    /*case 'password':
                        $tableData['password'] = $value;
                        break;*/
                    case 'user_category':
                        $tableData['user_category'] = $value;
                        break;
                    case 'user_deleted':
                        $tableData['user_deleted'] = $value;
                        break;
                    case 'is_admin':
                        $tableData['is_admin'] = $value;
                        break;
                    default:
                        break;

               }
           }
            
			$user = $this->get_user($username);
            			
			$new = new User();
			$new->where('user_id', $user['user_id']);
            $update = $new->update('users', $tableData);

           if($update)
            {
                return true;
            }
            else
            {
                return false;
            }
        //return true if successful
        }
    

    function delete_user($username)
    {
        //delete user by changing flag
		$tableData = array(
			'user_deleted' => 1		
		);
		
        $delete = $this->update_user($username, $tableData);
        //return true if successful
		if($delete)
		{
			return true;
		}
		else
		{
			return false;
		}
    }

    function is_admin()
    {
        //determins whether logged-in user is an admin
        //is a user logged in?
		$user_id = $this->is_logged_in();
		
		if (!$user_id)
		{
			$error = 'User not logged in!';
			return $error;
		}
		
		//if so, check admin status
		$user = $this->get_user($_SESSION['username']);
				
		//returns true/false
		if($user['is_admin']==1)
		{
			return true;
		}
		else
		{
			return false;
		}

    }
}

?>
