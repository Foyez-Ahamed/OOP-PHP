
<!-- Inheritance related example -->

<?php 

class ParentClass{

    protected $name;

    function __construct($name){
        $this->name = $name;
        $this->sayHi();
        echo "<br>";
        $this->sayHello();
    }

    function sayHi(){
        echo "Hi this is {$this->name}";
        echo "<br>";
    }

    function sayHello(){
        echo "Hi this is sayHello method";
        echo "<br>";
    }
    
}


class ChildClss extends ParentClass {

    function sayHi(){
        parent::sayHi();
        echo "Hello";
    }

}


$myChild = new ChildClss('Foyez Ahamed');

// Note : Parent class theke child class extend korar por same name parent and child class e same method thakle child er ta age call hobe , oi khetre jodi parent er method call korte hoy tahole parent::method() use korte hobe //