<?php

  new finalClass();

   function __autoload($className){

    $fileName = 'dash-'.$className.'.php';

    var_dump($fileName);
    var_dump(__DIR__);
    var_dump(DIRECTORY_SEPARATOR);
    // var_dump($filePath = __DIR__.DIRECTORY_SEPARATOR.'opp'.DIRECTORY_SEPARATOR.$fileName);
    $filePath = __DIR__.DIRECTORY_SEPARATOR.'oop'.DIRECTORY_SEPARATOR.$fileName;
    var_dump($filePath);
    if (file_exists($filePath)){
        require_once $filePath;
      }
  }

