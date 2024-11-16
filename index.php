<?php 

// Define class //
class man {


    // properties //
    public $name;

    public $age;

    public $mother_name;

    public $father_name;


    // method //
    function mySelf(){
        return "Hello this is Foyez Ahamed";
    }
}

// access class //

$foyez = new man();

$myname = $foyez->name = "Foyez Ahamed";

echo $myname . "<br>";




$konok = new man();

$myGfName = $konok->name = "Suraiya Zaman Konok";

echo $myGfName;

?>