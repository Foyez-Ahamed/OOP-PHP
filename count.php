<?php 

class DistrictCollection implements IteratorAggregate, Countable {

    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }

    // function getDistrict(){
    //     return $this->districts;
    // }

    function getIterator(): Traversable {
        return new ArrayIterator($this->districts);
    }

   function count(): int {
        return count($this->districts);
   }

}

$districts = new DistrictCollection();

$districts->add("Dhaka");
$districts->add("Chittagong");
$districts->add("Rajshahi");
$districts->add("Khulna");
$districts->add("Barishal");


echo count($districts);