<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Projects
 *
 * @author briannabenesh
 *
 */

class Projects extends MysqlDB {
    
    public function  __construct () {
        parent::__construct('localhost', 'bree', 'password', 'taskerdb');
    }

    //create project (insert)
    public function create_project ($name, $description, $owner, $status, $priority, $due_date)
    {
        $insertData = array(
            'project_name' => $name,
            'project_description' => $description,
            'project_owner' => $owner,
            'project_status' => $status,
            'project_priority' => $priority,
            'project_due_date' => $due_date
        );
        $create = parent::insert('projects', $insertData);

        //echo "Project Created.";
    }

    //delete project
    public function delete_project ($project_id)
    {
        $this->where('project_id', $project_id);

        $tableData = array(
            'project_deleted' => '1'
        );
        
        $this->update('projects', $tableData);
    }

    //update project
    public function update_project ($project_id, $insertData)
    {
        
        $this->where('project_id', $project_id); //moved this. test.
        
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
        
        $update = $this->update('projects', $tableData);
        //return $update; //?? test w/o this and then with this
        
        echo "Update Successful";
    }

    //is owner
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

    //get projects by owner -- IN PROGRESS -- TEST ME!!
    public function get_projects_by_owner ($user_id)
    {
        $this->where('project_owner', $user_id);
        $owned_projects = $this->get('projects');
        //returns an array
        return $owned_projects;
    }

    //get assigned projects -- IN PROGRESS
    public function get_assigned_projects ($user_id)
    {
        //where current user id = user id....
        $this->where('user_id', $user_id);
        //stored in project/members join table, get all info
        $project_members = $this->get('project_members');
        //returns an array
        //
        //loop through that array to get project ids
        //put project ids into their own array so we can work with them
        $proj_ids = array();

        foreach ($project_members as $data_pairs)
        {
           $proj_ids[] .= $data_pairs['project_id'];  
        }
           print_r ($proj_ids);
        //now get info from projects table for each project id
        $assigned_projects = array();

        foreach ($proj_ids as $proj_id)
        {
            echo 'in<br>';

            echo $proj_id.'<br>';

            echo 'mid<br>';
            
            $assigned_projects[] .= $this->get_project_by_id($proj_ids[0]);

            echo 'end';

            
        }
        print_r($assigned_projects);

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
    
    function order_by ($column_name)
    {
        
    }

    //get archived projects -- no "is_completed" in projects table
    public function get_completed_projects ()
    {
        $this->where(/*is completed?, 1?*/);
        $project = $this->get('projects');
        //returns an array
        return $project;
    }

}
?>