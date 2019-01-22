<?php
class Person {
  public $name;
  public $sex="M";
  public $dob;
  private $bank_account;

  function __construct($name,$sex,$dob,$acc){
    $this->name=$name;
    $this->sex=$sex;
    $this->dob=new DateTime($dob);
    $this->bank_account=$acc;
  }

  public function print_age($toDate){
    $interval = $this->dob->diff(new DateTime($toDate));
    echo "Years-".$interval->y."  Months-".$interval->m."  Days-".$interval->d;
  }
}

$p1 = new Person("Devinda","M","1994-08-25","4581665623565");
$p1->print_age("2019-01-03");


?>
