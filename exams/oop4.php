<?php

class Shape{
  var $x;
  function getName(){
    $this->x = "I'm a shape";
  }
}

class Circle extends Shape{
  function getParentName(){
    parent::getName();
    echo $this->x;
  }
}

$b = new Circle();
$b->getParentName();

 ?>
