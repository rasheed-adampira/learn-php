<?php

require_once 'oop/classess/htmlExport.php';
require_once 'oop/classess/jsonExport.php';
require_once 'oop/classess/xmlExport.php';

$export = "json";
$handler = $export.'Export';

//var_dump($handler);

$handlerObject = new $handler;
//
//$handlerObject->export();

class exportHandler{

    public function doExport(canExport $handler){
        $handler->export();
    }
}

$object = new exportHandler();
$object->doExport($handlerObject);



