<?php

    abstract class onlineGatewai {

        protected $option;

        public function __construct()
        {
            $this->option = array(
                'mellat' => array(
                    'username' => 'rasheed',
                    'password' => '123',
                    'webservice' => 'localhost'
                ),
                'saman' => array(
                    'username' => 'mellat',
                    'password' => '3421'
                ),
                'parsian' => array(
                    'manager' => 'azadi',
                    'host' => 'local'
                )
            );
        }

        abstract public function sendRquist();
        abstract public function veriyfay();
    }

 class mellat extends onlineGatewai{

     private $gatewayName;
     private $mellat_options;

     public function __construct()
     {

         $this->gatewayName = 'mellat';
         parent::__construct();
         $this->mellat_options = $this->option[$this->gatewayName];
     }

     public function sendRquist()
     {
         var_dump($this->mellat_options);
     }

     public function veriyfay()
     {
         // TODO: Implement veriyfay() method.
     }
 }

$gatway = factory::make('mellat');
$gatway->sendRquist();


class factory{

    public static function make($class)
    {
        $className = ucfirst($class);

        if(!class_exists($className)){
            return false;
        }
        return new $className;
    }
}