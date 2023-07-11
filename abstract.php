<?php
abstract class paentClass{
public $name;
abstract protected function calc($a,$b);
}

class childClass extends paentClass{
   public function calc($c,$d){
    echo $c+$d;
   }
}

$test=new childClass();
$test->calc(10,20);

?>