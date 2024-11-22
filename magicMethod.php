<?php 

class Student{
    private $name;
    private $age;
    private $class;

    function __construct($name = '', $age = '', $class = ''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return $this->$prop;    
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }
}

$R = new Student('Foyez', '25', '10');

$R->name = "Suraiya Zaman Konok";

echo $R->name;


