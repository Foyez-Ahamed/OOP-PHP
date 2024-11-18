


<?php

class Fund{

//    private $fund;
public $fund;

   public function __construct($initialFund=0){
      $this->fund = $initialFund;
   }

   public function addFund($money){
       $this->fund += $money;
   }

   public function deducFund($money) {
      $this->fund -= $money;
   }

   public function totalFund(){
     echo "Total Fund is {$this->fund}";
   }

}

$myFund = new Fund(100);

// $myFund->addFund(38);

// $myFund->deducFund(18);

// $myFund->totalFund();

// $myFund->fund = 150; 

// properties and method private korle bahir theke access kora jabe na , but class er vitore jekono method theke access kora jabe //

$myFund->addFund(38);

$myFund->totalFund();

?>