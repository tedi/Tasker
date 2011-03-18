<?php

class Admin extends MysqlDB {

   public function __construct($host, $username, $password, $db) {
      parent::__construct($host, $username, $password, $db);
   }

   public function get_status($numRows)
   {
       parent::get('status', $numRows);
   }
   
}

