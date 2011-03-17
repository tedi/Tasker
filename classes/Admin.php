<?php

class Admin extends MySqlDB {

  public function __construct(){
      parent::__construct('localhost', 'tcass84', '985300', 'taskerdb');
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
                'project_status' => '0'
              );
              parent::where($project['project_status'], $whereValue);
              parent::update('projects', $updateStatus);
          }
      }

      foreach($tasks as $task){
          if(!empty($task['task_status']) && $task['task_status'] == $whereValue){
              $updateStatus = array(
                'task_status' => '0'
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

//The following script is CRUD for the PRIORITY TABLE


   public function get_priority($whereValue)
       {
           parent::where('priority_id', $whereValue);
           $priority = parent::get('priority');
           return $priority;
       }

  public function get_all_priority()
       {
           $priority = parent::get('priority');
           return $priority;
       }

  public function sort_priority()
       {
           $priorities = parent::get('projects');

           $prior_id = array();

           foreach($priorities as $priority){
               $prior_id[] .= $priority['project_priority'];
           }

           $sorted_priority = sort($prior_id);
       }

  public function create_priority($insertData){

      $insertPriority = array(
         'priority_description' => $insertData
      );

      $cur_priority = true;

      $priority = parent::get('priority');
      foreach($priority as $value){
          If($value['priority_description'] == $insertPriority['priority_description']){
              echo "Priority level already exists. Please submit new level";
              $cur_priority = false;
              return $cur_priority;
          }
      }

      if($cur_priority == true){
          parent::insert('priority', $insertPriority);
          echo "You've successfully entered a new priority.";
      }

  }

 public function delete_priority($whereValue){
      $projects = parent::get('projects');
      $tasks = parent::get('tasks');

      foreach($projects as $project){
          if(!empty($project['project_priority']) && $project['project_priority'] == $whereValue){
              $updatePriority = array(
                'project_priority' => '0'
              );
              parent::where($project['project_priority'], $whereValue);
              parent::update('projects', $updatePriority);
          }
      }

      foreach($tasks as $task){
          if(!empty($task['task_priority']) && $task['task_priority'] == $whereValue){
              $updatePriority = array(
                'task_priority' => '0'
              );
              parent::where($task['task_priority'], $whereValue);
              parent::update('tasks', $updatePriority);
          }
      }


      parent::where('priority_id', $whereValue);
      parent::delete('priority');
  }

  public function update_priority($priorityID, $insertData){

        $updatePriority = array(
         'priority_description' => $insertData
         );

      $cur_priority = true;

      $priority = parent::get('priority');

      foreach($priority as $value){
          If($value['priority_description'] == $updatePriority['priority_description']){
              echo "Priority level already exists. Please update your priorities with a new level.";
              $cur_priority = false;
              return $cur_priority;
          }
      }


      if($cur_priority == true){
          parent::where('priority_id', $priorityID);
          parent::update('priority', $updatePriority);
          echo "You've successfully updated a this priority level.";
      }
  }


  //The following script is CRUD for the CATEGORY TABLE


   public function get_category($whereValue)
       {
           parent::where('category_id', $whereValue);
           $category = parent::get('category');
           return $category;
       }

  public function get_all_category()
       {
           $category = parent::get('category');
           return $category;
       }

  public function create_category($insertData){

      $insertCategory = array(
         'category_description' => $insertData
      );

      $cur_category = true;

      $category = parent::get('category');
      foreach($category as $value){
          If($value['category_description'] == $insertCategory['category_description']){
              echo "Category already exists. Please submit new category.";
              $cur_category = false;
              return $cur_category;
          }
      }

      if($cur_category == true){
          parent::insert('category', $insertCategory);
          echo "You've successfully entered a new category.";
      }

  }

 public function delete_category($whereValue){
      $users = parent::get('users');

      foreach($users as $user){
          if(!empty($user['user_category']) && $user['user_category'] == $whereValue){
              $updateCategory = array(
                'user_category' => '0'
              );
              parent::where($user['user_category'], $whereValue);
              parent::update('users', $updateCategory);
          }
      }

      parent::where('category_id', $whereValue);
      parent::delete('category');
  }

  public function update_category($categoryID, $insertData){

        $updateCategory = array(
         'category_description' => $insertData
         );

      $cur_category = true;

      $category = parent::get('category');

      foreach($category as $value){
          If($value['category_description'] == $updateCategory['category_description']){
              echo "Category already exists. Please update your priorities with a new category.";
              $cur_category = false;
              return $cur_category;
          }
      }


      if($cur_category == true){
          parent::where('category_id', $categoryID);
          parent::update('category', $updateCategory);
          echo "You've successfully updated a this category.";
      }
  }
   
}

