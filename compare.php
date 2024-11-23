<?php 

class Planet {

    public $name;

    function __construct($name){
        $this->name = $name;
    }

}

$e1 = new Planet('Earth');

$e2 =  new Planet("Moon");

if($e1 ==  $e2) {
    echo "This is similar plante";
} else{
    echo "Not similar";
}

