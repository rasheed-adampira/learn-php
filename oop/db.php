<?php

  class DB{

    public $table;

    public function find($id, $column=null){

      $column = !is_null($column) ? implode(' , ',$column) : "*";

      return "SELECT {$column} FROM {$this->table} WHERE id={$id}";
    }

    public static function export(){
      
    }

  }

  $connect = new DB();
  $connect->table = 'user';
  $connect->find(56,  array('name','email','lname'));
