<?php

  require_once('../db.php');

  class User extends DB{

    public function __construct(){
      $this->table = 'user';
    }

  }

$con = new user();
var_dump($con);
