<?php

trait logger{

    public function log($data)
    {
        echo "{$data} Loged!";
    }
}

class DB{

    public function __construct()
    {
        echo "coonect to db";
    }
}

class post extends DB{
//    public function post()
//    {
//        echo "connect ok";
//    }

    use logger;


}

//$con = new post();
(new post())->log("  mehran");
