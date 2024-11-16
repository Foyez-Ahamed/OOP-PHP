<?php 

class Fruit {

    public $name;

    public $color;


    public function __construct($name, $color){

        $this->name = $name;

        $this->color = $color;

    }

    protected function info(){
        echo "This fruit is {$this->name} and the color is {$this->color}.";
    }
}

//  Banana is inherited from fruit //
class Banana extends Fruit {

    public function message(){
        echo 'Am I a fruit or a banana?';

        $this->info();
    }

}

$banana = new Banana('Banana', 'Yellow');

$banana->message();

?>