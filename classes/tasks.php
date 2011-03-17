<?php

class tasks extends MysqlDB {

    public function __construct(){
            
    parent::__construct();
       }

    public function create_task() {

    parent::insert($tableName, $insertData);

      $tableName = 'tasks';
      $insertData = array(
            'task_id'=>$task_id,
            'task_name'=>$title,
            'project_id'=>$project_id,
            'task_creator'=>$creator,
            'task_assigned'=>$assigned
        );
            return $insertData;
  }

    public function delete_task(){

    }

    public function update_task(){

    }

    public function get_task_where_project_id(){

    }

    public function get_all_tasks(){

    }

    public function archived_tasks(){

     
        $tasks = $this->get('tasks');
        
       foreach($tasks as $arc_task){

          $arc_task = $this->where('task_deleted',1);
          
          return $arc_task;

       }   
    }

  public function get_by_owner(){

  }

  public function sort_by_priority(){

  }
  public function sort_by_date(){

  }
  public function sort_by_status(){

  }















}




?>
