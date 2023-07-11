<?php

class persion{
    public $name,$age;
    function __construct($name="No name",$age=0){
        $this->name=$name;
        $this->age=$age; 
    }
    function show(){
        echo $this->name."</br>".$this->age;
    }
}

$p1=new persion("Yahoo Baba",69);
$p1=new persion();
$p1->show();
?>