<?php 

class DistrictCollection implements IteratorAggregate {

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

}

$districts = new DistrictCollection();

$districts->add("Dhaka");
$districts->add("Chittagong");
$districts->add("Rajshahi");
$districts->add("Khulna");
$districts->add("Barishal");

foreach($districts as $district){
    echo $district. "<br>";
}