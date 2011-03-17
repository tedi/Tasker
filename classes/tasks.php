<?php
require_once('classes/MySqlDb.php');

class tasks extends MysqlDB {

    public function __construct(){

    parent::__construct();
       }

    public function create_task ($title, $project_id, $creator, $assigned) {

      $insertData = array(
            'task_name'=>$title,
            'project_id'=>$project_id,
            'task_creator'=>$creator,
            'task_assigned'=>$assigned
        );
            $create = parent::insert('tasks', $insertData);
            return $create;
            //echo "Task Created.";
  }

    public function delete_task(){

    }

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
    }

    public function archived_tasks(){

         parent::where('task_deleted', 1);

        $tasks = parent::get('tasks');

       return $tasks;
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
