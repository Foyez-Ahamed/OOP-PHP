<?php 

abstract class Myself{

    public $name;

    public function __construct($name){
        $this->name = $name;
        $this->myGfInfo();
    }

    abstract public function myGfInfo();

}

class myGf extends Myself{
    
    public function myGfInfo(){
       
        echo " My girlfriend name is {$this->name}";
    }

}

$gf = new myGf('Suraiya Zaman Konok');

// Note : Abastract diye parent class declare and class er moddhe properties and method declare korle must be child class e eita use korte hobe , must be same name and jodi kono arguments pass kore tahole same arugments dite hobe //