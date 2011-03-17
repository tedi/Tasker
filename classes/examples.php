<?php

class examples{


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


  public function create_project ($name, $description, $owner, $status, $priority, $due_date){
        $insertData = array(
            'project_name' => $name,
            'project_description' => $description,
            'project_owner' => $owner,
            'project_status' => $status,
            'project_priority' => $priority,
            'project_due_date' => $due_date
        );
        parent::insert('projects', $insertData);

    }

    //delete project (flag) (update)
    public function delete_project ($project_id)
    {
        //$this->where($whereProp, $whereValue);
        //$this->update($tableName, $tableData);
    }

    //update project
    public function update_project ($project_id, $insertData)
    {
        //print_r($insertData['name']);
        //die;
        $tableData = array(
            'project_name' => $insertData['name'],
            'project_description' => $insertData['description'],
            'project_owner' => $insertData['owner'],
            'project_status' => $insertData['status'],
            'project_priority' => $insertData['priority'],
            'project_due_date' => $insertData['due_date'],
            'project_deleted' => $insertData['deleted']
        );

        //print_r($tableData);
        //die;

        $this->where('project_id', $project_id);
        $update = $this->update('projects', $tableData);

    }

    //is owner ---
    public function is_project_owner ($project_id, $user_id)
    {
        //get the id of the owner of this project
        $this->where('project_id', $project_id);
        $owner = $this->get('projects');

        //figure out how to get to project owner id
        //echo $owner[0]['project_owner'];
        //echo $user_id;
        //die;


        //if the project owner id is the same as the id of the user currently logged in...
        if( $owner[0]['project_owner'] == $user_id ){
            //return true
            echo 'success';
            return TRUE;
        //otherwise...
        }else{
            //return false
            echo 'failure';
            return FALSE;
        }
    }

    //get all projectS
    public function get_all_projects ()
    {
        //$tableName = 'projects';
        $all_projects = $this->get('projects');
        //returns an array
        return $all_projects;
    }

    //get project by id
    public function get_project_by_id ($project_id)
    {
        $this->where('project_id', $project_id);
        $project = $this->get('projects');
        //returns an array
        return $project;
    }

    //get projects by owner
    public function get_projects_by_owner ($project_owner_id)
    {

    }

    //get assigned projects
    public function get_assigned_projects ()
    {
        //REFER to table project_members;
    }

    //sort projects??? (date, priority, status) (different functions)
    public function sort_projects_by_date ()
    {

    }

    public function sort_projects_by_priority ()
    {

    }

    public function sort_projects_by_status ()
    {

    }

    //get archived projects
    public function get_completed_projects ()
    {

    }

public function get_status($whereValue)
       {
           parent::where('status_id', $whereValue);
           $status = parent::get('status');
           return $status;
       }

  public function get_all_status()
       {
           $status = parent::get('status');
           return $status;
       }

  public function create_status($insertData){

      $insertStatus = array(
         'status_description' => $insertData
      );

      $cur_status = true;

      $status = parent::get('status');
      foreach($status as $value){
          If($value['status_description'] == $insertStatus['status_description']){
              echo "Status already exists. Please submit new status";
              $cur_status = false;
              return $cur_status;
          }
      }

      if($cur_status == true){
          parent::insert('status', $insertStatus);
          echo "You've successfully entered a new status.";
      }

  }

  public function delete_status($whereValue){
      $projects = parent::get('projects');
      $tasks = parent::get('tasks');

      foreach($projects as $project){
          if(!empty($project['project_status']) && $project['project_status'] == $whereValue){
              $updateStatus = array(
                'project_status' => 'NULL'
              );
              parent::where($project['project_status'], $whereValue);
              parent::update('projects', $updateStatus);
          }
      }

      foreach($tasks as $task){
          if(!empty($task['task_status']) && $task['task_status'] == $whereValue){
              $updateStatus = array(
                'task_status' => 'NULL'
              );
              parent::where($task['task_status'], $whereValue);
              parent::update('tasks', $updateStatus);
          }
      }

      parent::where('status_id', $whereValue);
      parent::delete('status');
  }

  public function update_status($statusID, $insertData){

        $updateStatus = array(
         'status_description' => $insertData
         );

      $cur_status = true;

      $status = parent::get('status');

      foreach($status as $value){
          If($value['status_description'] == $updateStatus['status_description']){
              echo "Status already exists. Please update this with a new status";
              $cur_status = false;
              return $cur_status;
          }
      }

      if($cur_status == true){
          parent::where('status_id', $statusID);
          parent::update('status', $updateStatus);
          echo "You've successfully updated a this status.";
      }
  }



}


?>

<!DOCTYPE html>

<html lang="en">

<body>
        $users = $user->get_users();
        //$exist = $user->_user_exists('damills');
        var_dump($users);
        ?>
</body>
</html>