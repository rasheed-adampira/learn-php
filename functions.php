<?php

  function is_logged_user_in(){
    return false;
  }

  function select_bg($color_name){
    $result = '';
    switch ($color_name) {
      case 'blue':
        $result = '#00c';
        break;
      case 'red':
          $result = '#c00';
         break;
      case 'green':
          $result = '#0c0';
          break;
    }
    return $result;
  }

  function get_users(){
    return array(
        array('id' =>1 , 'name' =>'ali' , 'email' =>'ali@.com'),
        array('id' =>2 , 'name' =>'mehdi' , 'email' =>'mehdi@.com'),
        array('id' =>3 , 'name' =>'reza' , 'email' =>'reza@.com'),
        array('id' =>4 , 'name' =>'hassan' , 'email' =>'hassan@.com'),
        array('id' =>5 , 'name' =>'saam' , 'email' =>'saam@.com'),
        array('id' =>6 , 'name' =>'haydar' , 'email' =>'haydar@.com'),
        array('id' =>7 , 'name' =>'ayaz' , 'email' =>'ayaz@.com'),
    );
  }
