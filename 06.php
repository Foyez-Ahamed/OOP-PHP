<?php 

class Shape {

    protected $name;
    protected $area; //all calculate this properties //

    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}.";
    }

    public function calculateArea(){} //this methods use in child all class for calculate //

}


class Triangle extends Shape{
    
    private $a, $b, $c;

    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct('Triangle');
    }

    public function calculateArea(){
        $perimeter = ($this->a+$this->b+$this->c)/2 ;

        $this->area = sqrt($perimeter*($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
    }

}

class Rectangle extends Shape{
    private $a, $b;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
        parent::__construct('Rectangle');
    }

    public function calculateArea(){
        $this->area = $this->a * $this->b;
    }

}

$r = new Rectangle(10, 10);

$r->getArea();

echo "<br>";

$t = new Triangle(7,8,9);
$t->getArea();

// Note : Best example OOP inheritance // 