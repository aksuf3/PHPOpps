<?php

class persion{
    public $name,$age;
    function show(){
        echo $this->name."</br>".$this->age;
    }
}
$p1=new persion();
$p1->name="Yahoo Baba";
$p1->age=20;

$p1->show();
?>