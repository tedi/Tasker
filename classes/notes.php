<?php




       $tasks = parent::get('tasks');
       //$whereProp = $tasks['tast_deleted'];
       foreach($tasks as $arc_task){

          if(!empty($arc_task['task_deleted']) && $arc_task['task_deleted'] == $whereValue){
           //$arc_task = $this->where('task_deleted', $whereValue);
           //$user = $this->get('users');
         parent::where($arc_task['task_deleted'], $whereValue);
          //$arc_task = parent::get('tasks');
          return $arc_task;
           }
       }






?>
