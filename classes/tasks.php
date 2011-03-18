<?php
<<<<<<< HEAD
require_once('classes/MySqlDb.php');
=======
>>>>>>> c7370b4e5a2c283f0a261aa644bdb683b54d06c7

class tasks extends MysqlDB {

    public function __construct(){
<<<<<<< HEAD

    parent::__construct();
       }

    public function create_task ($title, $project_id, $creator, $assigned) {
     
      $insertData = array(
=======
            
    parent::__construct();
       }

    public function create_task() {

    parent::insert($tableName, $insertData);

      $tableName = 'tasks';
      $insertData = array(
            'task_id'=>$task_id,
>>>>>>> c7370b4e5a2c283f0a261aa644bdb683b54d06c7
            'task_name'=>$title,
            'project_id'=>$project_id,
            'task_creator'=>$creator,
            'task_assigned'=>$assigned
        );
<<<<<<< HEAD
            $create = parent::insert('tasks', $insertData);
            return $create;
            //echo "Task Created.";
=======
            return $insertData;
>>>>>>> c7370b4e5a2c283f0a261aa644bdb683b54d06c7
  }

    public function delete_task(){

    }

<<<<<<< HEAD
    public function update_task($task_id,$tableData){

        $this->where('task_id', $task_id);

        //print_r($tableData);
        
        $tableData = array(
            'task_name' => $tableData['title'],
            'task_description' => $tableData['description'],
            'project_id' => $tableData['project_id'],
            'task_creator' => $tableData['creator'],
            'task_assigned' => $tableData['assigned'],
            'task_completed' => $tableData['completed'],
            'task_due_date' => $tableData['due_date'],
            'task_deleted' => $tableData['deleted'],
            'task_priority' => $tableData['priority'],
            'task_status' => $tableData['status']
        );

       
        //print_r($tableData);

        
        //$this->where('task_id', $task_id);
        //echo $task_id;
        //$update = parent::update('tasks',$tableData);
              
        $update = $this->update('tasks', $tableData);
        die;
        }

    public function get_task_where_project_id($whereValue){

        parent::where('project_id', $whereValue);

        $tasks = parent::get('tasks');

       return $tasks;
    }

    public function get_all_tasks(){
        $all_tasks = parent::get('tasks');
        return $all_tasks;
=======
    public function update_task(){

    }

    public function get_task_where_project_id(){

    }

    public function get_all_tasks(){

>>>>>>> c7370b4e5a2c283f0a261aa644bdb683b54d06c7
    }

    public function archived_tasks(){

<<<<<<< HEAD
         parent::where('task_deleted', 1);

        $tasks = parent::get('tasks');

       return $tasks;
    }



=======
     
        $tasks = $this->get('tasks');
        
       foreach($tasks as $arc_task){

          $arc_task = $this->where('task_deleted',1);
          
          return $arc_task;

       }   
    }

>>>>>>> c7370b4e5a2c283f0a261aa644bdb683b54d06c7
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
