<?php 

// Define class //
class man {


    // properties //
    public $name = 'Foyez Ahamed';
    public $age = '30';

    public $mother_name = "Arafater Nesa";

    public $father_name = "Nurul Amin";


    // method //
    function mySelf(){
        return "Hello this is Foyez Ahamed";
    }
}

// access class //

$foyez = new man();

echo "My mother name is" ." ". $foyez->mother_name . "<br>";

// access method that means function //
echo "This is Function that is method access" . " ". $foyez->mySelf();

?>