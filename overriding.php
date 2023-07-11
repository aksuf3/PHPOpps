<?php
class base{
    public $name="Parent Class";

    public function  calc($a,$b){
        return $a*$b;
    }
}
class derived extends base{
    public $name="Child Class";
    public function  calc($a,$b){
        return $a+$b;
    }
}
$test=new base();
echo $test->calc(4,6)."<br>";
$test1=new derived();
echo $test1->calc(5,6);


?>