<!-- Note : Jokhon class er moddhe kono function auto execute korte hobe tokhon construct and destruct function use korbo , example blew -->

<?php 

class Fruit {

    public $name;

    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }

}

$apple = new Fruit('Apple', 'Green');

$banana = new Fruit('Banana', 'Yellow');

// echo $banana->get_name();

// echo "<br>";

// echo $banana->get_color();

?>



<!-- Destruct function example -->

<?php 

class Bird {

    public $name;

    public $eye;

    function __construct($name, $eye){
        $this->name = $name;
        $this->eye = $eye;
    }

    function __destruct(){
        echo "This is {$this->name} and this bird eye color is {$this->eye}";
    }
}

$parrot = new Bird('Parrot', 'Black');

?>

