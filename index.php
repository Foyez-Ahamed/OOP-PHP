<?php 

// Define class //
class man {


    // properties //
    public $name;

    public $age;

    public $mother_name;

    public $father_name;


    // method //
    function mySelf($myName, $motherName){
        $this->name = $myName;
        $this->mother_name = $motherName;

        $info = "My name is" . " ". $this->name . " " . "My mother name is" . " " . $this->mother_name;

        return $info;
    }
}

// access class //

// create object //
$foyez = new man();

$foyez->name = "Foyez Ahamed";
$foyez->age = "26";
$foyez->mother_name ="Arafater Nesa";
$foyez->father_name ="Nurul Amin";

$myTotalInfo = $foyez->mySelf("Foyez Ahamed", "Arafater Nesa.");

echo $myTotalInfo . "<br>";


// create another object //
$konok = new man();

$myGfName = $konok->name = "Suraiya Zaman Konok";

$konokTotalInfo = $konok->mySelf('Suraiya Zaman Konok', 'Afroza Bulbul Swity.');

echo $konokTotalInfo;


?>

<!-- in this tutorial we learn how to create a class and how to create a object by using class, and how to access properties and methods  -->