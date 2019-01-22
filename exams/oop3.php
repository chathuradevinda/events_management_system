<?php
class Person{
  public $name=null;
  public $sex="M";
  private static $oCount=0;

  function __construct($name,$sex){
    $this->name=$name;
    $this->sex=$sex;
    self::$oCount++;
  }

  public function print_object_count(){
    echo "Number of objects instantiated-".self::$oCount;
  }
}

$p1 = new Person("Saman","M");
$p2 = new Person("Kamal","M");
Person::print_object_count();

 ?>
