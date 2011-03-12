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
    
    public function  __construct() {
        parent::__construct('localhost', 'bree', 'password', 'taskerdb');
    }

    public function get_all_projects ()
    {
        //$tableName = 'projects';
        $all_projects = parent::get('projects');
        return $all_projects;
    }








    //create project (insert)
    public function create_project ($name, $description, $owner, $status, $due_date)
    {
        $tableName = 'projects';
        $insertData = array(
            'project_name' => $name,
            'project_description' => $description,
            //'project_owner' => $owner,
            //'project_status' => $status,
            //'project_priority' => $priority,
            //'project_due_date' => $due_date
        );
        $create = parent::insert($tableName, $insertData);
    }

    //delete project (flag) (update)

    //update project

    //is owner ---

    //get project by id

    //get all projectS

    //get projects by owner

    //get assigned projects

    //sort projects??? (date, priority, status) (different functions)

    //get archived projects


}
?>