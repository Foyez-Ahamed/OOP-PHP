<?php
namespace Astronomy;

include('planet.php');
include('earth.php');

$planet = new \Astronomy\Planets\Planet();

$earth = new \Astronomy\Planets\Earth();


$planet->getName();

echo "<br>";

$earth->getName();