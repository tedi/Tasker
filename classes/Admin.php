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
      parent::where('status_id', $whereValue);
      $status = parent::delete('status');
      return $status;
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

