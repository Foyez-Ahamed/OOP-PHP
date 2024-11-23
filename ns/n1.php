<?php
namespace Project;

include("c1.php");

include("c2.php");

use \Project\Motorcycles\Bike as Pulsar; // 

$ex1 = new Pulsar();

$ex2 = new Bike();

echo $ex1->getName();

echo "<br>";

echo $ex2->getName();



// Note : amar kache bike name 2 ta same class ache, amra chaile alada namespace theke eigula excess korte pari but 2 ta bike dekhle ektu confused hoye jawar kotha, ei jonno amra les make kore then excess korbo //