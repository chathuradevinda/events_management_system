<?php
class Person {
  public $name;
  public $sex="M";
  public $dob;
  private $bank_account;

  Public function setAccount($acc){
    $this->bank_account=$acc;
  }

  Public function getAccount(){
    echo $this->bank_account;
  }
}

$p1 = new Person();
$p1->name="Chathura";
$p1->sex="M";
$p1->dob="1994.08.25";
$p1->setAccount(48516656212);
$p1->getAccount();
echo "</br>";

foreach ($p1 as $per) {
  echo $per;
  echo "</br>";
}

?>
