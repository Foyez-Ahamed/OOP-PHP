<?php
// base class //
class Shape{

}

class Shapes {
    private $shapes;

    function __construct(){
        $this->shapes = array();
    }

    function addShape( Shape $shape ){
        array_push($this->shapes, $shape);
    }

    function totalShape(){
        return count($this->shapes);
    }
}

class Rectangle extends Shape{

}

class Triangle extends Shape{

}

class Student{

}

$shapeCollection = new Shapes();

$shapeCollection->addShape(new Rectangle());
$shapeCollection->addShape(new Triangle());

echo $shapeCollection->totalShape();